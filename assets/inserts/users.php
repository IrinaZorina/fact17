<?php

class User
{
    private $db;

    public function __construct($hostname, $username, $password, $dbname)
    {
        $this->db = mysqli_connect($hostname, $username, $password, $dbname);
        mysqli_set_charset($this->db, 'utf8');
    }
    public function register($login, $password)
    {
        $sql1 = "SELECT * FROM loginPassword WHERE (login = '$login')";
        $result1 = mysqli_query($this->db, $sql1);

        if (mysqli_num_rows($result1) > 0) {
            $row = mysqli_fetch_assoc($result1);
            if ($password == $row['password']) {
                return "<h2>Вы авторизовались, $login </h2>";
            } else {
                return "<h2>Неверный пароль</h2>";
            }
        } else {
            $sql2 = "INSERT INTO loginPassword (login, password) VALUES ('$login', '$password')";
            if (mysqli_query($this->db, $sql2)) {
                return "<h2>Вы зарегистрировались, $login </h2>";
            }
        }
    }
}

?>