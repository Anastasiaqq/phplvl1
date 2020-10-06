<?php 
function f($x, $y, $oper){
    if($oper=="plus"){
        $a=$x+$y;
        return $a;
    } elseif($oper=="minus"){
        $a=$x-$y;
        return $a;
    } elseif($oper=="multiple"){
        $a=$x*$y;
        return $a;
    } elseif($oper=="divide"){
        $a=$x/$y;
        return $a;
    }
}
echo f(11, 15, minus);
echo f(3, 7, plus);
echo f(7, 20, multiple);
echo f(33, 22, divide);
?>