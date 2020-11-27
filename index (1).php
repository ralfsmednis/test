<?php
	include ("delete.php")
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title>products</title>
	<link rel="stylesheet" type="text/css" href= "bootstrap.min.css">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="index.php">Products</a>
    <ul class="navbar-nav mr-auto mt-2 m-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="add.php">Add<span class="sr-only">(current)</span></a>
      </li>
      <li>
          <form action="delete.php" method="POST" >
          <input type="submit" id="delete" name="delete" class="btn btn-light" value="Delete">
          
      </li>
    </ul>
  </div>
</nav>
<div class="container-lg">
	<div class='card-group'>
		<div class="row row-cols-1 row-cols-md-6">
<?php
	$servername = "localhost";
	$username = "id15503222_root";
	$password = "(ab8?zWtJCHv3s?}";
	$dbname = "id15503222_test";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("connection failed".$conn->connect_error);
	}
	
	$sql = "SELECT SKU,Name,Price,Size FROM products";
	
	$result = $conn->query($sql);
	if($result->num_rows>0){
		while($row = $result->fetch_assoc()){
		echo
		"
		<div class='card mt-2 mr-1 h-80 border-dark text-white bg-secondary mb-3' style='width: 90rem'>
			<div class='input-group mb-1'>
				<div class='input-group-prepend'>
					<div class='input-group-text'>
						<input type='checkbox' id='checkbox[]' value=".$row['id']." >
					</div>
				</div>
			</div>
			<div class='card-body text-center'>			
				<h5>".$row['SKU']."</h5>
				<h5>".$row['Name']."</h5>
				<h5>".$row['Price']."</h5>											
				<h5>".$row['Size']."</h5>
			</div>			
		</div>";	
		}
	}	
	else{
		echo "No products to show"; 
	}
	$conn->close();
?>
        </form>
		</div>
	</div>
</div>
<script type="text/javascript href="bootstrap.min.js"></script>
</body>
</html>