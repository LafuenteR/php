<!DOCTYPE html>
<html>
<head>
	<title></title>
	<title>Shoes</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style type="text/css">
    .container-form{
    	text-align: center;
    }
    form{
    	margin-top: 100px;
    }footer{
    	/*width: 100%;*/
    	height: 200px;
    	margin-top: 400px;
    	margin-right: 68px;
    	margin-left: 68px;
    	margin-bottom: 0;
    }
    footer > a > img {
    	width: 100%;
    	height: 100%;
    }#register-id{
    	display: none;
    }
    </style>

</head>
<body>
		<nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
		        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span> 
		  		</button>
              	<a class="navbar-brand" href="#">Shoe</a>
            </div>
            <div class="collapse navbar-collapse dropdown-content" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">About</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Log In</a></li>
<!--                 <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Portfolio
                  <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Page 1.2</a></li>
                    <li><a href="#">Page 1.3</a></li>
                  </ul>
                </li> -->
<!--                 <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Blog
                  <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Page 1.2</a></li>
                    <li><a href="#">Page 1.3</a></li>
                  </ul>
                </li> -->
<!--                 <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Other Pages
                  <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Page 1.2</a></li>
                    <li><a href="#">Page 1.3</a></li>
                  </ul>
                </li> -->
            </ul>
            </div>
          </div>  <!-- container-fluid -->
        </nav>
        <div class="container container-form">
        	<form id="register-id" method="POST" action="">
        		Name: <br>
        		<input type="text" name="name"> <br>
        		Username: <br>
        		<input type="text" name="username"><br>
        		Password: <br>
        		<input type="password" name="password"><br>
        		Confirm Password: <br>
        		<input type="password" name="confirm-password"> <br><br>
        		<input type="submit" name="register" value="Register"><br>
        		Already have an account? <a id="login-a" href="#">Log In</a>

        	</form>
        	<form id="login-id" method="POST" action="">
        		Username:<br>
        		<input id="login-id" type="text" name="username"><br>
        		Password: <br>
        		<input type="password" name="password"><br><br>
        		<input type="submit" value="Submit" name="submit"><br>
        		Don't have an account? <a id="register-a" href="#">Register</a>
        	</form>
        	<?php 
  				
  				// if(isset($_POST['register'])){
  				// 	$register = [
      //   			['name' => $_POST['name'],
      //   			['usrname' => $_POST['username'],
      //   			['email' => $_POST['email'],
      //   			['password' => $_POST['password']
      //   			]
  				// }
      //   		// $register = [
      //   		// 	['name' => $_POST['name'],
      //   		// 	['usrname' => $_POST['username'],
      //   		// 	['email' => $_POST['email'],
      //   		// 	['password' => ($_POST['password'] && $_POST['confirm-password'])
      //   		// 	];
        	?>
        	
        	<?php 
        		session_start();
        		// $register = [
        		// 	['name' => $_POST['name'],
        		// 	['usrname' => $_POST['username'],
        		// 	['email' => $_POST['email'],
        		// 	['password' => $_POST['password'] && $_POST['confirm-password']
        			
        		// ];
        		// $users = [
        		// 			['username' => 'admin', 'password' => 'secret' ],
        		// 			['username' => 'Ruel', 'password' => 'password' ]
        		// ];
        		$string = file_get_contents('users.json');
        		$users = json_decode($string, true);

        		if(isset($_POST['submit'])){
        			foreach ($users as $user) {
        				if($_POST['username'] == $user['username'] && $_POST['password'] == $user['password']){
        					header('location:june16a.php');
        				}
        		      
        			}
        		}
        		$register =[
        			['name' => $_POST['name']],
        			['username' => $_POST['username']],
        			['email' => $_POST['email']],
        			['password' => $_POST['password']]
        		];
        		$string = file_get_contents('users.json');
        		$users = json_decode($string, true);
        		if(isset($_POST['register'])){
        			$new_user = [];
        			$new_user['username'] = $_POST['username'];
        			$new_user['password'] = $_POST['password'];
        			$register[] = $new_user;
        			$fp = fopen('users.json', 'w');
        			fwrite($fp, json_encode($register,JSON_PRETTY_PRINT));
        			fclose($fp);
        		}
        	?>
        </div>
        <footer>
			<a href="http://smart.com.ph/Pages/gigasurf" target="_blank"><img src="smart.jpg"></a>
		</footer>
		<script type="text/javascript">
			$("#register-a").click(function(){
	    		$("#login-id").hide();
	    		$("#register-id").show();
			});

			$("#login-a").click(function(){
	    		$("#register-id").hide();
	    		$("#login-id").show();
			});
		</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>