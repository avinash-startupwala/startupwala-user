<?php
  error_reporting(E_ALL);
    ini_set('display_errors', 1);
echo "<h1>WELCOME TO STARTUPWALA</h1> \n";

require_once("heroku_postgres_database.php");

$herokupostgrsdatabse = new HerokuPostgresDatabase();



$sql = "CREATE TABLE demobmc(
   user_id SERIAL PRIMARY KEY,
   username VARCHAR
   )";


 $sql2 = "INSERT INTO demobmc (username) VALUES ('Avinash')";


// $sql = "CREATE TABLE data (Name VARCHAR(20))";

  //$result = $herokupostgrsdatabse->query($sql);


 $result2 = $herokupostgrsdatabse->query($sql2);

//$sql3 = "select username from startupwala_user";
  //$result3 = $herokupostgrsdatabse->query($sql3);


echo "<br>";
echo "<br>";
echo "<br>";
echo "\n <h3>following users are already registered:<h3>";
  //while( $row = pg_fetch_array($result3))
              // {

             //  }


?>
