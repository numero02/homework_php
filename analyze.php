<?php
    var_dump($_GET);
    var_dump($_SERVER['REQUEST_METHOD']);
    if(empty($_GET["firstName"]) || empty($_GET["lastName"]) || empty($_GET["age"]) ){
        echo "firstName or lastName empty";
    }else{
        foreach($_GET as $element){
            echo "<br>";
            echo $element;
        }
    }




?>