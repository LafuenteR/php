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
// function display_content(){
 function get_title(){
                echo "Delete Item";
        }
function display_content(){
require 'connection.php';

$item_id = $_GET['current_item']; //Retrives items to be delete
//current item to be deleted
$sql = "SELECT * FROM shoe
where id= '$item_id'";

$result = mysqli_query($conn, $sql);

// if(mysqli_num_rows($result)>0){
	while($row = mysqli_fetch_assoc($result)){
		extract($row);

		echo "<div class='col-md-4 col-sm-4 clear'>";
		echo "<img src=".$img .">" ."<br>". $name ."<br>" .$description. "<br>" .$price ."<br>";
		echo "</div>";
		
		echo "<form method='POST' action=''>";
		echo "<p>Are you sure you want to delete this item?<p>";
		echo "<input type='submit' name='yes' value='Yes'>";
		echo "<input type='submit' name='no' value='No'>";
		echo "</form>";
}
		if(isset($_POST['yes'])){

			$sql = "DELETE FROM shoe where id = '$item_id'";
			mysqli_query($conn,$sql);

			// mysqli_query($conn, $sql);
			header('location:index.php');
		}
		// if(isset($_POST['no'])){

		// 	header('location:product.php');
		// }
	}


// 	echo "<form method='POST' action=''>";
// 	echo "<p>Are you sure you want to delete this item?<p>";
// 	echo "<input type='submit' name='yes' value='Yes'>";
// 	echo "<input type='submit' name='no' value='No'>";
// 	echo "</form>";
// }
if(isset($_POST['no'])){

			header('location:product.php');
		}
	require_once('home.php');
?>
	<!-- <form method="POST" action="">
	<p>Are you sure you want to delete this item?<p>
	<input type="submit" name="yes" value="Yes">
	<input type="submit" name="no" value="No">
	</form> -->
<!-- </body>
</html> -->