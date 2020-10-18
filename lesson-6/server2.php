<?php
include("calc.php");
$a=!empty($_POST['n1'])?strip_tags($_POST["n1"]):" ";
$b=!empty($_POST['n2'])?strip_tags($_POST["n2"]):" ";

$sign=$_POST["sign"];
switch (!empty($sign) && int($a) && int($b)){
    case "plus":
        $answer=$a+$b;
        break;
    case "minus":
        $answer=$a-$b;
        break;
    case "mltpl":
        $answer=$a*$b;
        break;
    case "divide":
        if($b!=0){
            $answer=$a/$b;
            break;
        } else{
            $answer="Деление на ноль:(";
        }
    default:
        echo "error";
}
echo $a.$sign.$b." = $answer";



?>