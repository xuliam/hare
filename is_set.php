<?php
$a =1;
if(isset($a)){//判断变量是否纯在
    echo "exist";
    unset($a); //销毁
}else{
    echo "no";
}

