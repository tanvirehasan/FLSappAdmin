<?php 

	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "flsapp";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password,$db);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 


try {
    $con = new PDO("mysql:host=$servername;dbname=flsapp", $username, $password);
    // set the PDO error mode to exception
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

?>