<?php
// database connection code

// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','test','3307');
if(!$con){
    die('Could not Connect MySql Server:' .mysql_error());
}

$sql = "SELECT * FROM products";
$result = $con->query($sql);
?>