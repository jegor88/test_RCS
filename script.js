// Script for changing Types dinamically.

$("#weight").css("display","none");
$("#dimension").css("display","none");

$("#switcher").on("change", function() {
    switch($("#switcher option:selected").val()) {
        case 'dvd':
            $("#size").css("display","");
            $("#weight").css("display","none");
            $("#dimension").css("display","none");
            $(".error").css("display","none");
            break;
        case 'book':
            $("#size").css("display","none");
            $("#weight").css("display","");
            $("#dimension").css("display","none");
            $(".error").css("display","none");
            break;
        case 'table':
            $("#size").css("display","none");
            $("#weight").css("display","none");
            $("#dimension").css("display","");
            $(".error").css("display","none");
            break;
    }
    
});