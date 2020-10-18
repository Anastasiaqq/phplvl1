<?php

$letters = [
    "а" => "a",
    "б" => "b",
    "в" => "v",
    "г" => "g",
    "д" => "d",
    "е" => "e",
    "ё" => "yo",
    "ж" => "zh",
    "з" => "z",
    "и" => "i",
    "й" => "j",
    "к" => "k",
    "л" => "l",
    "м" => "m",
    "н" => "n",
    "о" => "o",
    "п" => "p",
    "р" => "r",
    "с" => "s",
    "т" => "t",
    "у" => "u",
    "ф" => "f",
    "х" => "h",
    "ц" => "c",
    "ч" => "ch",
    "ш" => "sh",
    "щ" => "sch",
    "ъ" => "'",
    "ы" => "y",
    "ь" => "j",
    "э" => "e",
    "ю" => "yu",
    "я" => "ya",
    " " => " "
];
$str = "на деда мороза надейся но сам не плошай";
$str_arr = preg_split("//", $str, -1);
function translit($s){
    for($i=0; $i<=count($string_arr); $i++){
        for($k=0; $k<=count($letters); $k++){
            if($string_arr[$i]==$letters[$k]){
                $str-arr[$i]=$letters[$k];
            }
        }
        return implode("", $str_arr);
    } 
}
$hey = translit($str_arr);
echo $hey;

?>