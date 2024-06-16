<?php

class User {
    public $connection;

    public function __construct($connection) {
        $this->connection = $connection;
    }

    private function checkEmptyField($required_fields) {
        $errors = array();
        foreach ($required_fields as $field) {
            if (empty($_POST[$field])) {
                $errors[$field] = 'Поле не заполнено';
            }
        }

        return $errors;
    }

    private function checkFieldLength($required_fields) {
        $errors = array();
        foreach ($required_fields as $field) {
            if ($field === 'password' && mb_strlen($_POST[$field]) > 64) {
                $errors[$field] = 'Максимальная длина текста 64 символа';
            } else if ($field === 'password' && mb_strlen($_POST[$field]) < 6) {
                $errors[$field] = 'Минимальная длина текста 6 символов';
            } else if (mb_strlen($_POST[$field]) > 128) {
                $errors[$field] = 'Максимальная длина текста 128 символов';
            }
        }

        return $errors;
    }

    private function selectQuery($con, $sql, $type = 'all') {
        mysqli_set_charset($con, "utf8");
        $result = mysqli_query($con, $sql) or trigger_error("Ошибка в запросе к базе данных: " . mysqli_error($con), E_USER_ERROR);

        if ($type === 'assoc') {
            return mysqli_fetch_assoc($result);
        }

        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function registration() {
        if (empty($_POST)) {
            return [];
        }
        
        $login = $_POST['login'] ?? '';
        $password = $_POST['password'] ?? '';
        $current_date = date('Y-m-d');

        $required_fields = ['login', 'password'];
        $errors = $this->checkEmptyField($required_fields);
        if (empty($errors)) {
            $errors = $this->checkFieldLength($required_fields, $errors);
        }
        
        if (empty($errors)) {
            $safe_login = mysqli_real_escape_string($this->connection, $login);
            $already_saved_login = $this->selectQuery($this->connection, "SELECT login FROM users WHERE login = '$safe_login'");
    
            if (isset($already_saved_login[0]['login'])) {
                $errors['login'] = 'Уже есть в системе.';
            }
        }
    
        if (!empty($errors)) {
            return $errors;
        }

        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $post_query = "INSERT INTO users (date_add, login, password) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($this->connection, $post_query);
        mysqli_stmt_bind_param($stmt, 'sss', $current_date, $login, $password_hash);
        mysqli_stmt_execute($stmt);

        $_SESSION['login'] = $login;
        $_SESSION['password'] = $password;
        $_SESSION['passwordHash'] = $password_hash;
        header('Location: index.php');
        exit();
        return [];
    }

    public function authenticate(){
        if (empty($_POST) && empty($_SESSION['login'])) {
            return [];
        }
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $required = ['login', 'password'];
            $errors = [];
            foreach ($required as $field) {
                if (empty($_POST[$field])) {
                    $errors[$field] = 'Это поле надо заполнить';
                }
            }
    
            if (empty($errors)) {
                $login = $_POST['login'];
                $safe_login = mysqli_real_escape_string($this->connection, $login);
                $user_query = $this->selectQuery($this->connection, "SELECT * FROM users WHERE login = '$safe_login'", 'assoc');
    
                $user = $user_query ? $user_query : null;
    
                if (isset($user)) {
                    if (password_verify($_POST['password'], $user['password'])) {
                        $_SESSION['login'] = $user['login'];
                        $_SESSION['password'] = $_POST['password'];
                        $_SESSION['passwordHash'] = $user['password'];
                    } else {
                        $errors['password'] = 'Неверный пароль';
                    }
                } elseif (!isset($user)) {
                    $errors['login'] = 'Такой пользователь не найден';
                }
            }
        } else {
            if (isset($_SESSION['login'])) {
                header("Location: /index.php");
                exit();
            }
        }
    
        if (empty($errors)) {
            header("Location: /index.php");
            exit();
        }
    
        return $errors;
    }
}