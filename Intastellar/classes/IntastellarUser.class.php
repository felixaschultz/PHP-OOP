<?php
    include('IntastellarDB.class.php');
    class User{
        public $userId;
        private $db = new IntastellarDB();
        public function getUser(){
            $this->db->query($this->userId);
        }
    }