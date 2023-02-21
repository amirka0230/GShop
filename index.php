<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <title>Демо Bootstrap</title>
  </head>
  <body>
  <div class="wrapper">
   <nav class="navbar">
       <div class="container">
           <a href="#" class="navbar-brand">Good Luck Have Fun</a>
           <div class="navbar-wrap">
               <ul class="navbar-menu">
                   <li><a href="#">Новинки!</a></li>
                   <li><a href="#">Каталог</a></li>
                   <li><a href="#">О нас</a></li>
                   <li><a href="#">Контакты</a></li>
               </ul>
               <div class="button">
                   <a href="#popup" class="popup-link">Войти</a>
               </div>
           </div>
       </div>
   </nav>
   <div id="popup" class="popup">
       <div class="popup_body">
           <div class="popup_content">
               <a href="#" class="popup_close close-popup">&#10006</a>
               <div class="popup_title">Авторизация</div>
                   <div class="popup_text">
                       <form action="">
                           <label>Логин</label>
                           <input type="text" placeholder="Логин">
                           <label>Пароль</label>
                           <input type="password" placeholder="Пароль">
                           <button>Войти</button>
                           <div class="text_reg"><p>У вас нет аккаунта? - <a href="#popup_1" class="popup-link" id="open_pop_up_reg">Зарегистрируйтесь</a></p></div>
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
               <div class="popup_text">
                   <form action="">
                       <label>Логин</label>
                       <input type="text" placeholder="Введите логин">
                       <label>Фамилия</label>
                       <input type="text" placeholder="Введите фамилию">
                       <label>Имя</label>
                       <input type="text" placeholder="Введите имя">
                       <label>Mail</label>
                       <input type="text" placeholder="Введите mail">
                       <label>Пароль</label>
                       <input type="password" placeholder="Придумайте пароль">
                       <label>Подтверждение Пароля</label>
                       <input type="password" placeholder="Подтвердите пароль">
                       <button>Войти</button>
                       <div class="text_reg"><p>У вас уже есть аккаунт? - <a href="#popup" class="popup-link" id="open_popup_auth">Войдите</a></p></div>
                   </form>
               </div>
           </div>
       </div>
   </div>
  <script src="JS/main.js"></script>
  </body>
  </html>
