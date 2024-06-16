<?php
class Users{   
    public function __construct($hostname, $username, $password, $dbname)
    {
        $this->db = mysqli_connect($hostname, $username, $password, $dbname);
    }
    public function register($login, $password)
    {
        $sql = "SELECT * FROM loginPassword WHERE (login = '$login')";
        $res = mysqli_query($this->db, $sql);

        if (mysqli_num_rows($res) > 0) {
            $row = mysqli_fetch_assoc($result1);
            if ($password == $row['password']) {
                return "Вы авторизовались";
            } else {
                return "Неверный пароль";
            }
        } else {
            $sql1 = "INSERT INTO loginPassword (login, password) VALUES ('$login', '$password')";
            if (mysqli_query($this->db, $sql1)) {
                return "Вы зарегистрировались";
            }
        }
    }
}
?>