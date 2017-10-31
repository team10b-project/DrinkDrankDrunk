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
