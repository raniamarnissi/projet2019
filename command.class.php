<?php 


require 'connectbase.class.php';

class Command{

    private $cnx;

    public function __construct(){
        $db = new BaseDonnees;
        $this->cnx = $db->connectdb();
    }
    
    public function insert_into_command($pid,$cid,$qty,$stat){
        $req = 'INSERT INTO command (pid, cid, quantité_produit, statut_livraison, vid) VALUES (:pid,:cid,:qty,:stat,null)';
        $result = $this->cnx->prepare($req);
        $result->bindparam(':pid',$pid)
        $result->bindparam(':cid',$cid)
        $result->bindparam(':qty',$qty)
        $result->bindparam(':stat',$stat)
        if($result->execute()){
            return $result;
        }else{
            return false;
        }
    }
}