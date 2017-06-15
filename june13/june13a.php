<!DOCTYPE html>
<html lang="en">
  <head>
  	<style type="text/css">
  	body{
  		/*background-color: red;*/
  		text-align: center;
  	}
  	p{
  		font-size: 22px;
  		color: white;
  		/*text-shadow: 2px 2px red;*/
  	}
  	span{
  		font-weight: bold;
  		font-style: italic;
  		color: white;
  	}
  	button{
  		background-color: blue;
  		width: 100px;
  		height: 50px;
  		border-radius: 5px;
  		color: white;
  	}
  	h1{
  		font-family: cursive;
  		color: white;
  		/*text-shadow: 2px 2px red;*/
  	}
  	body { background: blue; }
.container{
	background: none;
	font-family: Androgyne;
	background-image: url('http://www.wearewebstars.dk/codepen/img/s1.png'), url('http://www.wearewebstars.dk/codepen/img//s2.png'), url('http://www.wearewebstars.dk/codepen/img//s3.png');
	height: 100%;
	left: 0;
	position: absolute;
	top: 0;
	width: 100%;
	z-index:1;
	-webkit-animation: snow 10s linear infinite;
	-moz-animation: snow 10s linear infinite;
	-ms-animation: snow 10s linear infinite;
	animation: snow 10s linear infinite;
}
@keyframes snow {
  0% {background-position: 0px 0px, 0px 0px, 0px 0px;}
  50% {background-position: 500px 500px, 100px 200px, -100px 150px;}
  100% {background-position: 500px 1000px, 200px 400px, -100px 300px;}
}
@-moz-keyframes snow {
  0% {background-position: 0px 0px, 0px 0px, 0px 0px;}
  50% {background-position: 500px 500px, 100px 200px, -100px 150px;}
  100% {background-position: 400px 1000px, 200px 400px, 100px 300px;}
}
@-webkit-keyframes snow {
  0% {background-position: 0px 0px, 0px 0px, 0px 0px;}
  50% {background-position: 500px 500px, 100px 200px, -100px 150px;}
  100% {background-position: 500px 1000px, 200px 400px, -100px 300px;}
}
@-ms-keyframes snow {
  0% {background-position: 0px 0px, 0px 0px, 0px 0px;}
  50% {background-position: 500px 500px, 100px 200px, -100px 150px;}
  100% {background-position: 500px 1000px, 200px 400px, -100px 300px;}
}	
  	</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="container">
<!--   	<?php
	    // if (isset($_POST['counter'])){
	    // 	$counter = $_POST['counter'] + 1;
	    // }
	    // else{
	    // 	$counter = 0;
	    // }
    ?> -->

    <h1>Twelve days of Christmas</h1>
    <form method="POST">
    	<button> Next
    		<?php 
    		  if (isset($_POST['counter'])){
    			$counter = $_POST['counter'] + 1;
    		}
   			 else{
    		$counter = 0;
    		}
    		if ($counter >= 12){
    		$counter= 0;
    		}
    		?>
    	</button><br><br>
		<input class="btn btn-success" type="hidden" name="counter" value="<?php echo $counter; ?>">
    </form>
    
    <?php 
    // if (isset($_POST['counter'])){
    // 	$counter = $_POST['counter'] + 1;
    // }
    // else{
    // 	$counter = 0;
    // }
    // if ($counter >= 12){
    // 	$counter= 0;
    // }
		// $days = [
		// 	'first' => "A Partridge in a Pear Tree",
		// 	'second' => 'Two Turtle Doves',
		// 	'third' => 'Three French Hens',
		// 	'fourth' =>'Four Calling Birds',
		// 	'fifth' =>'Five Golden Rings',
		// 	'sixth' =>'Six Geese a Laying',
		// 	'seventh' =>'Seven Swans a Swimming',
		// 	'eighth' =>'Eight Maids a Milking',
		// 	'ninth' =>'Nine Ladies Dancing',
		// 	'tenth' =>'Ten Lords a Leaping',
		// 	'eleventh' =>'Eleven Pipers Piping',
		// 	'twelfth' =>'12 Drummers Drumming'
		// 	];
		$day = [
			'first',
			'second',
			'third',
			'fourth',
			'fifth',
			'sixth',
			'seventh',
			'eighth',
			'ninth',
			'tenth',
			'eleventh',
			'twelfth'
			];
		$gave = [
		'A Partridge in a Pear Tree',
		'Two Turtle Doves',
		'Three French Hens',
		'Four Calling Birds',
		'Five Golden Rings',
		'Six Geese a Laying',
		'Seven Swans a Swimming',
		'Eight Maids a Milking',
		'Nine Ladies Dancing',
		'Ten Lords a Leaping',
		'Eleven Pipers Piping',
		'Twelve Drummers Drumming'
		];
		$i = $counter;
		// for ($i=0; $i < 12 ; $i) { 
			// $i = $_POST['counter'];
			// $n = $i-1;
			// if($i==0){
			// 	echo 'On the ' . $day[$i] . ' of Christmas my true love sent to me: ' . '<br>' . $gave[$i] . '<br>';	
			// }else{
			// 	echo 'On the ' . $day[$i] . ' of Christmas my true love sent to me: ' . '<br>' . $gave[$i] . '<br>'. $gave[$n] . '<br>' .' and ' .$gave[0] . '<br>' ;
			// }
			echo "<p>"."On the " ."<span>".$day[$i]."</span>". " day of Christmas". "<br><br>" . "My true love sent to me: ". "<br>"."</p>";

			for (($j=$i); $j >= 0 ; $j--) { 
				if ($i==0){
					echo "<p>".$gave[$j] .'<br><br>'."</p>";
				} else if ($j == 0){
					echo "<p>". 'And ' . $gave[$j] .'<br><br>'."</p>";
				}else{
					echo "<p>". $gave[$j].'<br>'."</p>";
				}
			}
		// }
	 ?>
	 </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>






































