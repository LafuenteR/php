<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!-- <form>
	<select name="shoe">
		<?php 
	// 	create_dropdown('shoe',$item);
	// 	?>
	// 	<?php 
	// $shoe = $_POST['shoe'];
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

	// foreach ($items as $item) {
	// 	echo "$item['name']";
		 

	// 	 $category = function array_column($items, 'category');	
	// }
	?>
		<input type="submit" name="submit" value="Submit">
	</select>
</form> -->


	<?php 
	if(isset($_POST['submit'])){
		
		// $shoe = $_POST['shoe'];
		// echo $shoe;
		
		
	} 	
	?>
	<?php 
	
	// $shoe = $_POST['shoe'];
	$items = [
	['name'=> 'Nike Presto Fly Shoes in white and green',
	'price'=>'Php 5295.00',
	'description'=>'Lightweight sneakers',
	'img'=>'nike1.jpg',
	'category'=>'nike'],
	
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
	'category'=>'under-armour'], 
	];
	$category = array_column($items,'category');
	print_r($category);
	function create_dropdown($name,$options){
	$output = "<select name='$name'>";
	foreach ($options as $value) {
		$output .= "<option value='$value'>$value</option>";
	}
	$output .= '</select>';

	return $output;
}
	// $category = function array_column($items, 'category');
	$category = array_unique($category);
	echo "<form method='POST' action=''>";
	echo create_dropdown('category',$category);
	echo "<input type='submit' name='submit' value='Search'></form>";
	?>
</body>
</html>