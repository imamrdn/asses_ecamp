<?php 

function bagi($a, $b){
    $result = ($a % $b) + 2;
    return $result;
}

echo bagi(7, 2) . "<br>";
echo bagi(8, 4);

?>