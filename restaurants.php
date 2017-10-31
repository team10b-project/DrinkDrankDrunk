<?php
$restaurants = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
for($i = 0; $i < count($restaurants); $i++){
	if($i % 3 == 0){
		echo	'<div class = "MenuImage First" alt = " . $restaurants[][] . " style = "background-image: url(" . $restaurants[][] . "); background-size: 100% 100%;"> . $restaurants[][] . </div>';
	}
	elseif($i % 3 == 1){
		echo	'<div class = "MenuImage" alt = " . $restaurants[][] . " style = "background-image: url(" . $restaurants[][] . "); background-size: 100% 100%;"> . $restaurants[][] . </div>';	
	}
	elseif($i % 3 == 2){
		echo	'<div class = "MenuImage Last" alt = " . $restaurants[][] . " style = "background-image: url(" . $restaurants[][] . "); background-size: 100% 100%;"> . $restaurants[][] . </div>';
	}
}
?>
