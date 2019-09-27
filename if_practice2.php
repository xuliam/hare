<?php

$a =null;
if(isset($a)){
    echo"exist";
    unset($a);
}else{
    echo "not exist";
}
echo $a;
