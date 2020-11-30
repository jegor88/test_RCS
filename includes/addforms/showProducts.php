<?php 

/* 
Script connects with DB and add units on main page.
*/

include 'includes/config.php';

class showUnit {   
   
    public $query;
    public $row;
    public $sections;
    public $sql;

    public function select($dasd) {   
    $this->query = mysqli_query($dasd, $this->sql);

    $this->sections = array();             
    while ($this->row = mysqli_fetch_assoc($this->query)) {
            $this->sections[] = $this->row;               
    }
         return $this->sections;
    }    
}
