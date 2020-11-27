<?php
    
    $servername = "localhost";
	$username = "id15503222_root";
	$password = "(ab8?zWtJCHv3s?}";
	$dbname = "id15503222_test";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
			die("connection failed".$conn->connect_error);
		}
		
		if(isset($POST['delete'])){
			$chkarr = $POST['checkbox'];
			foreach($chkarr as $id){
				mysqli_query($conn,"Delete From products where id=".$id);
				
			} 
		Header("Location:index.php");
		}
		
	
    mysqli_close()
	
?>