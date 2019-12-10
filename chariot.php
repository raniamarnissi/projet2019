<?php
    include 'panier.class.php';
    $chariot = new PANIER ;

    if (!empty($_POST)){
        
        //var_dump($_POST);
        $_SESSION['qte'] = $_POST['qte'];

        //Récupérer les valeurs saisies par l'utilisateur 
        $cnom= $_POST['cid'];
        $pnom = $_POST['pid'] ;
        $qte= $_POST['qte'] ;
        $statut= $_POST['statut'] ;

        
        $listpanier = $chariot->addNewpanier($cnom,$pnom,$qte,$statut);
                   
        $listpanier = $chariot->readAllpanier();
        echo '<table border="1">';
        while($data = $listpanier->fetch()){            
            echo '<tr>';
            echo '<td>'.$data['cid'].'</td>';
            echo '<td>'.$data['pid'].'</td>';
            echo '<td>'.$data['qte'].'</td>';
            echo '<td>'.$data['statut'].'</td>';
            echo '</tr>';            
        }
        echo '</table>' ; 
        }
    // header("Location:confirmer.html");
    

?>