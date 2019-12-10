<?php
    include 'classes/commende.class.php';
    $commende = new commende;
    $commende->deleteCommende($_GET['oid']);
    header('Location:commende.php?notif=delete');
    ?>