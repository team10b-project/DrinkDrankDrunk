<?php
$restaurants = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
for($i = 0; $i < count($restaurants); $i++){
	if($i % 3 == 0){
		echo	'<div onclick = "getMenu(' . $restaurants[0] . ');" class = "CatalogImage First" alt = ' . $restaurants[0] . ' style = "background-image: url(' . $restaurants[0] . '); background-size: 100% 100%;">' . $restaurants[0] . '</div>';
	}
	elseif($i % 3 == 1){
		echo	'<div onclick = "getMenu(' . $restaurants[0] . ');" class = "CatalogImage" alt = ' . $restaurants[0] . ' style = "background-image: url(' . $restaurants[0] . '); background-size: 100% 100%;">' . $restaurants[0] . '</div>';	
	}
	elseif($i % 3 == 2){
		echo	'<div onclick = "getMenu(' . $restaurants[0] . ');" class = "CatalogImage Last" alt = ' . $restaurants[0] . ' style = "background-image: url(' . $restaurants[0] . '); background-size: 100% 100%;">' . $restaurants[0] . '</div>';
	}
}
?>
