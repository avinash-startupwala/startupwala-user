<?php


  error_reporting(E_ALL);
    ini_set('display_errors', 1);
echo "<h1>WELCOME TO STARTUPWALA</h1> \n";

require_once("heroku_postgres_database.php");

$herokupostgrsdatabse = new HerokuPostgresDatabase();

 echo '&#10084; <a href="sendmail.php">send mail</a><br />';

$sql = "CREATE TABLE demobmc(
   user_id SERIAL PRIMARY KEY,
   username VARCHAR
   )";


 //$sql2 = "INSERT INTO demobmc (username) VALUES ('Avinash')";
//delete from demobmc where used_id = 1

$sql2 = "delete from demobmc where user_id = 1";

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
