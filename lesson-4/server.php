<?php
switch($_GET['url']){
    case $pics[$i]:
        for($k=2; $k<=count($pics); $k++){
            $url=$pics[$k];
            header(Location: $url);
            break;
        }
    default:
        echo "error";
        break;
}
?>