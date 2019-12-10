<?php

    require 'dbconnect.class.php';

    class vehicule
    {
        private $cnx;

        public function __construct()
        {
            $db = new DBConnection;
            $this->cnx = $db->connectDB();
        }

        public function readAllvehicule()
        {
            try {
                $req = 'SELECT * FROM vehicule';
                $result = $this->cnx->prepare($req);
                $result->execute();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function showOneVehicule($vid)
        {
            try {
                $req = 'SELECT * FROM vehicule WHERE vid= :clt_vid';
                $result = $this->cnx->prepare($req);
                $result->bindParam(':clt_vid', $vid);
                $result->execute();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function addNewVehicule($statut, $num_vehicule)
        {
            try {
                $sql = "INSERT INTO vehicule(statut,num_vehicule) VALUES (:clt_statut,:clt_num_vehicule)";
            $result = $this->cnx->prepare($sql);
         
            $result->bindparam(":clt_statut", $statut);
            $result->bindparam(":clt_num_vehicule", $num_vehicule);
            
            $result->execute();
            return $result;
            } catch (PDOException $ex) {
                echo $ex->getMessage();
            }
        }

        public function updateVehicule($vid, $statut, $num_vehicule)
        {
            try {
                $sql = 'UPDATE vehicule
                        SET statut = :clt_statut,
                            num_vehicule = :clt_num_vehicule
                         


                        WHERE vid = :clt_vid';
                $result = $this->cnx->prepare($sql);
                $result->bindparam(":clt_vid", $vid);
                $result->bindparam(":clt_statut", $statut);
                $result->bindparam(":clt_num_vehicule", $num_vehicule);
               
          
                $result->execute();
                return $result;

            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }
        }
        public function deleteCommende($vid)
        {
            try {
                $sql = 'DELETE FROM vehicule WHERE vid = :clt_vid';
                $result = $this->cnx->prepare($sql);
                $result->bindparam(":clt_vid", $vid);
                $result->execute();
                return $result;
            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }
        }
    }