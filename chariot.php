<?php
    include 'panier.class.php';

    
    $chariot = new PANIER ;

    if (!empty($_POST)){
    //Récupérer les valeurs saisies par l'utilisateur
            
    $cnom= $_POST['cid'];
    $pnom = $_POST['pid'] ;
    $qte= $_POST['qte'] ;
    $statut= $_POST['statut'] ;

    $listpanier = $chariot->addNewpanier($cnom,$pnom,$qte,$statut);

    $listpanier = $chariot->readAllpanier();
    while($data = $listpanier->fetch()){
        
        echo $data['cid'];
        echo $data['pid'];
        echo $data['qte'];
        echo $data['statut'];
    }
}
    header("Location:panier.phtml");

?>