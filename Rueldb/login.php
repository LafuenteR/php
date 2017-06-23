<?php 
	session_start();
	if(isset($_POST['login'])){
		require('connection.php');
		$username = $_POST['username'];
 		$password =sha1($_POST['password']);
 		$sql = "SELECT * FROM users 
 		WHERE username = '$username' 
 		AND password = '$password'";

 		$result = mysqli_query($conn,$sql);
 		if(mysqli_num_rows($result)>0){
 			while($row = mysqli_fetch_assoc($result)){
 			extract($row);
 			$_SESSION['message'] = 'Login Successfully'; 
 			$_SESSION['username'] = $username;
 			$_SESSION['role'] = $role;

 			echo "Login Successfully";
 		}
 			// header('location:home.php');
 		}else{
 			echo "not found";
 		}
	}
?>
<!-- <!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
</head>
<body>
	<h1>Log In</h1>
	<form method="POST" action="">
		<div class="form-group">
			<input type="text" name="username" placeholder="Username">
		</div>
		<div class="form-group">
			<input type="password" name="password" placeholder="Password">
		</div>
		<div class="form-group">
			<input class="btn btn-info" type="submit" name="login" >
		</div>
	</form>
	<script src="js/bootstrap.min.js"></script>
</body>
</html> -->