<?php

/* 
MASS DELETE ACTION BUTTTON. 
Checking every checkbox (empty or not), and deleting it if neccessary.
Each unit (DVD, Book, Table) has his own id name (book_id, tbl_id, dvd_id).
*/


$checkbox = $_POST['checkbox'];
$book = "DELETE FROM `prod_book` WHERE `book_id` =  ";
$table = "DELETE FROM `prod_furn` WHERE `tbl_id` =  ";
$dvd = "DELETE FROM `prod_dvd` WHERE `dvd_id` =  ";

if(empty(!$checkbox))
    {
        foreach($checkbox as $book_id)
            {
                $db->query("$book" . $book_id); 
            }
    }

if(empty(!$checkbox))
    {
        foreach($checkbox as $tbl_id)
            {
                $db->query("$table" . $tbl_id); 
            }
    }

if(empty(!$checkbox))
    {
        foreach($checkbox as $dvd_id)
            {
                $db->query("$dvd" . $dvd_id); 
            }
    }




