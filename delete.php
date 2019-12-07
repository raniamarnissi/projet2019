<?php
    include 'classes/client.class.php';
    $client = new client;
    $client->deleteClient($_GET['cid']);
    header('Location:index.php?notif=delete');
    ?>