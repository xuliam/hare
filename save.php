<?php
include("input.php");
include('connect.php');
$content = $_POST['content'];
$user = $_POST['user'];


$input = new input();


$is = $input -> post($content);
if($is == false){
    die("the message is wrong");
}

$is = $input -> post($user);
if($is == false){
    die("You can't use that name");
}


var_dump($content, $user);



//$db -> query("SET NAMES UTF8");
//this is used for chinese characters.

$time = time();
$sql = "insert into msg ( content, user, time ) values ('$content', '$user', '$time')";
$is = $db->query($sql);
var_dump($is);