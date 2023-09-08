<?php
   include('../namespace/Intastellar.namespace.php');
    include('IntastellarDB.class.php');
    class User{
        public $userId;
        private $db = new Intastellar\DB();
        public function getUser(){
            $this->db->query($this->userId);
        }
    }