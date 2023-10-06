<?php

require_once './configs/bootstrap.php';
if(isset($_GET["page"])){
    fromInc($_GET['page']);
}

$pageContent = [
    'html' => ob_get_clean()
];
include "./templates/layout/". $_GET["layout"] .".layout.php";
debugMode($globalConfigs["debugMode"]);
?>
