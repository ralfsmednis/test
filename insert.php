<?php
	$servername = "localhost";
	$username = "id15503222_root";
	$password = "(ab8?zWtJCHv3s?}";
	$dbname = "id15503222_test";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("connection failed".$conn->connect_error);
	}
	
	$SKU = $_POST["SKU"];
	$Name = $_POST["Name"];
	$Price = $_POST["Price"];
	$Size = $_POST["Size"];
	
	$sql = "INSERT INTO products (SKU,Name,Price,Size)
	VALUES ('$SKU','$Name','$Price','$Size')";
	
	header("Location: index.php"); 
if($conn->query($sql) === TRUE ) {
		echo "New product added succesfully";
	}
	else{
		echo "Error".$sql."<br>".$conn->error;
	}
	
	$conn->close();
?>