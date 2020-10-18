<?php

include("calcnew.php");
$a=!empty($_POST['n1'])?strip_tags($_POST["n1"]):" ";
$b=!empty($_POST['n2'])?strip_tags($_POST["n2"]):" ";

$sign=$_POST["sign"];
switch(isset($sign) && int($a) && int($b)){
        case "+":
        $answer=$a+$b;
        break;
    case "-":
        $answer=$a-$b;
        break;
    case "*":
        $answer=$a*$b;
        break;
    case "/":
        if($b!=0){
            $answer=$a/$b;
            break;
        } else{
            $answer="Деление на ноль:(";
        }
    default:
        echo "error";
}

?>