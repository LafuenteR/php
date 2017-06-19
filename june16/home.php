<!DOCTYPE html>
<html>
<head>
	<title><?php get_title(); ?></title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style type="text/css">

    .navbar{
    	margin-bottom: 0;
    }
    .ads{
    	/*background-image: url(logo.jpg);*/ 
    	width: 100%;
    	height: 300px;
    	/*background-repeat: no-repeat;*/
    	/*background-size: cover;*/
    	margin-bottom: 50px;
    	/*width: 1920px;
    	height: 575px;*/
    }.ads > img{
    	width: 100%;
    	height: 100%;
    }footer{
    	/*width: 100%;*/
    	height: 200px;
    	margin-top: 50px;
    	margin-right: 68px;
    	margin-left: 68px;
    }
    footer > a > img {
    	width: 100%;
    	height: 100%;
    }.container-bottom{
    	margin-bottom: 50px;
    }
    #register-id, #change-password-id{
    	display: none;
    }
    .btn-li{
    	background-color: transparent;
    	margin-top: 10px;
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
              <a class="navbar-brand" href="index.php">Shoe</a>
            </div>
            <div class="collapse navbar-collapse dropdown-content" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="about.php">About</a></li>
                <li><a href="product.php" id="container-product">Products</a></li>
                <li type="button" id="btn=li" class="btn btn-info btn-li" data-toggle="modal" data-target="#myModal">Log In</li>

            </ul>
            </div>
          </div>  <!-- container-fluid -->
        </nav>
        <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <!-- <h4 class="modal-title">Modal Header</h4> -->
      </div>
      <div class="modal-body">
      	<div class="container container-form">
            <form id="register-id" method="POST" action="signup.php">
        		<!-- Name: <br>
        		<input type="text" name="name"> <br> -->
        		Username: <br>
        		<input type="text" name="username" required><br>
        		Password: <br>
        		<input type="password" name="password" required><br>
        		Confirm Password: <br>
        		<input type="password" name="confirm-password" required> <br><br>
        		<input type="submit" name="register" value="Register" class="btn btn-info"><br>
        		Already have an account? <a id="login-a" href="#">Log In</a>


        	</form>
        	<form id="login-id" method="POST" action="log_in.php">
        		Username:<br>
        		<input id="login-id" type="text" name="username" required><br>
        		Password: <br>
        		<input type="password" name="password" required><br><br>
        		<input type="submit" value="Submit" name="submit_log" class="btn btn-info"><br>
        		Don't have an account? <a id="register-a" href="#">Register</a><br>
        		<a id="change-password-a" href="#">Change Password</a>
        	</form>
        	<form id="change-password-id" method="POST" action="changeP.php">
        		Username: <br>
        		<input type="text" name="username" required><br>
        		Current Password: <br>
        		<input type="password" name="current-password" required><br>
        		New Password: <br>
        		<input type="password" name="new-password" required><br>
        		Confirm New Password: <br>
        		<input type="password" name="conf-new-password" required><br><br>
        		<input type="submit" name="change-password" value="Change Password" class="btn btn-info"><br>
        		Back to <a href="#" id="back-to-login-a">Log In</a>
        	</form>
        	<?php 
        		// require_once 'log_in.php';
        	?>
        	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
        <div class="ads">
        	<img src="logo.jpg">
        </div>
<?php 

	display_content();

	// require_once('june16a.php');
?>

<footer>
	<a href="http://smart.com.ph/Pages/gigasurf" target="_blank"><img src="smart.jpg"></a>
</footer>

	<script type="text/javascript">
			$("#register-a").click(function(){
	    		$("#login-id").hide();
	    		$("#register-id").show();
	    		$("#change-password-id").hide();
			});

			$("#login-a").click(function(){
	    		$("#register-id").hide();
	    		$("#login-id").show();
	    		$("#change-password-id").hide();
			});
			$("#change-password-a").click(function(){
	    		$("#register-id").hide();
	    		$("#login-id").hide();
	    		$("#change-password-id").show();
			});
			$("#back-to-login-a").click(function(){
	    		$("#login-id").show();
	    		$("#register-id").hide();
	    		$("#change-password-id").hide();
			});

	</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


</body>
</html>