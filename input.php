<?php

class input{
    function post($content){
        if( $content == ""){
            return false;
        }
        $n = ['fuck', 'stupid','slack'];
        foreach ($n as $value){
            if($content == $value){
                return false;
            }
        }
        return true;
    }

}