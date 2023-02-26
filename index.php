<?php
session_start();
if ($_SESSION['user']) {
    header('Location: profile.php');
}
?>
<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./css/main.css"/>
    <title>Демо Bootstrap</title>
  </head>
  <body>
  <div class="wrapper">
   <nav class="navbar">
       <div class="container">
           <a href="#" class="navbar-brand">GL HF</a>
           <div class="navbar-wrap">
               <ul class="navbar-menu">
                   <li><a href="#">Новинки!</a></li>
                   <li><a href="#">Каталог</a></li>
                   <li><a href="#">О нас</a></li>
                   <li><a href="#">Контакты</a></li>
               </ul>
                   <button href="#popup" class="button popup-link">Войти</button>
           </div>
       </div>
   </nav>
   <div id="popup" class="popup">
       <div class="popup_body">
           <div class="popup_content">
               <a href="#" class="popup_close close-popup">&#10006</a>
               <div class="popup_title"><a href="#" class="navbar-brand">GLHF</a><P>Авторизация</P></div>
                   <div class="popup_text">
                       <form action="">
                           <label>Логин</label>
                           <input type="text" placeholder="Логин" name="login">
                           <label>Пароль</label>
                           <input type="password" placeholder="Пароль" name="password">
                           <button class="button_login">Войти</button>
                           <div class="text_auth"><p>У вас уже есть аккаунт? - <a href="#popup_1" class="popup-link" id="open_popup_reg">Зарегистрируйтесь</a></p></div>
                       </form>
                   </div>
           </div>
       </div>
   </div>
  </div>
   <div id="popup_1" class="popup">
       <div class="popup_body">
           <div class="popup_content">
               <a href="#" class="popup_close close-popup">&#10006</a>
               <div class="popup_title">Регистрация</div>
               <div class="popup_text_reg">
                   <form action="inc/check.php" id="form_reg">
                       <label>Логин*</label>
                       <input type="text" name="login"  placeholder="Введите логин">
                       <label>Фамилия и имя*</label>
                       <input type="text" name="FIO" placeholder="Введите фамилию и имя" >
                       <label>E-Mail*</label>
                       <input type="text" name="mail"  placeholder="Введите e-mail">
                       <label>Пароль*</label>
                       <input type="password" name="password" placeholder="Придумайте пароль">
                       <label>Подвердите пароль*</label>
                       <input type="password" name="password_confirm" placeholder="Придумайте пароль">
                       <div class="checkbox">
                           <input id="checkbox_agree" type="checkbox" name="agreement" class="checkbox_input">
                           <label for="checkbox_agree" class="checkbox_label"><span>Я даю свое согласие на обработку персональных данных в соответствии с <a href="">Условиями</a>*</span></label>
                       </div>
                       <p class="msg none">Lorem ipsum dolor sit amet.</p>
                       <button type="submit" class="reg_button">Зарегистрироваться</button>
                       <div class="text_reg">
                           <p>У вас уже есть аккаунт? - <a href="#popup" class="popup-link" id="open_popup_auth">Войдите</a></p>
                       </div>
                   </form>
               </div>
           </div>
       </div>
   </div>
  <script src="JS/jquery-3.4.1.min.js"></script>
  <script src="JS/main.js"></script>
  <script src="JS/popup.js"></script>
  </body>
  </html>
