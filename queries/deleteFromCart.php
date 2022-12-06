<?php
$server = "127.0.0.1";
$login = "root";
$pass = "";
$name_db = "Nakaryakov_DataBase";
$list = array(0);

$link = mysqli_connect($server, $login, $pass, $name_db);

$idx = $_GET['idx'];

mysqli_query($link, "DELETE FROM CART_TBL WHERE idx = $idx");
