<?php

//connect.php
$server = 'localhost';
$username   = 'root';
$password   = 'baseball12';
$database   = 'php_db';
// 
if(!mysql_connect($server, $username,  $password))
{
    exit('Error: could not establish database connection');
}
if(!mysql_select_db($database))
{
    exit('Error: could not select the database');
}

?>