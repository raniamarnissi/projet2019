<?php
    require 'dbconnect.php' ;

    

    $req=$cnx->prepare('INSERT INTO client (nom,email,pwd,phone,adresse) VALUES
     (:param_nom,:param_email,:param_pwd,:param_phone,:param_adresse)');
     $req->bindParam(':param_nom',$nom);
     $req->bindParam(':param_email',$email);
     $req->bindParam(':param_pwd',$pwd);
     $req->bindParam(':param_phone',$phone);
     $req->bindParam(':param_adresse',$adresse);
     $req->execute();

header('location:index.php');

     


  
  
?>

