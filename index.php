<?php

require_once './configs/bootstrap.php';
// ob_start();
if(isset($_GET["page"])){
    fromInc($_GET['page']);
}

$pageContent = ob_get_clean();
include "./templates/layout/". $_GET["layout"] .".layout.php";
?>
