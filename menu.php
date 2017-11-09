<?php
/**
This variable will give you the restuarant ID
$_GET['Restaurant ID'];

$menuCategories will be the 2D array that contains the menu category fields fetched with the 
above restaurant ID so $menuCategories[0] would be the first record and $menuCategories[0][0]
would be the first field of the first record. None of the variables concatenated to the
HTML should be the outer array $menuCategories[index] as shown below. It was just for a
proxy. The parameter of the getMenuCategory(parameter) function should be the menu category
ID so that the next script can use it to query the menu items in that menu's menu category.
The alt text should be the menu category name, and the text inside the div tag should also
be the menu category name. The background image should be the image file path... and so on.
The loop is based on the count of the array which should contain the menu category fields.
**/
$menuCategories = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
echo 	'<div id = "Menu" class = "Menu">
			<div id = "Restaurants" class = "MenuItem" onclick = "getRestaurants();">Restaurants</div>
			<div class = "MenuItem">Login</div>
			<div class = "MenuItem"></div>
		</div>';
for($i = 0; $i < count($menuCategories); $i++){
	if($i % 3 == 0){
		echo	'<div onclick = "getMenuCategory(' . $menuCategories[0] . ');" class = "CatalogImage First" alt = ' . $menuCategories[0] . ' style = "background-image: url(' . $menuCategories[0] . '); background-size: 100% 100%;">' . $menuCategories[0] . '</div>';
	}
	elseif($i % 3 == 1){
		echo	'<div onclick = "getMenuCategory(' . $menuCategories[0] . ');" class = "CatalogImage" alt = ' . $menuCategories[0] . ' style = "background-image: url(' . $menuCategories[0] . '); background-size: 100% 100%;">' . $menuCategories[0] . '</div>';	
	}
	elseif($i % 3 == 2){
		echo	'<div onclick = "getMenuCategory(' . $menuCategories[0] . ');" class = "CatalogImage Last" alt = ' . $menuCategories[0] . ' style = "background-image: url(' . $menuCategories[0] . '); background-size: 100% 100%;">' . $menuCategories[0] . '</div>';
	}
}
?>
