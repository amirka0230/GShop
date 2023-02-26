<?php

    session_start();

    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $FIO = filter_var(trim($_POST['FIO']),
    FILTER_SANITIZE_STRING);
    $mail = filter_var(trim($_POST['mail']),
    FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']),
    FILTER_SANITIZE_STRING);


    if(mb_strlen($login) < 5 || mb_strlen($login) > 100) {

    } else if (mb_strlen($FIO) < 2 || mb_strlen($FIO) > 251) {
    } else if (mb_strlen($mail) < 7 || mb_strlen($mail) > 101) {
    }
    else if (mb_strlen($password) < 7 || mb_strlen($password) > 33) {
    }



        $password = md5("awejracjtp".$password."bdrtinbspe");

        $mysqli = new mysqli('localhost', 'root', '', 'GLHFshop');
        $mysqli->query("INSERT INTO `users` (`login`, `FIO`, `mail`, `password`)
    VALUES ('$login','$FIO','$mail','$password')");

        $mysqli->set_charset('utf8mb4_general_ci');

        $mysqli->close();

        header('Location: /');


?>