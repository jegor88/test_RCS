<?php

/* 
Connecting to server.
*/

$db = new mysqli('localhost', 'root', 'root', 'first_db');

if($db == false)
{
echo 'Impossible to connetc Database!<br>';
echo mysqli_connect_errno();
exit();
}