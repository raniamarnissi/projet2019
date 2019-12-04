<?php
    require 'dbconnexion.php';
    $req= $cnx->prepare('DELETE  FROM vehicule WHERE vid=:vid');
    $req->bindParam(':vid',$_GET['vid']);
    $req->execute();
header('Location:vehicule.php');
?>