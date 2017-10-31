<?php
$restaurants = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
for($i = 0; $i < count($restaurants); $i++){
	if($i % 3 == 0){
		echo	'<a href="http://localhost/DrinkDrankDrunk.com/mobileMenu.html"> 
				<div class = "MenuImage First" style = "background-image: url(""); background-size: 100% 100%;"></div>
			</a>';
	}
	elseif($i % 3 == 1){
		echo	'<a href="http://localhost/DrinkDrankDrunk.com/mobileMenu.html"> 
				<div class = "MenuImage" style = "background-image: url(""); background-size: 100% 100%;"></div>
			</a>';	
	}
	elseif($i % 3 == 2){
		echo	'<a href="http://localhost/DrinkDrankDrunk.com/mobileMenu.html"> Hello
				<div class = "MenuImage Last" style = "background-image: url(""); background-size: 100% 100%;"></div>
			</a>';
	}
}
?>
