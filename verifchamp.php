<?php
session_start();
include 'classe/insertion.class.php';

if(isset($_SESSION['nom'])!="") {
    header("Location: pizza.php");
}

if(isset($_POST['signup']))

{
    $nom= $_POST['nom'];
    $email=$_POST['email'];
    $pwd=$_POST['pwd'];
    $phone=$_POST['phone'];
    $adresse=$_POST['adresse'];



    if (!preg_match("/^[a-zA-Z ]+$/",$nom))
    {
        $nom_error="name must contain only letters,numbers and space";
        goto phtml;
     }
   if(!filter_var($email,FILTER_VALIDATE_EMAIL))
  {
   $email_error = "please enter valid email";
    goto phtml;
   }

   if(strlen ($pwd) <6)
      {
    $pwd_error="password must be minimum of 6 caracter";
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

   $user=new user;
   $hashed_password = password_hash($pwd,PASSWORD_DEFAULT);
    $user->register($nom,$email,$hashed_password);
    $user->register($_POST['nom'], $_POST['email'], $_POST['pwd'], $_POST['phone'], $_POST['adresse']);

    header('location:login.php');
    exit();
}
phtml:
include 'register.phtml';
