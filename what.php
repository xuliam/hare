<?php
echo str_replace('world','dolly','hello world!');
"<br>";
$colors = array('red', 'green', 'blue', 'yellow');

foreach ($colors as $value){
    echo "$value <br>";
}

function sum($x, $y) {
    $z = $x + $y;
    return$z;
}
echo "5 + 10 = ".sum(5,10)."<br>";
echo "7 + 13 = ".sum(7,13)."<br>";
echo "2 + 4 = ". sum(2,4);

function setHeight($minheight =50) {
    echo"The height is : $minheight <br>";
}
