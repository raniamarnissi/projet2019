<?php
    include 'classes/produit.class.php';
    $produit = new Produit;
    $produit->deleteProduit($_GET['pid']);
    header('Location:menu.php?notif=delete');
