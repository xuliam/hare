<?php
$year = 2001;
if($year % 4 == 0 && $year % 100 !=0 || $year % 400 == 0){
    echo $year." is leap year";
}else
    echo "no!";
