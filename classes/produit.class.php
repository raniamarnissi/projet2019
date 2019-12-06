<?php

    require 'dbconnect.class.php';

    class Produit
    {
        private $cnx;

        public function __construct()
        {
            $db = new BasesDonnees;
            $this->cnx = $db->connectDB();
        }

        public function readAllProduit()
        {
            try {
                $req = 'SELECT * FROM produit';
                $result = $this->cnx->prepare($req);
                $result->execute();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function showOneproduit($pid)
        {
            try {
                $req = 'SELECT * FROM produit WHERE pid= :clt_pid';
                $result = $this->cnx->prepare($req);
                $result->bindParam(':clt_pid', $pid);
                $result->execute();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function addNewProduit($fichier, $nom, $desc, $prix)
        {
            try {
                $sql = "INSERT INTO produit(fichier,nom,descr,prix) VALUES (:clt_fichier,:clt_nom,:clt_descr,:clt_prix)";
            $result = $this->cnx->prepare($sql);
            $result->bindparam(":clt_ficher", $fichier);
            $result->bindparam(":clt_nom", $nom);
            $result->bindparam(":clt_descr", $descr);
            $result->bindparam(":clt_prix", $prix);
            $result->execute();
            return $result;
            } catch (PDOException $ex) {
                echo $ex->getMessage();
            }
        }

        public function updateProduit($pid, $fichier, $nom, $descr, $prix)
        {
            try {
                $sql = 'UPDATE produit
                        SET fichier = :clt_fichier,
                            nom = :clt_nom,
                            descr = :clt_descr,
                            prix = :clt_prix,
                        WHERE pid = :clt_pid';
                $result = $this->cnx->prepare($sql);
                $result->bindparam(":clt_pid", $pid);
                $result->bindparam(":clt_fichier", $fichier);
                $result->bindparam(":clt_nom", $nom);
                $result->bindparam(":clt_descr", $descr);
                $result->bindparam(":clt_prix", $prix);
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
                $result = $this->cnx->prepare($sql);
                $result->bindparam(":clt_pid", $pid);
                $result->execute();
                return $result;
            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }
        }
    }