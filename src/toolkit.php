<?php


function dd(...$var){
    foreach($var as $key => $var){
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
    }
}

function ddd(...$var){
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    die();
}

function debugMode($active){
    if($active){
        ini_set("display_errors",1);
        ini_set("display_startup_errors", 1);
        error_reporting(E_ALL);
    }
}

function fromInc($name){
    if(file_exists("./templates/includes/". $name . ".inc.php")){
        include "./templates/includes/". $name . ".inc.php";
    }
    else{
        return "erreur";
    }
}

function getLayout($name){
    if(file_exists("./templates/layout/". $name . ".layout.php")){
        include "./templates/layout/". $name . ".layout.php";
    }
    else{
        return "erreur";
    }
}

