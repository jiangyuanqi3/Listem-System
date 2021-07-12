<?php

//db connection class using singleton pattern
class dbConn{
 
 //variable to hold connection object.
 protected static $db;
  
  //private construct - class cannot be instatiated externally.
  private function __construct() {
   
   try {
   // assign PDO object to db variable
   self::$db = new PDO( 'mysql:host=sql1.njit.edu;dbname=yj99', 'yj99', 'GYb6WQYNR' );
   self::$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
   }
   catch (PDOException $e) {
   //Output error - would normally log this to error file rather than output to user.
   echo "Connection Error: " . $e->getMessage();
   }
    
    }
     
     // get connection function. Static method - accessible without instantiation
     public static function getConnection() {
      
      //Guarantees single instance, if no connection object exists then create one.
      if (!self::$db) {
      //new connection object.
      new dbConn();
      }
       
       //return connection.
       return self::$db;
       }
}

$db = dbConn::getConnection();

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$statement = $db->prepare('INSERT INTO assignment4 (name, password, content) VALUES (:name, :password, :content)');
$statement->bindParam(':name', $name);
$statement->bindParam(':password', $password);  
$statement->bindParam(':content', $content);

//1.
$name = 'Allen Jiang';
$password = '123qweads';
$firstName = 'Allen12';
$statement->execute();

//$statement->execute();
//$results = $statement->fetch(PDO::FETCH_OBJ);
//print_r($results);

?>