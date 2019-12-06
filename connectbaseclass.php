<?php


    class BaseDonnees
    {
        private $host='localhost';
        private $dbname='projetphp';
        private $user='root';
        private $pwd='';

        private $cnx = null ;

        public function connectdb()
        {
            try {
                
                $this->cnx  =new PDO ('mysql:host='.$this->host. ';dbname='.$this->dbname,
                $this->user,
                $this->pwd);
               
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
            return $this->cnx;
        }
    }
?>