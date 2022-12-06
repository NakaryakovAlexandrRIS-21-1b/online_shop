<?php
$server = "127.0.0.1";
$login = "root";
$pass = "";
$name_db = "Nakaryakov_DataBase";
$list = array();
$link = mysqli_connect($server, $login, $pass, $name_db);

$result = mysqli_query($link, "SELECT * FROM `CART_TBL`");

while($prod = mysqli_fetch_assoc($result))
{
    $list[] = $prod;
}
echo json_encode($list)
?>