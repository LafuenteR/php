<?php 

if(isset($_POST['change-password'])){

	$string = file_get_contents('users.json');
	if($string)
		$users = json_decode($string, true);
	$username = $_POST['username'];
	$current_password = $_POST['current-password'];
	$new_password = $_POST['new-password'];
	$new_conf_password = $_POST['conf-new-password'];

	$index;

	foreach($string as $key => $value) {
		if($value['username'] == $username && $value['password'] == $current_password && $new_password == $new_conf_password){
			$index = $key;
		}
	}
	$users[index]['password'] = $new_password;
	$fp = fopen('users.json', 'w');
	fwrite($fp, json_encode($users,JSON_PRETTY_PRINT));
	fclose($fp);

}

?>