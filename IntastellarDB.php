<?php
    class IntastellarDB extends Intastellar{
        public function __construct($var = null) {
            $this->host = 'localhost';
            $this->user = 'localhost';
            $this->pass = 'localhost';
            $this->db = 'localhost';
        }

        public function connect(){
            $this->db = new mysqli($this->host, $this->user, $this->pass, $this->db);
            if($this->db->connect_errno > 0){
                die('Unable to connect to database [' . $this->db->connect_error . ']');
            }
        }
    }