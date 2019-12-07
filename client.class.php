<?php

    require 'dbconnect.class.php';

    class client
    {
        private $cnx;

        public function __construct()
        {
            $db = new BasesDonnees;
            $this->cnx = $db->connectDB();
        }

        public function readAllClients()
        {
            try {
                $req = 'SELECT * FROM client';
                $result = $this->cnx->prepare($req);
                $result->execute();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function showOneClient($id)
        {
            try {
                $req = 'SELECT * FROM clients WHERE cid= :clt_cid';
                $result = $this->cnx->prepare($req);
                $result->bindParam(':clt_cid', $cid);
                $result->execute();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function addNewClient($nom, $email, $pwd, $phone, $adresse)
        {
            try {
                $sql = "INSERT INTO client(nom,email,pwd,phone,adresse) VALUES (:clt_nom,:clt_email,:clt_pwd,:clt_phone,:clt_adresse)";
            $result = $this->cnx->prepare($sql);
            $result->bindparam(":clt_nom", $nom);
            $result->bindparam(":clt_email", $email);
            $result->bindparam(":clt_pwd", $pwd);
            $result->bindparam(":clt_phone", $phone);
            $result->bindparam(":clt_adresse", $adresse);
            $result->execute();
            return $result;
            } catch (PDOException $ex) {
                echo $ex->getMessage();
            }
        }

        public function updateClient($cid, $nom, $email, $pwd, $phone, $adresse)
        {
            try {
                $sql = 'UPDATE client
                        SET nom = :clt_nom,
                            email = :clt_email,
                            pwd = :clt_pwd,
                            phone = :clt_phone,
                            adresse = :clt_adresse
                        WHERE cid = :clt_cid';
                $result = $this->cnx->prepare($sql);
                $result->bindparam(":clt_cid", $cid);
                $result->bindparam(":clt_nom", $nom);
                $result->bindparam(":clt_email", $email);
                $result->bindparam(":clt_pwd", $pwd);
                $result->bindparam(":clt_phone", $phone);
                $result->bindparam(":clt_adresse", $adresse);
                $result->execute();
                return $result;

            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }
        }
        public function deleteClient($cid)
        {
            try {
                $sql = 'DELETE FROM client WHERE cid = :clt_cid';
                $result = $this->cnx->prepare($sql);
                $result->bindparam(":clt_cid", $cid);
                $result->execute();
                return $result;
            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }
        }
    }