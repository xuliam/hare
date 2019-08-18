<?php
// connect to database;
$host = "127.0.0.1";
$dbuser = "root";
$pwd  = "";
$dbname = "test";

$db = new mysqli( $host, $dbuser, $pwd, $dbname);
if( $db->connect_errno <>0 ){
    die("fail to connect");
}
