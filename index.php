<?php
# This function reads your DATABASE_URL config var and returns a connection
# string suitable for pg_connect. Put this in your app.

error_reporting(E_ALL);
ini_set('display_errors', 1);

function pg_connection_string_from_database_url() {
  extract(parse_url($_ENV["DATABASE_URL"]));
  
 return "user=$user password=$pass host=$host dbname=" . substr($path, 1); # <- you may want to add sslmode=require there too
}
# Here we establish the connection. Yes, that's all.
$pg_conn = pg_connect(pg_connection_string_from_database_url());

echo $pg_conn;
# Now let's use the connection for something silly just to prove it works:
$result = pg_query($pg_conn, "SELECT relname FROM pg_stat_user_tables WHERE schemaname='public'");
print "<pre>\n";

if (!pg_num_rows($result)) {
  print("Your connection is working, but your database is empty.\nFret not. This is expected for new apps.\n");
}
 else 
{
  print "Tables in your database:\n";
  while ($row = pg_fetch_row($result)) { print("- $row[0]\n"); }
}

 print "\n";

 $sql = "CREATE TABLE data (Name VARCHAR(20))";

  $result = pg_query($pg_conn, $sql);

  $sql2 = "INSERT INTO data (Name) values ('Startupwala')";

  $result2 = pg_query($pg_conn, $sql2);
 print "\n";
  //echo $result2;

   $sql3 = "SELECT * FROM data";

   $result3 = pg_query($pg_conn, $sql3);

  
   while( $single_row = pg_fetch_array($result3))
    {

   	 print "\n";

   	 var_dump($single_row);


   }


// query($sql);

//  public function query($sql)
//     {
//     	global $pg_conn;
//     	global $sql;
//      $result = pg_query($pg_conn, $sql);

//      echo $result;
//         // $this->confirm_query($result);
//         return $result;
//     }

?>
