<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="POST">
		South East Asia:
		<select name="country">
		<!-- 	<option selected=""></option>
			<option value="Brunie">Bandar Seri Begawan</option>
			<option value="Cambodia">Phnom Penh</option>
			<option value="East Timor">Dili</option>
			<option value="Indonesia">Jakarta</option>
			<option value="Laos">Vientiane</option>
			<option value="Malaysia">Kuala Lumpur</option>
			<option value="Myanmar">Nay Pyi Daw</option>
			<option value="Philippines">Manila</option>
			<option value="Singapore">Singapore</option>
			<option value="Thailand">Bangkok</option>
			<option value="Vietnam">Hanoi</option> -->
			<?php 
			create_dropdown('country', $SEA);
			?>
			
		</select>
		<input type="submit" value="Submit" name="submit">
	</form>

	<?php

	if(isset($_POST['submit'])){
		
		$country = $_POST['country'];
		echo 'Selected city is capital of ' .$country;
		
		
	} 
	?>
	<?php 
		function create_dropdown($country, $SEA){
		$country = $_POST['country'];
		$SEA=[
		"Brunie" => "Bandar Seri Begawan",
		"Cambodia"=> "Phnom Penh",
		"East Timor" => "Dili",
		"Indonesia"=> "Jakarta",
		"Laos"=> "Vientiane",
		"Malaysia"=> "Kuala Lumpur",
		"Myanmar"=> "Nay Pyi Daw",
		"Philippines"=> "Manila",
		"Singapore"=> "Singapore",
		"Thailand"=> "Bangkok",
		"Vietnam" => "Hanoi"
		];
			foreach ($SEA as $countries => $capital) {
				echo "<option value='$countries'>$capital</option>";
			}
		}
			?>
</body>
</html>