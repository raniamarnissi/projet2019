<?php
    include 'classes/vehicule.class.php';
    $vehicule = new vehicule;
    $vehicule->deleteCommende($_GET['vid']);
    header('Location:vehicule.php?notif=delete');
    ?>