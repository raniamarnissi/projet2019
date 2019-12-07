<?php
require 'connectbaseclass.php';


class PANIER
{
    private $cnx = null;

    public function __construct()
    {
        $db=new BaseDonnees;
        $this->cnx = $db->connectdb();

    }

    
    public function readAllpanier(){
        try {
            $req ='SELECT * FROM panier';
            $result = $this->cnx->prepare($req);
            $result->execute();
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    
    public function addNewpanier($cnom,$pnom,$qte,$statut)
        {
            try {
                $sql = "INSERT INTO panier (cid,pid,qte,statut) VALUES (:pcid,:ppid,:pqte,:pstatut)";
                $result = $this->cnx->prepare($sql);
                $result->bindparam(":pcid", $cnom);
                $result->bindparam(":ppid", $pnom);
                $result->bindparam(":pqte", $qte);
                $result->bindparam(":pstatut", $statut);
                
                $result->execute();
                return $result;
            } catch (PDOException $ex) {
                echo $ex->getMessage();
            }
        }
        public function retournerprixunitaire(){
            try {
                $req ='SELECT prix FROM produit WHERE id=''';
                $result = $this->cnx->prepare($req);
                $result->execute();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
}
?>