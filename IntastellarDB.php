<?php
    class IntastellarDB extends Intastellar{
        public function __construct($var = null) {
            $this->$var = $var;
        }
    }