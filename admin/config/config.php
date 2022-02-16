<?php
// DATABASE CONFIGURATION FOR API
	$db_username = 'root';
	$db_password = '';
  	$conn = new PDO( 'mysql:host=127.0.0.1;dbname=license', $db_username, $db_password );
	if(!$conn){
		die("Fatal Error: Connection Failed!");
	}
// EDIT INCLUDES/DATABASE.PHP
?>