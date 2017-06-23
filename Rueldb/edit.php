<?php 

session_start();

// include 'connect.php';

// $item_id = $_GET['current_item']; //Retrives items to be delete
// //current item to be deleted
// $sql = "SELECT * FROM shoe
// where id= $item_id";

// $result= mysqli_query($conn,$sql);

// // if(mysqli_num_rows($result)>0){
// 	while($row = mysqli_fetch_assoc($result)){
// 		extract($row);

// 		echo "<div class='col-md-4 col-sm-4 clear'>";
// 		echo "<img src=".$img .">" ."<br>". $name ."<br>" .$description. "<br>" .$price ."<br>";
// 		echo "</div>";

// 		if(isset($_POST['yes'])){

// 			$sql = "DELETE FROM shoe where id = '$item_id'";
// 			mysqli_query($conn,$sql);

// 			mysqli_query($conn, $sql);
// 			header('location:home.php');
// 		}if(isset($_POST['no'])){

// 			header('location:home.php');
// 		}
// 	}

?>
<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body> -->
	<?php 

// session_start();
 function get_title(){
                echo "Edit Item";
        }
function display_content(){

require 'connection.php';

$item_id = $_GET['current_item']; //Retrives items to be delete
//current item to be deleted
// $sql = "SELECT * FROM shoe
// where id= '$item_id'";

// $result = mysqli_query($conn, $sql);

// if(mysqli_num_rows($result)>0){
	// while($row = mysqli_fetch_assoc($result)){
	// 	extract($row);

	// 	echo "<div class='col-md-4 col-sm-4 clear'>";
	// 	echo "<img src=".$img .">" ."<br>". $name ."<br>" .$description. "<br>" .$price ."<br>";
	// 	echo "</div>";
	// echo "<form method='POST' action=''>";
	// 	echo "<h3><strong>Are you sure you want to edit this item?</strong><h3>";
	// 	echo "<input type='text' name='name' value='$name'>";
	// 	echo "<input type='text' name='description' value='$description'>";
	// 	echo "<input type='number' name='price' value='$price'><br>";
	// 	echo "<input type='text' name='category' value='$category'><br>";
	// 	echo "<input type='file' name='img' value='$img'><br>";
	// 	echo "<input class='btn btn-danger' type='submit' name='save' value='Save'>";
	// 	echo "<input class='btn btn-default' type='submit' name='cancel' value='Cancel'>";
	// 	echo "</form>";

		if(isset($_POST['save'])){
			$name = $_POST['name'];
			$description = $_POST['description'];
			$price = $_POST['price'];
			$img = $_POST['img'];
			$category = $_POST['category'];
			$sql = "UPDATE shoe SET name='$name', description='$description', price='$price', img='$img',category='$category' where id ='$item_id' ";
			// mysqli_query($conn,$sql);

			mysqli_query($conn, $sql);
			header('location:home.php');
		}
	// 	if(isset($_POST['no='])){

	// 	// 	header('location:home.php');
	// 	// }
	// }

}
if(isset($_POST['cancel'])){

			header('location:home.php');
		}
		require 'connection.php';
		$sql = "SELECT * FROM shoe WHERE id='item_id'";
		$result = mysqli_query($conn,$sql);
		
		while ($row = mysqli_fetch_assoc($result)>0) {
		// extract($row);
			$name = $row['name'];
		$description = $row['description'];
		$price = $row['price'];
		$img = $row['img'];
		$category = $row['category'];

		echo "<form method='POST' action=''>";
		echo "<h3><strong>Are you sure you want to edit this item?</strong><h3>";
		echo "<input type='text' name='name' value='$name'><br>";
		echo "<input type='text' name='description' value='$description'><br>";
		echo "<input type='number' name='price' value='$price'><br>";
		echo "<input type='text' name='category' value='$category'><br>";
		echo "<input type='file' name='img' value='$img'><br>";
		echo "<input class='btn btn-danger' type='submit' name='save' value='Save'>";
		echo "<input class='btn btn-default' type='submit' name='cancel' value='Cancel'>";
		echo "</form>";
		}
		// echo "<form method='POST' action=''>";
		// echo "<h3><strong>Are you sure you want to edit this item?</strong><h3>";
		// echo "<input type='text name='name' value='$name'><br>";
		// echo "<input type='text name='description' value='$description'><br>";
		// echo "<input type='number' name='price' value='$price'><br>";
		// echo "<input type='text' name='category' value='$category'><br>";
		// echo "<input type='file' name='img' value='$img'><br>";
		// echo "<input class='btn btn-danger' type='submit' name='save' value='Save'>";
		// echo "<input class='btn btn-default' type='submit' name='cancel' value='Cancel'>";
		// echo "</form>";









require_once('home.php');
?>
	<!-- <form method="POST" action="">
	<p>Are you sure you want to delete this item?<p>
	<input type="submit" name="yes" value="Yes">
	<input type="submit" name="no" value="No">
	</form> -->
<!-- </body>
</html> -->


<!-- 	require 'connection.php';
 if(isset($_POST['register'])){
 	$username = $_POST['username'];
 	$password = $_POST['password'];
 	$pw2 = $_POST['pw2'];

 	if($password == $pw2){
 		$password = sha1($password);
 		$sql = "INSERT INTO users(
 			username,password,role)
 			VALUES('$username','$password','regular')";
 			mysqli_query($conn,$sql);
 		echo "Hello";
 	}else{
 		echo "Password di not match";
 	}
 }
 -->