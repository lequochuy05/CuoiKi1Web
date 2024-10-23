<?php
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }else{
        $action = '';
    }
    switch ($action) {
        case 'login':
            if(isset($_POST['login'])){
                $input_user = $_POST['username'];
                $input_pass = $_POST['password'];
               
                if (empty($input_user) || empty($input_pass)) {
                    $message = "Please fill in all information.";
                } else {    
                    if(!$db_log->checkUserExistence($input_user, $input_pass)){
                        $message = "Username/Password is Incorrect.";
                    }else{     
                         $message = "Login successful";     
                    }                 
                }               
            }
            require_once('View/Login/index.php');           
            break;
        
        case 'forgot_pass':
            if(isset($_POST['forgot'])){
        
            }
            require_once('View/Forgot_password/index.php');
            break;
        default:
            $message = "Unknown error.";
            break;
    }
?>
