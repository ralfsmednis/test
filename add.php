<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title>add</title>
	<link rel="stylesheet" type="text/css" href= "bootstrap.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
			<a class="navbar-brand" href="index.php">Products</a>
		</div>
	</nav>
		<div class="container">
			<form action="insert.php" method="POST">	
				<div class="form-group">
					<label for="SKU">SKU</label>
					<input class="form-control" name="SKU" type="text" placeholder="SKU number" required>
				</div>	
				<div class="form-group">
					<label for="Name">Name</label>
					<input class="form-control" name="Name" type="text" placeholder="Name of the item" required>
				</div>		
				<div class="form-group"> 
					<label for="Price">Price in $</label>
					<input class="form-control" name="Price" type="text" placeholder="price of the item" required>
				</div>	
				<label for="item">Item: </label>
    <select id="item">
      <option></option>
      <option>Furniture</option>
      <option>DVD</option>
      <option>Book</option>
    </select>
    <div id="results"></div>

    
    <script>
      $("#item").on("change", function(){
        var selected = $(this).val();
		if(selected == "Furniture"){
        $("#results").html("You selected: " + selected + " , please insert dimensions(HxWxL)!");
		}
		else if(selected == "DVD"){
		$("#results").html("You selected " + selected + " , please insert size(in mb)!");
		}
		else if(selected == "Book"){
		$("#results").html("You selected " + selected + " , please insert weight(in kg)!");
		}
      })
    </script>
				<div class="form-group">					
					<input class="form-control" name="Size" type="text" placeholder="" required>
				</div>	
				<button class="btn btn-success" type="submit">Save</button>
				<button class="btn btn-success" type="submit"><a href="index.php">Cancel</a></button>
			</form>
		</div>	
</body>
</html>