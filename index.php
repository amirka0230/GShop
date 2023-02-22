<?php
 session_start();
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
                           <input type="text" placeholder="Логин">
                           <label>Пароль</label>
                           <input type="password" placeholder="Пароль">
                           <button>Войти</button>
                           <div class="text_auth"><p>У вас нет аккаунта? - <a href="#popup_1" class="text_auth popup-link" id="open_pop_up_reg">Зарегистрируйтесь</a></p></div>
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
                   <form action="inc/check.php" method="post">
                       <label>Логин</label>
                       <input type="text" name="login" placeholder="Введите логин">
                       <label>Фамилия и имя</label>
                       <input type="text" name="FIO" placeholder="Введите фамилию и имя">
                       <label>Mail</label>
                       <input type="text" name="mail" placeholder="Введите mail">
                       <label>Пароль</label>
                       <input type="password" name="password" placeholder="Придумайте пароль">
                       <label>Подтверждение Пароля</label>
                       <input type="password" name="password_confirm" placeholder="Подтвердите пароль">

                           <?php
                           if ($_SESSION['message'])
                           {echo '<p class="msg"> ' . $_SESSION['message'] . '</p>';
                           }
                           unset ($_SESSION['message']);
                           ?>

                       <button>Зарегистрироваться</button>
                       <div class="text_reg"><p>У вас уже есть аккаунт? - <a href="#popup" class="popup-link" id="open_popup_auth">Войдите</a></p></div>
                   </form>
               </div>
           </div>
       </div>
   </div>
  <script src="JS/main.js"></script>
  </body>
  </html>
