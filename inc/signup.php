<?php
 require_once 'connect.php';
 $login = $_POST['login'];
$Fname = $_POST['Fname'];
$name = $_POST['name'];
$mail = $_POST['mail'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

if ($password === $password_confirm) {

}
else
{
 die ('Пароли не совпадают');
}
 ?>
