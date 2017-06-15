<?php 
	session_start();
	// $_SESSION['username'] = $_POST['username'];
	// echo $_SESSION['username'];
	// echo '<br>';
	// echo $_POST['password'];
	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);

	if (authenticate($username,$password)) {
		echo 'User is valid';
		 $_SESSION['user'] = $username;
	}else{
		echo 'Incorrect login details';
	}
	function authenticate($username,$password){
		if($username == 'admin' && $password == 'secret'){
			return true;
		}else{
			return false;
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="logout.php">
		<button>Log Out</button>
	</form>
</body>
</html>