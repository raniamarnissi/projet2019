
<?php
   require 'dbconnexion.php';
   
            $vid=$_POST['vid'];
            $statut=$_POST['statut'];
            $num_vehicule=$_POST['num_vehicule'];
           
      
        $req = $cnx->prepare('INSERT INTO vehicule (vid, statut, num_vehicule)
        VALUES(:param_vid, :param_statut , :param_numvehicule)'
        );
        $req->bindParam(':param_vid',$vid);
        $req->bindParam(':param_statut',$statut);
        $req->bindParam(':param_numvehicule',$num_vehicule);

        $req->execute();
       
        header('location:vehicule.php');
   ?> 