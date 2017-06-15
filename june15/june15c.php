<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	img{
		width: 200px;
		height: 500px;
	}
	.container{
		text-align: center;
	}
	</style>
</head>
<body>
<div class="container">
<?php 
$items = [
	['name'=> 'Nike Presto Fly Shoes in white and green',
	'price'=>'Php 5295.00',
	'description'=>'Lightweight sneakers',
	'img'=>'nike1.jpg',
	'category'=>'nike1'],
	
	['name'=> 'Nike Presto Fly Shoes in white and navy',
	'price'=>'Php 5295.00',
	'description'=>'
	Stretch mesh upper with TPU in toe and heel for breathable support',
	'img'=>'nike2.jpg',
	'category'=>'nike'],

	['name'=> 'UA Commit Training Shoes',
	'price'=>'Php 5795.00',
	'description'=>'Lightweight training shoes with die-cut',
	'img'=>'under-armour.jpg',
	'category'=>'under_armour'], 
	];

	$category = array_column($items,'category');
	// print_r($category);
	function create_dropdown($name,$options){
	$output = "<select name='$name'>";
	foreach ($options as $value) {
		if(isset($_POST[$name]) && $_POST[$name] == $value){
			$output .= "<option selected value='$value'>$value</option>";
		}else{
			$output .= "<option value='$value'>$value</option>";
		}
		
	}
	$output .= '</select>';

	return $output;
}
	// $category = function array_column($items, 'category');
	$category = array_unique($category);
	echo "<form method='POST' action=''>";
	echo create_dropdown('category',$category);
	echo "<input type='submit' name='submit' value='Search'></form>";


	foreach ($items as $val) {
		echo '<img src=' . $val['img']. '>'.'<br>'. 
				$val['name'].'<br>'. 
				$val['price']. '<br>'.
				$val['description']. '<br>';
		// echo $value['name'].'<br>';
		// echo $value['price'];
		

	}
// 	$category = array_column($items,'category');
// 	// print_r($category);
// 	function create_dropdown($name,$options){
// 	$output = "<select name='$name'>";
// 	foreach ($options as $key => $value) {
// 		$output .= "<option value='$key'>$value</option>";
// 	}
// 	$output .= '</select>';

// 	return $output;
// }
	// // $category = function array_column($items, 'category');
	// $category = array_unique($category);
	// echo "<form method='POST' action=''>";
	// echo create_dropdown('category',$category);
	// echo "<input type='submit' name='submit' value='Search'></form>";
?>
</div>
</body>
</html>