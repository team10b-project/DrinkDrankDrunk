
<?php

$dbc = mysqli_connect('localhost','root','','drinkdrankdrunk')
or die('Error connecting to MySQL server.');
$query = 'SELECT * FROM menu_categories WHERE restaurant_id = "'.$_GET['Restaurant ID'].'"';
$result = mysqli_query($dbc, $query) or die('Error querying database.');
mysqli_close($dbc);


$menuCategories = mysqli_fetch_all($result);
echo $menuCategories;

echo 	'<div id = "Menu" class = "Menu">
			<div class = "MenuItem">Restaurants</div>
			<div class = "MenuItem">Login</div>
			<div class = "MenuItem"></div>
		</div>';
for($i = 0; $i < count($menuCategories); $i++){
	if($i % 3 == 0){
		echo	'<div onclick = "getMenuCategory(' . $menuCategories[i][0] . ');" class = "CatalogImage First" alt = ' . $menuCategories[i][2] . ' style = "background-image: url(' . $menuCategories[i][2] . '); background-size: 100% 100%;">' . $menuCategories[0] . '</div>';
	}
	elseif($i % 3 == 1){
		echo	'<div onclick = "getMenuCategory(' . $menuCategories[i][0] . ');" class = "CatalogImage" alt = ' . $menuCategories[i][2] . ' style = "background-image: url(' . $menuCategories[i][2] . '); background-size: 100% 100%;">' . $menuCategories[0] . '</div>';
	}
	elseif($i % 3 == 2){
		echo	'<div onclick = "getMenuCategory(' . $menuCategories[i][0] . ');" class = "CatalogImage Last" alt = ' . $menuCategories[i][2] . ' style = "background-image: url(' . $menuCategories[i][2] . '); background-size: 100% 100%;">' . $menuCategories[0] . '</div>';
	}
}
?>
