<?php
/**
**/
$items = [1, 2, 3];
echo 	'<div id = "Menu" class = "Menu">
			<div id = "Restaurants" class = "MenuItem" onclick = "getRestaurants();">Restaurants</div>
			<div class = "MenuItem">Login</div>
			<div class = "MenuItem"></div>
		</div>';
for($i = 0; $i < count($items); $i++){
	if($i % 3 == 0){
		echo	'<div onclick = "getItem(' . $items[0] . ');" class = "CatalogImage First" alt = ' . $items[0] . ' style = "background-image: url(' . $items[0] . '); background-size: 100% 100%;">' . $items[0] . '</div>';
	}
	elseif($i % 3 == 1){
		echo	'<div onclick = "getItem(' . $items[0] . ');" class = "CatalogImage" alt = ' . $items[0] . ' style = "background-image: url(' . $items[0] . '); background-size: 100% 100%;">' . $items[0] . '</div>';	
	}
	elseif($i % 3 == 2){
		echo	'<div onclick = "getItem(' . $items[0] . ');" class = "CatalogImage Last" alt = ' . $items[0] . ' style = "background-image: url(' . $items[0] . '); background-size: 100% 100%;">' . $items[0] . '</div>';
	}
}
?>
