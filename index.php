<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/styles.css">        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        
        
        <title>Test page for Scandiweb</title>
    </head>
    <body>
         <form method="post"> 
                  
<!-- Coneection to database -->
        <?php include 'includes/config.php'; ?>
        
<!-- Header -->
        <div class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                   <div class="header">
                    <img src="img/logo.png" class="img_logo" alt="Scandiweb logo">
                       <br>
                        <a href="addproductform.php"><div class="btn_add">Add products</div></a>
                        <div class="btn_delete">Delete products</div>
                        <input type="submit" name="submit" class="btn_del_db" value="Delete from DB" />
                    </div>
                </div>
            </div>
        </div> 

<!-- Main Container -->
        <div class="col-md-10 col-xs-12 content">

<!-- Script for mass deleting from database -->
        <?php include 'includes/addforms/checkbox_delete.php'; ?>         

<!-- DVD units "shelf" -->                                                        
            <div class="dvd">
                <div class="row">
<!-- Dvd unit adding script --> 
                    <?php 
                    
                    require_once ('includes/addforms/showProducts.php'); 
                                           
                        $sections = new showUnit;     /* присвоил класс к переменной */
                        $sections->sql = "SELECT * FROM `prod_dvd`";
                        $sections->select($db);     /* вывел результат функции в классе */
                        $sections_list = $sections->select($db);

                        foreach($sections_list as $section_list){                /* выводим цикл foreach */
                            echo '<div class="dvd_unit unit col-xs-12 col-ms-6 col-md-4 col-lg-2">';
                            echo '<div class="checkbox">';
                            echo '<input type="checkbox" id="del" name="checkbox[]" value=' . $section_list['dvd_id'] . '>';
                            echo '</div>';
                            echo '<div class="dvd_unit_info">' . $section_list['SKU'] . '</div>';
                            echo '<div class="dvd_unit_info">' . $section_list['Name'] . '</div>';
                            echo '<div class="dvd_unit_info">' . $section_list['Price'] . ' &#36;</div>';
                            echo '<div class="dvd_unit_info"> Size: ' . $section_list['Size'] . ' MB</div>';
                            echo '</div> ';
                        }
                    
                      ?>
                </div>
            </div>
            
<!-- Book units "shelf" -->              
            <div class="books"> 
                <div class="row">   
<!-- Book unit adding script --> 
                   <?php 
                    
                    require_once ('includes/addforms/showProducts.php'); 
                    
                        $sections = new showUnit;     /* присвоил класс к переменной */
                        $sections->sql = "SELECT * FROM `prod_book`";
                        $sections->select($db);     /* вывел результат функции в классе */
                        $sections_list = $sections->select($db);

                        foreach($sections_list as $section_list){                /* выводим цикл foreach */
                            echo '<div class="books_unit unit col-xs-12 col-ms-6 col-md-4 col-lg-2">';
                            echo '<div class="checkbox">';
                            echo '<input type="checkbox" id="del" name="checkbox[]" value=' . $section_list['book_id'] . '>';
                            echo '</div>';
                            echo '<div class="books_unit_info">' . $section_list['SKU'] . '</div>';
                            echo '<div class="books_unit_info">' . $section_list['Name'] . '</div>';
                            echo '<div class="books_unit_info">' . $section_list['Price'] . ' &#36;</div>';
                            echo '<div class="books_unit_info"> Weight: ' . $section_list['Weight'] . ' kg</div>';
                            echo '</div> ';
                        }

                    ?>
                </div>
            </div>
            
<!-- Table units "shelf" -->             
            <div class="tables">
                <div class="row"> 
<!-- Table unit adding script --> 
                   <?php 
                    
                    require_once ('includes/addforms/showProducts.php'); 
                    
                        $sections = new showUnit;     /* присвоил класс к переменной */
                        $sections->sql = "SELECT * FROM `prod_furn`";
                        $sections->select($db);     /* вывел результат функции в классе */
                        $sections_list = $sections->select($db);

                        foreach($sections_list as $section_list){                /* выводим цикл foreach */
                            echo '<div class="tables_unit unit col-xs-12 col-ms-6 col-md-4 col-lg-2">';
                            echo '<div class="checkbox">';
                            echo '<input type="checkbox" id="del" name="checkbox[]" value=' . $section_list['tbl_id'] . '>';
                            echo '</div>';
                            echo '<div class="tables_unit_info">' . $section_list['SKU'] . '</div>';
                            echo '<div class="tables_unit_info">' . $section_list['Name'] . '</div>';
                            echo '<div class="tables_unit_info">' . $section_list['Price'] . ' &#36;</div>';
                            echo '<div class="tables_unit_info"> Dimension: ' . $section_list['Height'] .'x' . $section_list['Width'] . 'x' . $section_list['Lenght'] .' cm</div>';
                            echo '</div> ';
                        }

                    ?>
                </div>
            </div>
        </div>
        
<!-- Sript for deleting units from user interface -->     
<script src="deleteBtn.js"></script>
      
       </form>
   </body>
</html>






