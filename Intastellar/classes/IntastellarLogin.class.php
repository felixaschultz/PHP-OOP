<?php
    namespace Intastellar;
    class Accounts{
        public $userId;
        public function getUser($userId){
            $db = new DB();
            $user = $db->query($userId);
            return $user;   
        }
    }