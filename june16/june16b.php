<?php
	
	function create_dropdown($name,$options){
		$output = "<select name='$name'>";
		$output .= "<option>All</option>";
		foreach ($options as $value) {
			if(isset($_POST[$name]) && $_POST[$name] == $value){
				$output .= "<option selected value='$value'>$value</option>";
			} 
			else {
				$output .= "<option value='$value'>$value</option>";
			}
		}
		$output .= "</select>";

		return $output;
	}

?>