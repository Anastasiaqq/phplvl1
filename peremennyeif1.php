<?php 
$a=10;
$array=[1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];
switch($a){        
    case $a<15:
        for($i=$a; $i<=15; $i++){
            echo $i;
        }
        break;
    default:
        echo "Некорректное число";
}

?>