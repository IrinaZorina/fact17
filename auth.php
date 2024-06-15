<?php

class auth
{
    private $tableName;
    private $connection;
    private $arErrors;

    public function __construct()
    {
        $this->tableName = 'users';
        $this->getConnection();

        mysqli_query($this->connection, "
            CREATE TABLE IF NOT EXISTS {$this->tableName} (
            id int not null AUTO_INCREMENT,
            login varchar(50),
            password varchar(64),
            PRIMARY KEY(id))
        ");
    }

    private function getConnection() {
        $host = "localhost";
        $username = "fact";
        $password = "fact";
        $dbname = "project_fact";

        $this->connection = mysqli_connect($host, $username, $password, $dbname);
        mysqli_set_charset($this->connection, "utf8");
    }

    public function add($login, $password)
    {
        if ($user = $this->getUser($login)) {
            $this->addError('login already exists');
        } else {
            $password = md5($password);
            mysqli_query($this->connection, "
            INSERT INTO {$this->tableName} (login, password) VALUES ('{$login}', '{$password}')
            ");
        }
    }

    public function auth($login, $password)
    {
        if ($this->check($login, $password)) {
            // success
            $_SESSION['auth'] = true;
            return true;
        } else {
            $this->addError('login or password is incorrect');
        }
        return false;
    }

    private function check($login, $password)
    {
        $password = md5($password);
        $result = mysqli_query($this->connection, "
        SELECT 'login' FROM {$this->tableName} WHERE login = '{$login}' AND password = '{$password}';
        ");
        return (mysqli_num_rows($result) > 0);
    }

    private function getUser($login)
    {
        mysqli_query($this->connection, "
            SELECT * FROM `{$this->tableName}` WHERE `login`='{$login}'");
    }

    private function addError($message) {
        $this->arErrors[] = $message;
    }

    public function getErrors()
    {
        return $this->arErrors;
    }
}