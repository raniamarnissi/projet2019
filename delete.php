<?php
    include 'classes/user.class.php';
    $client = new user;
    $client->deleteClient($_GET['id']);
    header('Location:modif.php?notif=delete');
