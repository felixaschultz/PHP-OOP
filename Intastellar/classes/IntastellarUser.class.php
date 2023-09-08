<?php
    namespace Intastellar;
    require_once('IntastellarDB.class.php');
    class User{
        public $userId;
        public function getUser(){
            \Intastellar\db->query($this->userId);
        }
    }