<?php
    namespace Intastellar;
    include_once('IntastellarDB.class.php');
    class IntastellarUser{
        public $userId;
        public function getUser($userId){
            $db = new DB();
            /* $user = $db->query($userId); */
            $user = "Hello World";
            return $user;
        }

        public function getAllUser(){
            $db = new DB();
            $user = $db->queryAll();
            return $user;
        }
    }