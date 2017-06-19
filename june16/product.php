<?php 
	function get_title(){
		echo "Product Page";
	}
	function display_content(){
		// echo "Contents of Product Page";
	// echo "hello";
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

	echo "<div class='container' id='container-hide'>" . "<form method='POST' action=''>";
	echo create_dropdown('category',$category);
	echo "<input type='submit' name='submit' value='Search'></form>";
		// . "</div>";
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
		echo "</div></div>";
		echo "</div>";
	}

	require_once('home.php');
?>