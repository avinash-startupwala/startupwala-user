<?php
error_reporting(E_ALL);
    ini_set('display_errors', 1);
echo "WELCOME TO STARTUPWALA \n";

require_once("heroku_postgres_database.php");

$herokupostgrsdatabse = new HerokuPostgresDatabase();



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




?>
