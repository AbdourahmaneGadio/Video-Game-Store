<?php
session_start();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
class Database
{

	function connect()
	{
		// Change this to your connection info.
		$DATABASE_HOST = 'localhost';
		$DATABASE_USER = 'root';
		$DATABASE_PASS = 'root';
		$DATABASE_NAME = 'videogamestore';
		// Try and connect using the info above.
		$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
		if (mysqli_connect_errno()) {
			// If there is an error with the connection, stop the script and display the error.
			exit('Failed to connect to MySQL: ' . mysqli_connect_error());
		}
		return $conn;
	}
}
