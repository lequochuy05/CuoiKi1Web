<?php
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }else{
        $action = '';
    }
    switch ($action) {
        case 'home':
        
        require_once("View/Home/index.php");
        break;
        
        default:
            $message = "Unknown error.";
            break;
    }
?>
