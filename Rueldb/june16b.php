<?php
	
	function create_dropdown(){
		require 'connection.php';
		// $sql = "SELECT category FROM shoe";
		// $result = mysqli_query($conn,$sql);
		// GLOBAL $category;
		$sql = "SELECT DISTINCT category FROM shoe";
		$result = mysqli_query($conn,$sql);

		echo "<select name='category'>";
		echo "<option>All</option>";
		while ($row = mysqli_fetch_assoc($result)) {
			extract($row);
			if(isset($_POST['category']) && $_POST['category']==$category){

				echo "<option selected value='$category'>" .$category ."</option>";
			}else{
				echo "<option value='$category'>" .$category ."</category>";
			}
		}

		echo "</select>";


		// $output = "<select name='$category'>";
		// $output .= "<option>All</option>";
		// foreach ($options as $value) {
		// 	if(isset($_POST[$category]) && $_POST[$category] == $value){
		// 		$output .= "<option selected value='$value'>$value</option>";
		// 	} 
		// 	else {
		// 		$output .= "<option value='$value'>$value</option>";
		// 	}$output .= "</select>";
		// }
		// // $output .= "</select>";

		// return $output;
	}

?>