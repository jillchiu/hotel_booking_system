<?php

	// Connect to the db
	// function ConnectDB(){
		
	// $mysqli = new mysqli("localhost", "root", "", "project") or die("Cannot connect to database server! Please check the connection.");
	// return $mysqli;
	
	// }

	


	function ConnectDB(){

		$DB_HOST = getenv("DB_HOST");
		$DB_PORT = getenv("DB_PORT");
		$DB_USER = getenv("DB_USER");
		$DB_PASSWORD = getenv("DB_PASSWORD");
		$DB_NAME = getenv("DB_NAME");

		$mysqli = new mysqli(
			$DB_HOST,
			$DB_USER,
			$DB_PASSWORD,
			$DB_NAME,
			$DB_PORT
		);

		$mysqli->set_charset("utf8mb4");

		if ($mysqli->connect_error) {
			error_log($mysqli->connect_error);
			die("Database connection failed.");
		}

		return $mysqli;
	}
