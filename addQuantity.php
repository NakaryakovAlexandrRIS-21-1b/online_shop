<?php
$server = "127.0.0.1";
$login = "root";
$pass = "";
$name_db = "Nakaryakov_DataBase";

$link = mysqli_connect($server, $login, $pass, $name_db);

$idx = $_GET['idx'];

mysqli_query($link, "UPDATE `CART_TBL` SET quantity = CART_TBL.quantity + 1 WHERE idx = $idx");