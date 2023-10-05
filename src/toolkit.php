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
    include "./templates/includes/". $name . ".inc.php";
}

function rooter($page){
    foreach($_GET as $key => $page){
        if($page === 'accueil'){
        fromInc('accueil');
        }
        else if($page === 'contact'){
            echo "je suis le contact";
        }
        else{
            echo "erreur 404";
        }
    }
}


