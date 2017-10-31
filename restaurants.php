<?php
$restaurants = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
for($i = 0; $i < count($restaurants); $i++){
	if($i % 3 == 0){
		echo	'<div class = "MenuImage First" style = "background-image: url(""); background-size: 100% 100%;"></div>';
	}
	elseif($i % 3 == 1){
		echo	'<div class = "MenuImage" style = "background-image: url(""); background-size: 100% 100%;"></div>';	
	}
	elseif($i % 3 == 2){
		echo	'<div class = "MenuImage Last" style = "background-image: url(""); background-size: 100% 100%;"></div>';
	}
}
?>
