<?php
    $host = "localhost";
    $database="pictures";
    $user="root";
    $password="";

    $link=mysqli_connect($host, $user, $password, $database)
        or die("Ошибка ".mysqli_error($link));
    $result=mysqli_query($link, "SELECT * FROM pictures WHERE id>0");
    $row=mysqli_fetch_assoc($result);
    $lk=array();
    foreach($row as $id=>$name){
        array_push($lk, $name);
    }
    
?>