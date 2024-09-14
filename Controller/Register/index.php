<?php

    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }else{
        $action = '';
    }
    $success = array();

    switch ($action) {
        case 'add':
            if(isset($_POST['add_account'])){
                $user = $_POST['username'];
                $pass = $_POST['pass'];
                $re_pass = $_POST['re_pass'];
                $captcha = $_POST['captcha'];
                if(!empty($user)){
                    if(!empty($pass)){
                        if(!empty($re_pass)){
                            if($db->Insert($user, $pass)){
                                $thanhcong[] = 'add_success';
                            }
                        }else{
                            echo "<script>alert('Re_pass is empty'); </script>";
                        }
                    }else{
                        echo "<script>alert('Password is empty ');</script>";
                    }
                }else{
                    echo "<script>alert('Username/Email is empty ');</script>";
                }
            }
            require_once('View/Register/register.php');
            break;
        
        default:
            # code...
            break;
    }
?>