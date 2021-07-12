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
$q=$_GET["q"];
//print_r($q);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$b = 'SELECT * FROM assignment4 WHERE username="'.$q.'"';
$statement = $db->prepare($b);
$statement->execute();
$result = $statement->fetch(PDO::FETCH_OBJ);
$r = json_decode(json_encode($result), True);
print_r($r['content']);
/*
while($result = $statement->fetch(PDO::FETCH_OBJ)) {
    $results[] = $result;
    //$response = $result['content'];
    print_r($result);
    print_r($response);
}
print_r($result);
$response = $result['content'];
//print_r($response);

for($j=0; $j<count($results);$j++){
    $r = $results[j];
    if($r[0]== 'q'){
        $hint = $r[2];
    }
}
//print_r($result);

if (strlen($q) > 0)
  {
  $hint="";
  for($j=0; $j<count($a);$j++){
    $a = $b[j];
    }
    if (strtolower($q)==strtolower($a['userName']))
      {
      if ($hint=="")
        {
        $hint=$a['userName'];
        }
      else
        {
        }
      }
    }

//print_r ($hint);
if ($hint == "q")
  {
  $response=$hint;
  }
else
  {
  $response="Not match name.";
  }
*/
echo $response;
?>