<?php

include 'dbconnect.class.php';

class Produit
{
    private $pdo;

    public function __construct()
    {
        $dbconn = new BasesDonnees;
        $this->pdo = $dbconn->connectDB();
    }

    public function readAllProduit()
    {
        try {
            $req = 'SELECT * FROM produit';
            $result = $this->pdo->prepare($req);
            $result->execute();
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


    public function showOneProduit($pid)
        {
            try {
                $req = 'SELECT * FROM produit WHERE pid= :pid';
                $result = $this->pdo->prepare($req);
                $result->bindParam(':pid', $pid);
                $result->execute();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }



    
    public function ajoutProduit($fichier, $nom, $descr,$prix)
    {
        try {
            $sql = "INSERT INTO produit(fichier,nom,descr,prix)
                    VALUES (:fichier,:nom,:descr,:prix)";
            $query = $this->pdo->prepare($sql);
            $query->bindparam(":fichier", $fichier);
            $query->bindparam(":nom", $nom);
            $query->bindparam(":descr", $descr);
            $query->bindparam(":prix", $prix);
            $query->execute();
            return $query;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

      public function updateProduit($pid, $fichier, $nom, $descr, $prix)
        {
            try {
                $sql = 'UPDATE produit
                        SET fichier = :fichier,
                            nom = :nom,
                            descr = :descr,
                            prix = :prix,
                        WHERE pid = :pid';
                $result = $this->pdo->prepare($sql);
                $result->bindparam(":pid", $pid);
                $result->bindparam(":fichier", $fichier);
                $result->bindparam(":nom", $nom);
                $result->bindparam(":descr", $descr);
                $result->bindparam(":prix", $prix);
                $result->execute();
                return $result;

            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }
        }





        public function deleteProduit($pid)
        {
            try {
                $sql = 'DELETE FROM produit WHERE pid = :clt_pid';
                $result = $this->pdo->prepare($sql);
                $result->bindparam(":clt_pid", $pid);
                $result->execute();
                return $result;
            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }
        }
    

    }