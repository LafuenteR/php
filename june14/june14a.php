<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	//get request - input thru address bar
	// echo "Input";
	// echo $_GET['input1'];
	// echo "<br>";
	// echo "Hello";
	// echo htmlspecialchars($_GET['name']);
	//http://localhost/ruel/june14/june14a.php?input1=%20hello%20&%20%20name=%20Ruel
	/*
	Hello<?= htmlpecialchars($_get['name']) ?>
	Htmlspecialchars() funxtion to sanitize the user input
	*/
	?>
<!-- 	<form action="get_example.php" method="POST">
		Username: <br>
		<input type="text" name="username"><br>
		Password: <br>
		<input type="password" name="password"><br><br>
		<input type="submit" value="submit">
	</form> -->
	<form action="" method="POST">
		Length:<br>
		<input type="number" name="length"><br>
		Width:<br>
		<input type="number" name="width"><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>
<?php 
	if(isset($_POST['submit'])){
		echo 'true ';
	}else{
		echo 'false';
	}
	$length = $_POST['length'];
	$width = $_POST['width'];

	function solve_area_rectangle($l,$w){
		return "Area of rectangle with length: ". $l . " and width " . $w . " is " . $l*$w;
	}
	// phpinfo();                                                                                                                            
?>
</body>
</html>