<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/styles.css">        
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <title>Test page for Scandiweb</title>
    </head>
    <body>
    
<!-- Coneection to database -->
    <?php include 'includes/config.php'; ?> 
    
    
<!-- Header -->  
        <div class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <a href="index.php"><img src="img/logo.png" class="img_logo" alt="Scandiweb logo"></a>
                </div>              
            </div>
        </div>   
         
<!-- Book adding form (contains script for adding, input fields, hints and buttons) -->
        <div class="container main col-md-3 col-xs-12 col-sm-10">
        <form role="form" class="form container-flex" method="POST">
                    
<!-- Script for unit adding-->
        <?php include 'includes/addforms/getProduct.php'; 
            ?> 
 
<!-- Input fields, hints -->
            <div class="form-group">
                <label for="sku">SKU:</label>
                <div class="form-group"> 
                    <input type="text" name="SKU" class="form-control input-field" placeholder="Type SKU number here" >
                    <p class="help-block">Product should have his unique SKU (stock-keeping unit) number. May contains letters and numbers. </p>
                </div> 
            </div> 
            <div class="form-group">
                <label for="name">Name:</label>
                <div class="form-group">
                    <input type="text" name="Name" class="form-control input-field" placeholder="Type product name here">
                    <p class="help-block">Name may contains numbers or letters. </p>
                </div>     
            </div> 
            <div class="form-group">
                <label for="price">Price:</label>
                <div class="form-group">
                    <input type="text" name="Price" class="form-control input-field" placeholder="Type product price here">
                    <p class="help-block">Price should be positive (bigger than 0). Price should be in US dollars</p>
                 </div>    
            </div>
                    
<!-- Type switcher -->
            <div class="form-group">
                <label for="type-switcher">Type switcher</label>
                <div class="form-group">
       
                    <select id="switcher" name="type_switcher" class="col-md-4">
                        <option value="dvd" name="dvd" class="type_dvd">DVD</option>
                        <option value="book" name="book" class="type_book">Book</option>
                        <option value="table"  name="table" class="type_tv">Table</option>
                        
                    </select> 
                    
                
                </div>
            </div>

<!-- Input fields, hints -->
                   
            
            <div class='form-group' id="size">                         
                        <label for='size'>Size:</label>   
                            <div>
                                <input type='text' name='Size' class='form-control input-field' placeholder='Type product size here'>
                                <p class='help-block'>Unit size should be provided in MB (Megabytes)</p>
                            </div>    
                     </div>
            
            <div class='form-group' id="weight">                         
                        <label for='size'>Weight:</label>   
                            <div class='form-group'>
                                <input type='text' name='Weight' class='form-control input-field' placeholder='Type product weight here'>
                                <p class='help-block'>Product weight must be provided in KG (kilogramms)</p>
                            </div>    
                     </div>
            
            <div id="dimension">
                
                
                <div class='form-group' >                         
                        <label for='size'>Height:</label>   
                            <div class='form-group'>
                                <input type='text' name='Height' class='form-control input-field' placeholder='Type product height here'>
                                <p class='help-block'>Height must be provided in cm.</p>
                            </div>    
                    </div>    
                        <div class='form-group'>                         
                            <label for='size'>Width:</label>   
                                <div class='form-group'>
                                    <input type='text' name='Width' class='form-control input-field' placeholder='Type product width here'>
                                    <p class='help-block'>Width must be provided in cm.</p>
                                </div>    
                        </div>
                    <div class='form-group'>                         
                        <label for='size'>Lenght:</label>   
                            <div class='form-group'>
                                <input type='text' name='Lenght' class='form-control input-field' placeholder='Type product lenght here'>
                                <p class='help-block'>Lenght must be provided in cm.</p>
                            </div>    
                    </div>
            </div>
            
            <?php 
                $type = new TypeSwitcher;
                $type->switchType();
            ?>        

<!-- Buttons  --> 
            <div class="btn-group col-md-12">
                <input type="submit" name="post_it" value="Save" class="btn btn-success input-field btn-ok">
                <input type="reset" value="Delete" class="btn btn-danger input-field">
            </div> 
            
          
        </form>
        

      </div>
    <script src="script.js">
    </script>
    </body>
</html>