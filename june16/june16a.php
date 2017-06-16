<?php

	// require_once 'june16b.php';	
	// $items = [
	// ['name'=> 'Nike Presto Fly Shoes in white and green',
	// 'price'=>'Php 5295.00',
	// 'description'=>'Lightweight sneakers',
	// 'img'=>'nike1.jpg',
	// 'category'=>'nike'],
	
	// ['name'=> 'Nike Presto Fly Shoes in white and navy',
	// 'price'=>'Php 5295.00',
	// 'description'=>'
	// Stretch mesh upper with TPU in toe and heel for breathable support',
	// 'img'=>'nike2.jpg',
	// 'category'=>'nike'],

	// ['name'=> 'UA Commit Training Shoes',
	// 'price'=>'Php 5795.00',
	// 'description'=>'Lightweight training shoes with die-cut',
	// 'img'=>'under-armour.jpg',
	// 'category'=>'under-armour'], 
	// ];

	// $category = array_column($items, 'category');
	// $category = array_unique($category);

	// echo "<form method='POST' action=''>";
	// echo create_dropdown('category',$category);
	// echo "<input type='submit' name='submit' value='Search'></form>";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Shoes</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
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
              <a class="navbar-brand" href="june16a.php">Shoe</a>
            </div>
            <div class="collapse navbar-collapse dropdown-content" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">About</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="login.php">Log In</a></li>
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
        <div class="ads">
        	<img src="logo.jpg">
        </div>
<?php 

	require_once 'june16b.php';	
	$items = [
	['name'=> 'Nike Presto Fly Shoes in white and green',
	'price'=>'Php 5295.00',
	'description'=>'Lightweight sneakers',
	'img'=>'nike1.jpg',
	'category'=>'nike'],
	
	['name'=> 'Nike Presto Fly Shoes in white and navy',
	'price'=>'Php 5295.00',
	'description'=>'
	Stretch mesh upper with ......',
	'img'=>'nike2.jpg',
	'category'=>'nike'],

	['name'=> 'UA Commit Training Shoes',
	'price'=>'Php 5795.00',
	'description'=>'Lightweight training shoes with die-cut',
	'img'=>'under-armour.jpg',
	'category'=>'under-armour'], 
	];

	$category = array_column($items, 'category');
	$category = array_unique($category);

	echo "<div class='container'>" . "<form method='POST' action=''>";
	echo create_dropdown('category',$category);
	echo "<input type='submit' name='submit' value='Search'></form>" . "</div>";

?>
<?php
		echo "<div class='container container-bottom clear'><div class='row clear'>";
		foreach ($items as $item) {
			$name = $item['name']; 
			$description = $item['description'];
			$price = $item['price'];
			// $image = $item['img'];
			$image = '<img src=' . $item['img']. '>';
			$category = $item['category'];

			if(!isset($_POST['submit']) || 
				$_POST['category'] == $category || 
				$_POST['category'] == 'All'){
				// echo "$name <br> $description <br> $price <br> $image <br> $category <br><hr>"; 
				echo "<div class='col-md-4 col-sm-4'> $image <br> $name <br> $description <br> $price <br></div>"; 
			}
		}
		echo "</div></div>"
?>
<footer>
	<a href="http://smart.com.ph/Pages/gigasurf" target="_blank"><img src="smart.jpg"></a>
</footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>