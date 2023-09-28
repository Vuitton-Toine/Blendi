<?php 
$message = "";
// If they click login do this, no password since it is prototype
    if (isset($_POST['login'])){
        $username = filter_input(INPUT_POST,'username');
        $password = filter_input(INPUT_POST,'password');
        session_start();
        $_SESSION['username'] = $username;
        if ($username=='Robin' && $password == 'Password123'){
            header('Location: ../hcpdashboard/index.php');
            exit();
        }
        if ($username=='Leo' && $password == 'Password123'){
            header('Location: ../pogdashboard/index.php');
            exit();
        }
        //if they dont put either set error message
        else{
            $message = "Login failed. Please try again.";
            include 'user_login.php';
            exit();
        }
    }

include 'user_login.php';
exit();

