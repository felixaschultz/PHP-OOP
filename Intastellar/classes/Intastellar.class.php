<?php
    namespace Intastellar;
    require_once("timetable.class.php");
    require_once("accounts.class.php");
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
        var $dbname;
        var $dbusername;
        var $dbpassword;
        var $dbhost;
        public function __construct() {
            
        }

        function connect(){
            $conn = new \mysqli($this->dbhost, $this->dbusername, $this->dbpassword, $this->dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            return $conn;
        }

        // Disconnect from the Intastellar Database
        /**
         * Summary of disconnect
         * @return void
         */
        function disconnect(){
            $db = $this->connect();
            $db->close();
        }

        // Execute a query on the Intastellar Database
        /**
         * Summary of query
         * @param mixed $query
         * @return void
         */
        function query($query){
            $db = $this->connect();
            $result = $db->query($query)->fetch_object();

            return $result;
        }

    }

?>