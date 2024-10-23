<?php

if(isset($_GET['action'])){
    $action = $_GET['action'];
} else {
    $action = '';
}   

switch ($action) {
    case 'add_user':
        if(isset($_POST['add_account'])){
            $input_fullName = $_POST['fullName'];
            $input_user = $_POST['username'];
            $input_email = $_POST['email'];
            $input_phone = $_POST['num_phone'];
            $input_pass = $_POST['password'];
            $input_re_pass = $_POST['re_password'];
            
            // $captcha = $_POST['captcha'];
            
            if (!checkPassLength($input_pass)) {
                $message = "Password must be more than 8 characters.";
            } else if (!checkPass_input($input_pass, $input_re_pass)) {
                $message = "Passwords do not match.";
            } else {
                $hashPass = password_hash($input_pass, PASSWORD_DEFAULT);                       
                $db_regis->Insert($input_user, $hashPass, $input_fullName, $input_email, $input_phone);
                //header("Location: http://localhost/CuoiKi1_2425/index.php?controller=login&action=login");
                $message = "User added successfully!";
                
            }  
        }
        require_once('View/Register/index.php');  
        break; 
    
    default:
        $message = "Unknown error.";
        break;
}
?>
