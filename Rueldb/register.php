<?php 
	require 'connection.php';
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
?>
<!-- <!DOCTYPE html>
<html>
<head>
	<title>REG</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
</head>
<body>
<h1>REGISTER</h1>
<form method="POST" action="">
	<div class="form-group">
		<input type="text" name="username" placeholder="Username">
	</div>
	<div class="form-group">
		<input type="password" name="password" placeholder="Password">
	</div>
	<div class="form-group">
		<input type="password" name="pw2" placeholder="Confirm PAssword">
	</div>
	<div class="form-group">
		<input class="btn btn-info" type="submit" name="register" placeholder="Register">
	</div>
</form>
    <script src="js/bootstrap.min.js"></script>
</body>
</html -->>