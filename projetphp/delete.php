<?php
    require 'dbconnexion.php';
    $req= $cnx->prepare('DELETE  FROM client WHERE cid=:cid');
    $req->bindParam(':cid',$_GET['cid']);
    $req->execute();
header('Location:index.php');
?>