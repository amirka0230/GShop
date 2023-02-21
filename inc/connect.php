<?php

    $connect = mysqli_connect('localhost', 'root', '', 'GLHFshop');

    if (!$connect) {
        die ('Ошибка соединения с базой данных');
    }

