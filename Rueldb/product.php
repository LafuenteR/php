<?php 
   function get_title(){
                echo "Products";
        }
	function display_content(){
		require 'connection.php';
		// require 'connection.php';
		require 'june16b.php';
		// $category = array_column($sql);
		// $category = array_unique($category);
		 
		 $sql1 = "SELECT category FROM shoe";
		 $result1 = mysqli_query($conn,$sql1);

		echo "<div class='container clear' id='container-hide'>" ."<div class='container-fluid clear'>" . "<form class='form-group' method='POST' action=''>";
		echo create_dropdown();
		echo "<input class='btn btn-default' type='submit' name='submit1' value='Search'>";
		echo "<input class='btn btn-info' type='submit' name='add' value='Add Items'>";
		echo "</form></div></div>";
		// create_dropdown();
		$sql = "SELECT * FROM shoe";
		$result = mysqli_query($conn,$sql);
 		if(mysqli_num_rows($result)>0){
 			echo "<div class='container row'>";
 			while($row = mysqli_fetch_assoc($result)){
 			extract($row);
 			// echo "<div class='container col-md-4 col-sm-4'>";
 			// echo "<img src=". $img .">" ."<br>";
 			// echo $name . "<br>";
 			// echo $description . "<br>";
 			// echo $price . "<br>";
 			// echo "</div>";
 			if(!isset($_POST['submit1']) || 
				$row['category'] == $_POST['category'] || 
				$_POST['category'] == 'All'){
				// echo "$name <br> $description <br> $price <br> $image <br> $category <br><hr>"; 
				echo "<div class='col-md-4 col-sm-4 clear'>" . "<img src=".$img .">" ."<br>". $name ."<br>" .$description. "<br>" .$price ."<br>"; 
				echo "<a href='edit.php?current_item=$id'><input class='btn btn-success' type='submit' name='edit' value='Edit'></a>";
				echo "<a href='delete.php?current_item=$id'><input class='btn btn-danger' type='submit' name='delete' value='Delete'></a></div>";
			}
 		}
 		echo "</div>";	// header('location:home.php');
 		}else{
 			echo "not found";
 		}

 	}
 	 	if(isset($_POST['add'])){
 		header('location:addNewItem.php');
 	}
 	require_once('home.php');

?>