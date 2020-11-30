$('.btn_delete').on('click', function() {  
    
    // Checking checkboxes, if checked - hiding closes class. For hiding units on user page.
    
     var checkbox =  $("input:checked");
     checkbox.each( function () {
         if ( $(this).checkbox = true) {
             $(this).closest(".unit").fadeOut(400)
         }
     })
 });
