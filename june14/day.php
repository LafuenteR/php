<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.container{
			padding-top: 100px;
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="container">
	<h1>Enter your birthdate</h1>
	<form action="" method="POST">
		<input type="date" name="date">
		<input type="submit" value="Horoscope" name="horoscope">
	</form>
	<br><br>
	<?php 
		if(isset($_POST['horoscope'])){
		$date = $_POST['date'];
		// echo $date;
		// $input = '03/01/2016';

		$months = [
		'January',
		'February',
		'March',
		'April',
		'May',
		'June',
		'July',
		'August',
		'September',
		'October',
		'November',
		'December'
		];

		$zodiac=[
		'Capricorn',
		'Aquarius',
		'Pisces',
		'Aries',
		'Taurus',
		'Gemini',
		'Cancer',
		'Leo',
		'Virgo',
		'Libra',
		'Scorpio',
		'Saguittarius'
		];
		$chinese_zodiac=[
			'Monkey',
			'Roster',
			'Dog',
			'Pig',
			'Rat',
			'Ox',
			'Tiger',
			'Rabbit',
			'Dragon',
			'Snake',
			'Horse',
			'Goat'
		];


		$date = explode('-', $date);
		$dd = $date[2];
		$mm = $date[1];
		$yyyy = $date[0];
		echo "Your birthday is ";
		echo $months[$mm-1].' '.$dd.', '.$yyyy;
		echo '<br><br>';
		$eval= ($mm*100) + ($dd);
		$chi_zo = $yyyy%12;
		
		if(($eval>=120) && ($eval<=218)){
			echo $zodiac[1];
		}else if (($eval>=219) && ($eval<=320)){
			echo $zodiac[2];
		}
		else if (($eval>=321) && ($eval<=420)){
			echo $zodiac[3];
		}
		else if (($eval>=421) && ($eval<=521)){
			echo $zodiac[4];
		}
		else if (($eval>=522) && ($eval<=621)){
			echo $zodiac[5];
		}
		else if (($eval>=622) && ($eval<=723)){
			echo $zodiac[6];
		}
		else if (($eval>=724) && ($eval<=823)){
			echo $zodiac[7];
		}
		else if (($eval>=824) && ($eval<=923)){
			echo $zodiac[8];
		}
		else if (($eval>=924) && ($eval<=1022)){
			echo $zodiac[9];
		}
		else if (($eval>=1023) && ($eval<=1122)){
			echo $zodiac[10];
		}
		else if (($eval>=1123) && ($eval<=1222)){
			echo $zodiac[11];
		}else{
			echo $zodiac[0];
		}
		echo "<br><br>You're chinese zodiac animal is " .  "<strong><i>$chinese_zodiac[$chi_zo]</i></strong>";
	}
	?>
	</div>
</body>
</html>