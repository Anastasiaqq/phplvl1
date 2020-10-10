<?php

$sentence = "without hope without witness without reward";
function comedy($t){
    $arr=explode(" ", $t);
    $comedy=implode("_", $arr);
    return $comedy;
}
echo comedy($sentence);

?>