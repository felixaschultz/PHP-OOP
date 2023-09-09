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

    class DB {
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
         * @return void
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
            
        }

        // Execute a query on the Intastellar Database
        /**
         * Summary of query
         * @param mixed $query
         * @return void
         */
        function query($query){
            $db = $this->connect();
        }

        // Execute a query on the Intastellar Database and return the result
        /**
         * Summary of queryResult
         * @param mixed $query
         * @return void
         */
        function queryResult($query){

        }

        // Execute a query on the Intastellar Database and return the number of rows affected
        /**
         * Summary of queryAffected
         * @param mixed $query
         * @return void
         */
        function queryAffected($query){

        }

        // Execute a query on the Intastellar Database and return the number of rows affected
        /**
         * Summary of queryLastInsertId
         * @param mixed $query
         * @return void
         */
        function queryLastInsertId($query){

        }

        // Execute a query on the Intastellar Database and return the number of rows affected
        /**
         * Summary of queryLastInsertId
         * @param mixed $query
         * @return void
         */
    }
?>