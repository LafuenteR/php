<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Add New Item</h1>
	<form method="POST" action="">
		<input type="text" name="name" placeholder="Name"><br>
		<input type="text" name="description" placeholder="Description"><br>
		<input type="decimal" name="price" placeholder="Price"><br>
		<input type="file" name="img" placeholder="Images"><br>
		<input type="text" name="category" placeholder="category"><br>
		<input type="submit" name="add" value="Add"><br>
		<input type="submit" name="cancel" value="Cancel"><br>
	</form>
</body>
</html> -->
<?php 
 function get_title(){
                echo "Add Item";
        }
function display_content(){
echo "<div class='container'><div='row'>";
echo "<h1>Add New Item</h1>";
echo "<form class='form-group col-md-6' method='POST' action=''>";
echo "<input class='form-control' type='text' name='name' placeholder='Name' required><br>";
echo "<input class='form-control' type='text' name='description' placeholder='Description' required><br>";
echo "<input class='form-control' type='decimal' name='price' placeholder='Price' required><br>";
echo "<input class='form-control' id='file' type='file' name='img' placeholder='Images' required><br>";
echo "<input class='form-control' type='text' name='category' placeholder='category' required><br>";
echo "<input class='btn btn-info' type='submit' name='add' value='Add'>";
echo "<input class='btn btn-warning' type='submit' name='cancel' value='Cancel'><br>";
echo "</form>";
echo "</div></div>";





require 'connection.php';
if(isset($_POST['add'])){
	
	$name = $_POST['name'];
	$description = $_POST['description'];
	$price = $_POST['price'];
	$img = 'images/' . $_POST['img'];
	$category = $_POST['category'];

	$sql = "INSERT INTO shoe (name,description,price,img,category)
	VALUES('$name','$description','$price','$img','$category')";

	$result = mysqli_query($conn,$sql);

	if($result)
		header('location:product.php');
}
}
if (isset($_POST['cancel'])) {
	header('location:product.php');
}
	require_once('home.php');
?>
