<?php

$db_host = "localhost"; 

$db_username = "revs"; 

$db_pass = "cyclotron"; 

$db_name = "DOOL"; 


$conn = new mysqli("$db_host" , "$db_username" , "$db_pass" , "$db_name");
if($conn->connect_error){
	die("connection failed:");
}

?>
