<?php
$localhost = "192.168.0.200";
$db = "40_mysitedb_skvortcov";
$user = "stis3-40";
$password = "i3mL3$H}r";
$link = mysqli_connect($localhost, $user, $password) or
trigger_error(mysql_error(),E_USER_ERROR);
//trigger_error выводит на страницу сообщение об ошибке. Первый параметр - сообщение об ошибке
//в строковом виде, в данном случае возвращается функция mysql_error(), второй - числовой код //ошибки(почти всегда используется значение константы E_USER_ERROR, равное 256)
//Следующие строки необходимы для того, чтобы MySQL воспринимал кириллицу.
//Параметры функции mysqli_query(): идентификатор соединения с сервером и запрос SQL
mysqli_query($link, "SET NAMES utf8;") or die(mysql_error());
mysqli_query($link, "SET CHARACTER SET utf8;") or die(mysql_error());
//Выбор базы данных на сервере localhost
mysqli_select_db($link, $db);
?>