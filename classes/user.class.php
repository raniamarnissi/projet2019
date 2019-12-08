<?php

include 'dbconnect.class.php';

class User
{
    private $pdo;

    public function __construct()
    {
        $dbconn = new DBConnection;
        $this->pdo = $dbconn->connectDB();
    }

    public function readAllClients()
    {
        try {
            $req = 'SELECT * FROM client';
            $result = $this->pdo->prepare($req);
            $result->execute();
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


    public function showOneClient($id)
        {
            try {
                $req = 'SELECT * FROM client WHERE id= :id';
                $result = $this->pdo->prepare($req);
                $result->bindParam(':id', $id);
                $result->execute();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }



    
    public function register($username, $email, $password,$phone,$adresse)
    {
        try {
            $sql = "INSERT INTO client(username,email,password,phone,adresse)
                    VALUES (:username,:email,:password,:phone, :adresse)";
            $query = $this->pdo->prepare($sql);
            $query->bindparam(":username", $username);
            $query->bindparam(":email", $email);
            $query->bindparam(":password", $password);
            $query->bindparam(":phone", $phone);
            $query->bindparam(":adresse", $adresse);
            $query->execute();
            return $query;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    public function login($username, $password)
    {
        try {
            $sql = "SELECT * FROM client WHERE username= :username";
            $query = $this->pdo->prepare($sql);
            $query->bindparam(":username", $username);
            $query->execute();
            $user = $query->fetch();
            if (password_verify($password, $user['password'])) {
                return $user;
            } else {
                return false;
            }
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
     }

     /************************************* */
   
public function loginemployer($username,$password)
{
    try{
        $sql="SELECT  * from employé WHERE username=:username";
        $query = $this->pdo->prepare($sql);
        $query->bindparam(":username", $username);
        $query->execute();
        $user = $query->fetch();
        if ($password==$user['password']) {
            return $user;
        } else {
            return false;
        }
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }}
 
    
/************************************************ */

   




/******************************************** */
  


      public function updateClient($id, $username, $email, $password, $phone, $adresse)
        {
            try {
                $sql = 'UPDATE client
                        SET username = :username,
                            email = :email,
                            password = :password,
                            phone = :phone,
                            adresse = :adresse
                        WHERE id = :id';
                $result = $this->pdo->prepare($sql);
                $result->bindparam(":id", $id);
                $result->bindparam(":username", $username);
                $result->bindparam(":email", $email);
                $result->bindparam(":password", $password);
                $result->bindparam(":phone", $phone);
                $result->bindparam(":adresse", $adresse);
                $result->execute();
                return $result;

            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }
        }





        public function deleteClient($id)
        {
            try {
                $sql = 'DELETE FROM client WHERE id = :clt_id';
                $result = $this->pdo->prepare($sql);
                $result->bindparam(":clt_id", $id);
                $result->execute();
                return $result;
            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }
        }
    

    }