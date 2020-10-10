<?php
$a=0;
echo $a." - ноль";
do{
    if($a%2=0){
        echo $a." - четное число";
        $a++;
    }
    else{
        echo $a." - нечетное число";
        $a++;
    }
} while($a<=10)
?>