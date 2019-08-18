<?php
include("input.php");
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
