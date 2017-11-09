$(document).ready(function(){
    $("#MenuTitle").click(function(){
        $("#Menu").slideDown("slow");
    });
});

$(document).ready(function(){
    $(".MenuItem").click(function(){
        $("#Menu").slideUp("slow");
    });
});

$(document).ready(function(){
    $("#Menu").mouseleave(function(){
        $("#Menu").slideUp("slow");
    });
});

function getMenu(restaurantId){
    $.get(  "http://localhost/DrinkDrankDrunk.com/php/menu.php",
            {"Restaurant ID" : restaurantId},
            function(data){
                $("#ContentPane").empty();
                $("#ContentPane").append(data);
    });
}

function getMenuCategory(menuCategoryId){
    $.get(  "http://localhost/DrinkDrankDrunk.com/php/menuCategory.php",
            {"Menu Category ID" : menuCategoryId},
            function(data){
                $("#ContentPane").empty();
                $("#ContentPane").append(data);
    });
}

function getItem(itemId){
    $.get(  "http://localhost/DrinkDrankDrunk.com/php/item.php",
            {"Item ID" : itemId},
            function(data){
                $("#ContentPane").empty();
                $("#ContentPane").append(data);
    });
}

function getRestaurants(){
    $.get(  "http://localhost/DrinkDrankDrunk.com/php/restaurants.php",
            {},
            function(data){
                $("#ContentPane").empty();
                $("#ContentPane").append(data);
    });
}