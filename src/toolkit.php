<?php
<<<<<<< HEAD


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
=======
function dd( ...$params)
{
    foreach ($params as $param) {
        echo "<pre>";
        var_dump($param);
        echo "</pre>";
    }
    return;

}
function ddd( ...$params)
{
    echo "<pre>";
    var_dump($params);
    echo "</pre>";
        die();
}

function debugMode($active)
{
    if($active){
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
 
    }
    return;
>>>>>>> remote/layouts-and-pages
}

function fromInc($name){
    if(file_exists("./templates/includes/". $name . ".inc.php")){
        include "./templates/includes/". $name . ".inc.php";
<<<<<<< HEAD
    }
    else{
        return "erreur";
=======
    }else{
        return false;
>>>>>>> remote/layouts-and-pages
    }
}

function getLayout($name){
<<<<<<< HEAD
    if(file_exists("./templates/layout/". $name . ".layout.php")){
        include "./templates/layout/". $name . ".layout.php";
    }
    else{
        return "erreur";
    }
}

=======
    // if(file_exists("./templates/layouts/". $name . ".layout.php")){
        include "./templates/layouts/". $name . ".layout.php";
    // }else{
    //     return false;
    // }
}
>>>>>>> remote/layouts-and-pages
