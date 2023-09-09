<?php
    namespace Intastellar;
    include_once("db.class.php");
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
     */
    class Account {
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
        var $db = new \Intastellar\DB();
        public function __construct() {
            
        }

        // Login an Intastellar User
        /**
         * Summary of userLogin
         * @param mixed $username
         * @param mixed $password
         * @return void
         */
        function userLogin($username, $password){
            
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

    $IntastellarAccount = new \Intastellar\Account();

    echo $IntastellarAccount->userLogin("test", "test");

?>