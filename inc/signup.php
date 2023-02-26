<?php

session_start();
require_once 'connect.php';

$FIO = $_POST['FIO'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];


if ($password === $password_confirm) {


    $password = md5($password);

    mysqli_query($connect, "INSERT INTO `users` (`id`, `FIO`, `login`, `email`, `password`) VALUES (NULL, '$FIO', '$login', '$email', '$password')");

    $_SESSION['message'] = 'Регистрация прошла успешно!';


} else {
    $_SESSION['message'] = 'Пароли не совпадают';
}

?>