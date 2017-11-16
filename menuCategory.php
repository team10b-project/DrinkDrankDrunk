
<?php

$dbc = mysqli_connect('localhost','root','','drinkdrankdrunk')
or die('Error connecting to MySQL server.');
$query = 'SELECT * FROM menu_items WHERE menucat_id = "'.$_GET['menuCategoryId'].'"';
$result = mysqli_query($dbc, $query) or die('Error querying database.');
mysqli_close($dbc);


$items = mysqli_fetch_all($results);
echo $items;

echo 	'<div id = "Menu" class = "Menu">
			<div id = "Restaurants" class = "MenuItem" onclick = "getRestaurants();">Restaurants</div>
			<div class = "MenuItem">Login</div>
			<div class = "MenuItem"></div>
		</div>';
for($i = 0; $i < count($items); $i++){
	if($i % 3 == 0){
		echo	'<div onclick = "getItem(' . $items[i][0] . ');" class = "CatalogImage First" alt = ' . $items[i][3]. ' style = "background-image: url(' . $items[i][3] . '); background-size: 100% 100%;">' . $items[0] . '</div>';
	}
	elseif($i % 3 == 1){
		echo	'<div onclick = "getItem(' . $items[i][0] . ');" class = "CatalogImage" alt = ' . $items[i][3] . ' style = "background-image: url(' . $items[i][3] . '); background-size: 100% 100%;">' . $items[0] . '</div>';
	}
	elseif($i % 3 == 2){
		echo	'<div onclick = "getItem(' . $items[i][0] . ');" class = "CatalogImage Last" alt = ' . $items[i][3] . ' style = "background-image: url(' . $items[i][3] . '); background-size: 100% 100%;">' . $items[0] . '</div>';
	}
}
?>
