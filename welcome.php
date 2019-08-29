<?php

if (!preg_match("/^[a-zA-Z]*$/", $_POST['name'])){
    echo "wrong";
}else{
    echo $_POST['name'];
}

if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    echo "right";
        }else{
        echo $_POST['email'];
    }

//
//echo $_POST['name'];
//
//echo $_POST['email'];

