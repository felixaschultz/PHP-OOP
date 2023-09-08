<?php
    
    class IntastellarAccounts extends Intastellar{
        public function __construct($var = null) {
            $this->$var = $var;
        }

        public function login($username, $password){
            $this->username = $username;
            $this->password = $password;
            $this->login = true;
        }

        public function logout(){
            $this->login = false;
        }

        public function register($username, $password){
            $this->username = $username;
            $this->password = $password;
            $this->register = true;
        }

        public function delete($username, $password){
            $this->username = $username;
            $this->password = $password;
            $this->delete = true;
        }

        public function update($username, $password){
            $this->username = $username;
            $this->password = $password;
            $this->update = true;
        }

        public function get($username, $password){
            $this->username = $username;
            $this->password = $password;
            $this->get = true;
        }
    }