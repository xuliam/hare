<?php
echo '<table width="500" height="500" border="1">';
for($i=1; $i<=10;$i++){
    if($i%2 == 0){
        echo "<tr bgcolor='red'><td></td></tr>";
    }else{
        echo "<tr bgcolor='green'><td></td></tr>";
    }
}
echo '<table>';
