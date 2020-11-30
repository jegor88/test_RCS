<?php

abstract class GetInfo {
    
        public $errors;
 
        public function checkSku() {
            if($_POST['SKU'] == '') {
                $this->errors[] =  "<span class='error'>". "Plese input SKU number." ."</span>";    
                        }
        }
        
        public function checkName() {
            if($_POST['Name'] == '') {
               $this->errors[] = "<span class='error'>". "Plese input product name." .'</span>';            
                        }
        }
    
        public function checkPrice() {
            if($_POST['Price'] == '' || $_POST['Price'] != is_numeric($_POST['Price']) || $_POST['Price'] < 0) {
                $this->errors[] = "<span class='error'>". "Plese input product price." .'</span>';        
                        }
        }

        public function checkWeight() {
            if($_POST['Weight'] == '' || $_POST['Weight'] != is_numeric($_POST['Weight']) || $_POST['Weight'] < 0) {
                $this->errors[] = "<span class='error'>". "Plese input product weight." .'</span>';  
                        }
        }

        public function checkSize() {
        if($_POST['Size'] == '' || $_POST['Size'] != is_numeric($_POST['Size']) || $_POST['Size'] < 0) {
            $this->errors[] = "<span class='error'>". "Plese input product size." .'</span>';           
                        }
        }

        public function checkLenght() {
            if($_POST['Lenght'] == '' || $_POST['Lenght'] != is_numeric($_POST['Lenght']) || $_POST['Lenght'] < 0) {
                $this->errors[] = "<span class='error'>". "Plese input product lenght." .'</span>';            
                        }
        }

        public function checkHeight() {
            if($_POST['Height'] == '' || $_POST['Height'] != is_numeric($_POST['Height']) || $_POST['Height'] < 0) {
                $this->errors[] = "<span class='error'>". "Plese input product height." .'</span>';        
                        }
        }

        public function checkWidth() {
            if($_POST['Width'] == '' || $_POST['Width'] != is_numeric($_POST['Width']) || $_POST['Width'] < 0) {
                $this->errors[] = "<span class='error'>". "Plese input product width." .'</span>';            
                        }
        }
   
        public function checkOverall() {
            $this->checkSku();
            $this->checkName();
            $this->checkPrice();
        }

        public function checkDvd() {
            $this->checkOverall();
            $this->checkSize(); 
        }

        public function checkBook() {
            $this->checkOverall();
            $this->checkWeight();
        }

        public function checkTable() {
            $this->checkOverall();
            $this->checkLenght();
            $this->checkHeight();
            $this->checkWidth(); 
        }
        
        abstract function addUnit();
    
    }


class Book extends GetInfo {
    
        public function addUnit() {
            
             $sql = "INSERT INTO `prod_book` (`book_id`, `SKU`, `Name`, `Price`, `Weight`) VALUES (NULL, '".$_POST['SKU']."', '".$_POST['Name']."', '".$_POST['Price']."', '".$_POST['Weight']."');";  
            
            include 'includes/config.php';
                if(isset($_POST['post_it'])){
                    $this->checkBook();
                if(empty($this->errors)) {  
                    $db->query($sql);     
                    echo '<span style=" color:green; display: block; margin-bottom: 5px;">'."Product was added succesfully".'</span>';    
                } else {
                    echo implode("", $this->errors) ;
                }
            }  
        }
}
     

class DVD extends GetInfo {

         public function addUnit() {
            
            $sql = "INSERT INTO `prod_dvd` (`dvd_id`, `category`, `SKU`, `Name`, `Price`, `Size`) VALUES (NULL, '1', '".$_POST['SKU']."', '".$_POST['Name']."', '".$_POST['Price']."', '".$_POST['Size']."');";
            
            include 'includes/config.php';
                if(isset($_POST['post_it'])){
                    $this->checkDVD(); 
                if(empty($this->errors)) {  
                    $db->query($sql);     
                    echo '<span style=" color:green; display: block; margin-bottom: 5px;">'."Product was added succesfully".'</span>';    
                } else {
                    echo implode("", $this->errors) ;
                }
            }         
        }
    }
    
class Table extends GetInfo {
    
        public function addUnit() {
               
            $sql = "INSERT INTO `prod_furn` (`tbl_id`, `SKU`, `Name`, `Price`, `Height`, `Width`, `Lenght`) VALUES (NULL, '".$_POST['SKU']."', '".$_POST['Name']."', '".$_POST['Price']."', '".$_POST['Height']."', '".$_POST['Width']."', '".$_POST['Lenght']."');";
            
            include 'includes/config.php';
                if(isset($_POST['post_it'])){
                    $this->checkTable(); 
                if(empty($this->errors)) {   
                    $db->query($sql);     
                    echo '<span style=" color:green; display: block; margin-bottom: 5px; ">'."Product was added succesfully".'</span>';    
                } else {
                    echo implode("", $this->errors) ;
                } 
            }         
        
        } 
    
 }

class TypeSwitcher {
    
   public function switchType() {
            switch($_POST['type_switcher']){
                case 'dvd':
                    $obj_dvd = new DVD;
                    $obj_dvd->addUnit();
                    break;
                case 'book':
                    $obj_book = new Book;
                    $obj_book->addUnit();
                    break;
                case 'table':
                    $obj_tbl = new Table;
                    $obj_tbl->addUnit();
                    break;
                }
      }   
}


    
    
    
    
