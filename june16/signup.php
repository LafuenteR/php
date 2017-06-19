<?php 
	$string = file_get_contents('users.json');
	$users = json_decode($string, true);
	if(isset($_POST['register'])){

		// $string = file_get_contents('users.json');
		// $users = json_decode($string, true);
		$new_user = [];
		$new_user['username'] = $_POST['username'];
		$new_user['password'] = $_POST['password'];
		if($new_user['password'] == $_POST['confirm-password']){
			$users[] = $new_user;
			$fp = fopen('users.json', 'w');
			fwrite($fp, json_encode($users,JSON_PRETTY_PRINT));
			fclose($fp);
	
		}else if (($_POST['username'] == null) || ($_POST['password'] == null)){
			echo "Please fill up all";

		}else if (($_POST['username'] == null) && ($_POST['password'] == null)){
			echo "Please fill up all";
		}
		// $users[] = $new_user;
		// $fp = fopen('users.json', 'w');
		// fwrite($fp, json_encode($users,JSON_PRETTY_PRINT));
		// fclose($fp);
		// var_dump($users);
		else{
			echo "Wrong Password";
		}

		// $users[] = $new_user;
		// $fp = fopen('users.json', 'w');
		// fwrite($fp, json_encode($users,JSON_PRETTY_PRINT));
		// fclose($fp);
	
}
?>