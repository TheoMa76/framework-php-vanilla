<?php

require_once "./configs/bootstrap.php";
debugMode($globalConfigs,"debugMode");
fromInc("menu");
fromInc($_GET['page']);
getLayout()

?>