<?php

$db_host = "dooldbinstance.c1vgzhdykvk9.us-west-2.rds.amazonaws.com"; 

$db_username = "revs"; 

$db_pass = "Cyclotron_24"; 

$db_name = "dool"; 


$conn = new mysqli("$db_host" , "$db_username" , "$db_pass" , "$db_name");
if($conn->connect_error){
	die("connection failed:");
}

?>
