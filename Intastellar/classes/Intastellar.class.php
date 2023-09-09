<?php
    namespace Intastellar;
    include_once("db.class.php");
    include_once("timetable.class.php");
    include_once("accounts.class.php");
    /**
     * Summary of Account
     * @property mixed $username
     * @property mixed $password
     * @property mixed $email
     * @property mixed $id
     * @property mixed $created
     * @property mixed $last_login
     * @property mixed $last_logout
     * @property mixed $status
     * @property mixed $role
     * @property mixed $db
     */
    
    class Intastellar{
        /**
         * Summary of __construct
         */
        var $username;
        var $password;
        var $email;
        var $id;
        var $created;
        var $last_login;
        var $last_logout;
        var $status;
        var $role;
        var $dbname;
        var $dbusername;
        var $dbpassword;
        var $dbhost;
        public function __construct() {
            $db = $this->db = new \Intastellar\DB($this->dbhost, $this->dbusername, $this->dbpassword, $this->dbname);
        }

    }

    $IntastellarAccount = new \Intastellar\Accounts;
    $IntastellarAccount->dbusername = "root";
    $IntastellarAccount->dbpassword = "";
    $IntastellarAccount->dbname = "intastellar";
    $IntastellarAccount->dbhost = "localhost";

    $parent = get_parent_class($IntastellarAccount);
    $methods = get_class_methods($parent);
    $properties = get_class_vars($parent);
    
    echo "<h1>Methods</h1>";
    foreach($methods as $method){
        echo "<p>$method</p>";
    }
    echo "<h1>Properties</h1>";
    foreach($properties as $property){
        echo "<p>$property</p>";
    }

?>