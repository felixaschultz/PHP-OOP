<?php
    /* namespace Intastellar; */
    class DB{
        public $userId;
        private $db = "intastellar";
        private $host = "localhost";
        private $pwd = "";
        private $user = "root";
        public function connect(){
            try{
                return new PDO('mysqli:host='. $this->host .';dbname='. $this->db, $this->user, $this->pwd);
            } catch (PDOException $e){

            }
        }

       public function query($userId){
        if($this->connect()){
            return $this->connect()->query("SELECT * FROM users WHERE id = '$userId'");
        }
       }

       public function queryAll(){
        if($this->connect()){
            return  $this->connect()->query("SELECT * FROM users");
        }
       }
    }