<?php 


require 'dbconnect.class.php';

class Command{

    private $cnx;

    public function __construct(){
        $db = new DBConnection ;
        $this->cnx = $db->connectdb();
    }
    
    public function insert_into_command($pid,$id,$qty,$stat){
        $req = 'INSERT INTO command (pid, id, quantité_produit, statut_livraison, vid) VALUES (:pid,:id,:qty,:stat,null)';
        $result = $this->cnx->prepare($req);
        $result->bindparam(':pid',$pid);
        $result->bindparam(':id',$id);
        $result->bindparam(':qty',$qty);
        $result->bindparam(':stat',$stat);
        if($result->execute()){
            return $result;
        }else{
            return false;
        }
    }
}