<?php
    
    
    $username = empty($_COOKIE['username']) ? '' : $_COOKIE['username'];

    // If the user is logged in, redirect them home
    if ($username) {
        header("Location: member.php");
        exit;
    }
    
    // Pull out "action" value from $_POST
    $action = empty($_POST['action']) ? '' : $_POST['action'];
    
    if ($action == 'do_login') {
        // If the action is "do_login", then the form was submitted
        handle_login();
    } else {
        // Else, the form wasn't submitted, so present the login
        login_form();
    }
    
    function handle_login() {
        $username = empty($_POST['username']) ? '' : $_POST['username'];
        $password = empty($_POST['password']) ? '' : $_POST['password'];
        
        if($username == 'test' && $password == 'pass'){
            setcookie('username', $username);
            header("Location: member.php");
            exit;
        }else{
            //ALERT BOX HERE
            $error = "Error: Incorrect username or password";
            require "login.php";
        }
    }
    
    function login_form() {
        $username = "";
        $error = "";
        require "login.php";
    }
?>