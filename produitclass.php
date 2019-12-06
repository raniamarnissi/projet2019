<?php
require 'connectbaseclass.php';


class Produit
{
    private $cnx = null;

    public function __construct()
    {
        $db=new BaseDonnees;
        $this->cnx = $db->connectdb();

    }

    
    public function readAllProduit(){
        try {
            $req ='SELECT * FROM produit';
            $result = $this->cnx->prepare($req);
            $result->execute();
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    
}
?>