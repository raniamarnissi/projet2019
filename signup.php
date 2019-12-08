<?php

    session_start();

    include 'classes/user.class.php';

    if(isset($_SESSION['username'])!="") {
        header("Location: pizza.php");
    }

    if (isset($_POST['signup'])) {
       
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $adresse = $_POST['adresse'];

        
        if (!preg_match("/^[a-zA-Z0-9 ]+$/",$username)) {
            $username_error = "Name must contain only letters, numbers and space";
            goto phtml;
        }

        if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $email_error = "Please Enter Valid Email";
            goto phtml;
        }

        if(strlen($password) < 6) {
            $password_error = "Password must be minimum of 6 characters";
            goto phtml;
        }

        if(!preg_match("/[0-9]/",$phone))
        {
            $phone_error="please enter valid phone";
            goto phtml;
        }

        if(strlen ($phone) <8)
      {
    $pwd_error="phone doit etre de taille 8";
   goto phtml;
   }


   if(!preg_match("/^[a-zA-Z ]+$/",$adresse))
   {
    $adresse_error="adresse dosnt verifier ";
    goto phtml;
   }

        $user = new User;
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $user->register($username, $email, $hashed_password,$phone,$adresse);
        header('Location:login.php');
        exit();
    }
    phtml:
    include 'signup.phtml';