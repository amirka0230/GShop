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
    $password_confirm = filter_var(trim($_POST['password_confirm']),
    FILTER_SANITIZE_STRING);

    if(mb_strlen($login) < 5 || mb_strlen($login) > 100) {
        echo "Недопустимая длина логина";
        exit();
    } else if (mb_strlen($FIO) < 3 || mb_strlen($FIO) > 250) {
        echo "Недопустимая длина фамилии и имени";
        exit();
    } else if (mb_strlen($mail) < 3 || mb_strlen($mail) > 100) {
        echo "Недопустимая длина e-mail адреса";
        exit();
    }
    else if (mb_strlen($password) < 7 || mb_strlen($password) > 33) {
        echo "Недопустимая длина пароля (от 8 до 32 символов)";
        exit();
    }


    if ($password != $password_confirm) {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: /#popup_1');

    }
    else {
        $password = md5("awejracjtp".$password."bdrtinbspe");

        $mysqli = new mysqli('localhost', 'root', '', 'GLHFshop');
        $mysqli->query("INSERT INTO `users` (`login`, `FIO`, `mail`, `password`)
    VALUES ('$login','$FIO','$mail','$password')");

        $mysqli->set_charset('utf8mb4_general_ci');

        $mysqli->close();

        header('Location: /');
}

?>