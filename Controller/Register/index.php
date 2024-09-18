<?php

if(isset($_GET['action'])){
    $action = $_GET['action'];
} else {
    $action = '';
}

$add_successful = array();

switch ($action) {
    case 'add_user':
        if(isset($_POST['add_account'])){
            $input_user = $_POST['username'];
            $input_pass = $_POST['password'];
            $input_re_pass = $_POST['re_password'];
            $captcha = $_POST['captcha'];
            
            if (empty($input_user) || empty($input_pass) || empty($input_re_pass)) {
                $message = "Please fill in all information.";
            } else if (!checkPassLength($input_pass)) {
                $message = "Password must be more than 8 characters.";
            } else if (!checkPass_input($input_pass, $input_re_pass)) {
                $message = "Passwords do not match.";
            } else {
                $hashPass = password_hash($input_pass, PASSWORD_DEFAULT);                       
                $db_regis->Insert($input_user, $hashPass);
                $message = "User added successfully!";
            }
            
            require_once('View/Register/index.php');
            
        }
        require_once('View/Register/index.php');  
        break; 
    default:
        echo 'Unknown error';
        break;
}
?>
