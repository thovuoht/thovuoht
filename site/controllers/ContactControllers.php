<?php
require_once '../../../global.php';
if (isset($_GET["action"]) == true) {
    $action = $_GET["action"];    
    switch ($action) {        
        case 'search':
            break;
        default:
            require '../layout.php';
            break;
    }
} else {
    $VIEW_NAME = 'view/contact/default.php';
    include "../../layout.php";
}
;
