<?php
$server = "127.0.0.1";
$login = "root";
$pass = "";
$name_db = "Nakaryakov_DataBase";
$list = array(0);

$link = mysqli_connect($server, $login, $pass, $name_db);

$idx = $_GET['idx'];

$inTable = mysqli_query($link, "SELECT Count(idx) FROM CART_TBL WHERE idx = $idx");

if ($inTable->fetch_row()[0] == "1"){
    mysqli_query($link, "UPDATE `CART_TBL` SET quantity = CART_TBL.quantity + 1 WHERE idx = $idx");
}
else{
    mysqli_query($link, "INSERT INTO CART_TBL SELECT * FROM PRODUCTS_TBL WHERE idx = $idx");
}