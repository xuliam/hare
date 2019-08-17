<?php
$a1 = 1;
$a2 = "sljflasjdf$a1";
$a3 = 'aldfjlajdf$a1';

echo $a1;
echo "<br/>";
echo $a2;
echo '<br/>';
echo $a3;

$arr1 = [1,2,3];
$arr2 = [
    'a' => 1,
    'b' => 2,
    9 => 3,
];
echo "<br/>";
var_dump( $arr1, $arr2);