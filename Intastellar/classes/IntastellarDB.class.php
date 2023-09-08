<?php
    namespace Intastellar;
    class db{
        public $userId;
        private $db = "intastellar";
        private $host = "localhost";
        private $pwd = "";
        private $user = "root";
        public function connect(){
            return mysqli_connect($this->host, $this->user, $this->pwd, $this->db);
        }

       public function query($userId){
        if($this->connect()){
            return mysqli_query($this->connect(), "SELECT * FROM users WHERE id = '$userId'")->fetch_object();
        }
       }
    }