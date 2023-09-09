<?php
    namespace Intastellar;
    /**
     * Summary of DB
     * @var mixed $username
     * @property mixed $password
     * @property mixed $email
     * @property mixed $dbname
     * @property mixed $host
     */

    class DB extends Intastellar {
        /**
         * Summary of __construct
         */
        var $username;
        var $password;
        var $email;
        var $dbname;
        var $host;
        public function __construct($host, $username, $password, $dbname) {
            $this->host = $host;
            $this->username = $username;
            $this->password = $password;
            $this->dbname = $dbname;
        }

        // Connect to the Intastellar Database
        /**
         * Summary of connect
         * 
         */
        function connect(){
            $conn = new \mysqli($this->host, $this->username, $this->password, $this->dbname);
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