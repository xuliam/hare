<?php
$host = "127.0.0.1";
$dbuser = "root";
$pwd  = "";
$dbname = "test";

$db =new mysqli($host, $dbuser, $pwd, $dbname);

$sql =" select * from msg order by id Desc ";

$mysqli_result = $db->query($sql);
var_dump($mysqli_result -> fetch_array(MYSQLI_ASSOC));
var_dump($mysqli_result -> fetch_array(MYSQLI_ASSOC));
var_dump($mysqli_result -> fetch_array(MYSQLI_ASSOC));
var_dump($mysqli_result -> fetch_array(MYSQLI_ASSOC));
var_dump($mysqli_result -> fetch_array(MYSQLI_ASSOC));
//while( $row = $mysqli_result -> fetch_array(MYSQLI_ASSOC)) {
//        var_dump($row);
//}
//var_dump($mysqli_result);