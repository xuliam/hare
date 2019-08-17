<?php
$content = $_POST['content'];
$user = $_POST['user'];
$n = ['fuck', 'stupid','slack'];

if( $content == ""){
    die("Should have comments");
}

if ( $user == ""){
    die ("should have user name");
}

foreach ($n as $value){
    if($user == $value){
        die("The user name is not allowed");
    }
}

var_dump($content, $user);
