<?php 
//create connection to my database in phpMyAdmin
$connect = new mysqli('localhost', 'root', '', 'holywud');

/*
if my '$connect' failed +
post an error.
*/
if(!$connect) {
    die(mysqli_error($connect));
} 
?>