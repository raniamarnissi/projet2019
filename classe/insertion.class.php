<?php

//2emaversion

include 'dbconnect.class.php';

class user
{
    private $pdo;

    public function __construct()
    {
        $dbconn=new BasesDonnees;
        $connect = $dbconn->connectDB();
        $this->pdo = $connect;
    }

    

    public function register($nom,$email,$pwd)
    {
        try {
            $sql = "INSERT INTO client(cid,nom,email,pwd,phone,adresse) VALUES (null,:nom,:email,:pwd,:phone,:adresse";
            $result = $this->pdo->prepare($sql);
            
            $result->bindparam(":nom", $nom);
            $result->bindparam(":email", $email);
            $result->bindparam(":pwd", $pwd);
            $result->bindparam(":phone", $phone);
            $result->bindparam(":adresse", $adresse);
           
            $result->execute();
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
//login

public function login($nom, $pwd)
    {
        try {
            $sql = "SELECT * FROM client WHERE nom= :nom";
            $query = $this->pdo->prepare($sql);
            $query->bindparam(":nom", $nom);
            $query->execute();
            $user = $query->fetch();
            if (password_verify($pwd, $user['pwd'])) {
                return $user;
            } else {
                return false;
            }
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
    public function showOneClient($id)
        {
            try {
                $req = 'SELECT * FROM client WHERE id= :clt_id';
                $result = $this->pdo->prepare($req);
                $result->bindParam(':clt_id', $id);
                $result->execute();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }



public function update($nom,$email,$pwd,$phone,$adress)
{
    try{
        $sql = 'UPDATE client SET nom = :nom,email= :email,pwd =:pwd,phone= :phone,adresse= :adresse WHERE id = :id';
        $result = $this->pdo->prepare($sql);
        $result->bindparam(":id", $id);
        $result->bindparam(":nom", $nom);
        $result->bindparam(":email", $email);
        $result->bindparam(":pwd", $pwd);
        $result->bindparam(":phone", $phone);
        $result->bindparam(":adresse", $adresse);
        $result->execute();
        return $result;

    } catch (PDOException $exception) {
        echo $exception->getMessage();
    }


    
}



}









?>
