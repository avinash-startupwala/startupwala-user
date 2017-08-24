<?php
require_once("heroku_postgres_database.php");

?>
<pre>
<?php

//print_r($_POST);

		echo $salutation = $_POST["salutation"];
			
			echo $first_name =  $_POST["first_name"];
			echo "<br>";
			echo $last_name =  $_POST["last_name"];
						echo "<br>";

			echo $email =  $_POST["email"];
						echo "<br>";

			echo $phone =  $_POST["phone"];
						echo "<br>";

			echo $city =  $_POST["city"];
						echo "<br>";

			echo $looking_for = $_POST["00N90000002GeUl"];
?>
</pre>
<?php

$herokupostgrsdatabse = new HerokuPostgresDatabase();


		//create new table query

	$create_table_query = "CREATE TABLE registered_users(
   user_id SERIAL PRIMARY KEY,
   first_name VARCHAR(50),
   last_name VARCHAR(50),
   
   phone VARCHAR(15),
    city VARCHAR(30),
     looking_for VARCHAR(100),
     email VARCHAR(30),
     password VARCHAR(50)

   )";

   $create_table_result = $herokupostgrsdatabse->query($create_table_query);


   $insert_query = "insert into registered_users (first_name,last_name,phone,city,looking_for,email,password) values ('Avinash','Pawar','8793087083','Pune','Company Registration','avinash@gmail.com','123') ";

 $insert_data_result = $herokupostgrsdatabse->query($insert_query);

?>


<!--  [salutation] => Mr.
    [first_name] => avinash pawar
    [last_name] => ,
    [email] => avinash@gmail.com
    [phone] => 8793087125
    [city] => Pune
    [00N90000002GeUl] => One Person Company Registration -->