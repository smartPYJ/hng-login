<?php
$servername = "localhost";
$dbname = "hng6";
$username = "root";
$password = "";


try{
	$conn = new PDO("mysql:host=".$servername.";dbname=".$dbname, $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
/*
	if ($conn == true) {
		echo "<script>alert('The fucking database is connected man!')</script>";
	} else {
		echo "<script>alert('The fucking database is crazilly giving us hard time!')</script>";
	};*/
	
}
catch(PDOException $e){
	echo $conn ."<br />". $e->getMessage();
};


?>