<?php
require_once "./templates/includes/html_header.inc.php";

if(isset($pageContent)){
    echo $pageContent['html'];
}
require_once "./templates/includes/html_footer.inc.php";
fromInc("menu");