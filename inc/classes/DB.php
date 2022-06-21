<?php 
    if(!defined('__CONFIG__')){
        exit('You do not have a config file');
    }

    class DB {
        protected static $con;
        public function __construct()
        {
            try {

                self::$con = new PDO( 'mysql:charset=utf8mb4;host=localhost;port=80;dbname=login-php', 'root2', 'phpmysql' );
                self::$con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
                self::$con->setAttribute( PDO::ATTR_PERSISTENT, false );
                echo "Connected to database.";
    
            } catch (PDOException $e) {
                echo "Could not connect to database."; exit;
            }
    
        }


        public static function getConnection() {

            if (!self::$con) {
                new DB();
            }

            return self::$con;
        }
    }





?>