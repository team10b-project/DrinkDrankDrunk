
<?php

$dbc = mysqli_connect('localhost','root','','drinkdrankdrunk')
or die('Error connecting to MySQL server.');
$query = 'SELECT * FROM menu_items WHERE menuitem_id = "'.$_GET['itemId'].'"';
$result = mysqli_query($dbc, $query) or die('Error querying database.');
mysqli_close($dbc);


$item = mysqli_fetch_all($results);
echo $item;

echo 	'<div id = "Menu" class = "Menu">
			<div id = "Restaurants" class = "MenuItem" onclick = "getRestaurants();">Restaurants</div>
			<div class = "MenuItem">Login</div>
			<div class = "MenuItem"></div>
		</div>
		<div class = "ItemImage First" alt = ' . $item[0] . ' style = "background-image: url(' . $item[0] . '); background-size: 100% 100%;">' . $item[0] . '</div>
		<div class = "ItemIngredientsContainer">
			<table style = "width: 100%">
				<caption class = "IngredientsTitle">Ingredients</caption>
				<tr>
					<td class = "Ingredient">XXXXXXXX</td>
					<td class = "Ingredient">XXXXXXXX</td>
				</tr>
			</table>
		</div>';
?>
