<?php

/* test
$conn=mysqli_connect("localhost","w","adm@098765","locadora");

if (mysqli_connect_errno())
  {
  
	echo "Failed to connect to MariaDB: " . mysqli_connect_error();

  }
*/

class Database {

    private static $dbName = 'locadora' ;

    private static $dbHost = 'localhost' ;

    private static $dbUsername = 'w';

    private static $dbUserPassword = 'adm@098765';
     
    private static $cont  = null;
     
    public function __construct() {
   
     die('Init function is not allowed');

    }
     
    public static function connect() {

       if ( null == self::$cont ) {     
        try {

          self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword); 
        }
        catch(PDOException $e) {

          die($e->getMessage()); 
        }
       }
       return self::$cont;
    }
     
    public static function disconnect() {

        self::$cont = null;

    }
}

?>