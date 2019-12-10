<?php

    require 'dbconnect.class.php';

    class commende
    {
        private $cnx;

        public function __construct()
        {
            $db = new DBConnection;
            $this->cnx = $db->connectDB();
        }

        public function readAllCommende()
        {
            try {
                $req = 'SELECT * FROM commende';
                $result = $this->cnx->prepare($req);
                $result->execute();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function showOneCommende($id)
        {
            try {
                $req = 'SELECT * FROM commende WHERE iod= :clt_oid';
                $result = $this->cnx->prepare($req);
                $result->bindParam(':clt_oid', $oid);
                $result->execute();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function addNewCommende($oid, $pid, $cid, $quantite_produit, $odate, $statut_livraison, $vid)
        {
            try {
                $sql = "INSERT INTO commende(oid, pid, cid, quantite_produit, odate, statut_livraison, vid) VALUES (:clt_oid,:clt_pid,:clt_cid,:clt_quantite_produit,:clt_odate,:clt_statut_livraison,:clt_vid)";
            $result = $this->cnx->prepare($sql);
            $result->bindparam(":clt_oid", $oid);
            $result->bindparam(":clt_pid", $pid);
            $result->bindparam(":clt_cid", $cid);
            $result->bindparam(":clt_quantite_produit", $quantite_produit);
            $result->bindparam(":clt_odate", $odate);
            $result->bindparam(":clt_statut_livraison", $statut_livraison);
            $result->bindparam(":clt_vid", $vid);
            $result->execute();
            return $result;
            } catch (PDOException $ex) {
                echo $ex->getMessage();
            }
        }

        public function updatecommende($oid, $pid, $cid, $quantite_produit, $odate, $statut_livraison, $vid)
        {
            try {
                $sql = 'UPDATE commende
                        SET pid = :clt_pid,
                            cid = :clt_cid,
                            quantite_produit = :clt_quantite_produit,
                            odate = :clt_odate,
                            statut_livraison = :clt_statut_livraison
                            vid = :clt_vid


                        WHERE oid = :clt_oid';
                $result = $this->cnx->prepare($sql);
                $result->bindparam(":clt_oid", $oid);
                $result->bindparam(":clt_pid", $pid);
                $result->bindparam(":clt_cid", $cid);
                $result->bindparam(":clt_quantite_produit", $quantite_produit);
                $result->bindparam(":clt_odate", $odate);
                $result->bindparam(":clt_statut_livraison", $statut_livraison);
                $result->bindparam(":clt_vid", $vid);
          
                $result->execute();
                return $result;

            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }
        }
        public function deleteCommende($oid)
        {
            try {
                $sql = 'DELETE FROM commende WHERE oid = :clt_oid';
                $result = $this->cnx->prepare($sql);
                $result->bindparam(":clt_oid", $oid);
                $result->execute();
                return $result;
            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }
        }
    }