<?php
    class Database{
        private $conn;

        public function __construct(){
            $this->conn = mysqli_connect('localhost','root','','hashdemo');
        }

        public function getConn(){
            return $this->conn;
        }
    }

    $db = new Database();
?>