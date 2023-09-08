<?php
    namespace Intastellar;
    require_once('IntastellarDB.class.php');
    require_once('IntastellarLogin.class.php');
    require_once('IntastellarUser.class.php');
    class init{
        public function __construct($var = null) {
            $this->$var = $var;
        }
    }