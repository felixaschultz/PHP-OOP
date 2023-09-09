<?php
    namespace Intastellar;
    class Accounts extends Intastellar {
        /**
         * Summary of __construct
         */
        var $dbusername;
        var $dbpassword;
        var $dbname;
        var $dbhost;
        var $db;

        public function __construct() {
            /* $this->db = new \Intastellar\DB($this->dbhost, $this->dbusername, $this->dbpassword, $this->dbname); */
        }

        // Login an Intastellar User
        /**
         * Summary of userLogin
         * @param mixed $username
         * @param mixed $password
         * @return bool
         */
        function userLogin($username, $password){
            $db = $this->db->connect();
            $query = "SELECT * FROM users WHERE username = '$username'";
            $result = $db->query($query)->fetch_object();

            if(password_verify($password, $result->password)){
                $result = true;
            }else{  
                $result = false;
            }

            $this->db->disconnect();
            return $result;
        }

        // Log an Intastellar User out
        /**
         * Summary of userLogout
         * @param mixed $username
         * @return void
         */
        function userLogout($username){

        }

        // Create a new Intastellar User
        /**
         * Summary of userCreate
         * @return void
         */
        function userCreate(){

        }

        // Delete an Intastellar User
        /**
         * Summary of userDelete
         * @param mixed $id
         * @return void
         */
        function userDelete($id){

        }

        // Update an Intastellar User
        /**
         * Summary of userUpdate
         * @param mixed $id
         * @return void
         */
        function userUpdate($id){

        }

        // Get an Intastellar User
        /**
         * Summary of userGet
         * @param mixed $id
         * @return void
         */
        function userGet($id){

        }

        // Get all Intastellar Users
        /**
         * Summary of userGetAll
         * @return void
         */
        function userGetAll(){

        }

        // Get all Intastellar Users by Role
        /**
         * Summary of userGetAllByRole
         * @param mixed $role
         * @return void
         */
        function userGetAllByRole($role){

        }

        // Get all Intastellar Users by Status
        /**
         * Summary of userGetAllByStatus
         * @param mixed $status
         * @return void
         */
        function userGetAllByStatus($status){

        }

        // Get all Intastellar Users by Role and Status
        /**
         * Summary of userGetAllByRoleAndStatus
         * @param mixed $role
         * @param mixed $status
         * @return void
         */
        function userGetAllByRoleAndStatus($role, $status){
        
        }
        
    }

?>