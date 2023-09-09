<?php
    namespace Intastellar;
    /**
     * Summary of DB
     * @property mixed $username
     * @property mixed $password
     * @property mixed $email
     * @property mixed $db
     * @property mixed $dbname
     * @property mixed $dbhost
     * @property mixed $dbusername
     * @property mixed $dbpassword
     */
    class Timetable extends Intastellar{
        /**
         * Summary of __construct
         */
        var $username;
        var $password;
        var $email;
        var $dbname;
        var $host;
        public function __construct() {
            $this->db = new \Intastellar\DB($this->host, $this->dbusername, $this->password, $this->dbname);
        }

        // Create a new Timetable
        /**
         * Summary of timetableCreate
         * @return void
         */
        function timetableCreate(){

        }

        // Delete a Timetable
        /**
         * Summary of timetableDelete
         * @param mixed $id
         * @return void
         */
        function timetableDelete($id){
                
        }

        // Update a Timetable
        /**
         * Summary of timetableUpdate
         * @param mixed $id
         * @return void
         */
        function timetableUpdate($id){

        }

        // Get a Timetable
        /**
         * Summary of timetableGet
         * @param mixed $id
         * @return void
         */
        function timetableGet($id){
                
        }

        //
    }

    $time = new \Intastellar\Timetable();
?>