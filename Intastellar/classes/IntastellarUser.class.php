<?php
    namespace Intastellar\classes;
    class User{
        public function __construct($var = null) {
            $this->$var = $var;
        }
    }