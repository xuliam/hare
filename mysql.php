<?php
$host = "127.0.0.1";
$dbuser = "root";
$pwd  = "";
$dbname = "test";

$db =new mysqli($host, $dbuser, $pwd, $dbname);
var_dump($db);
