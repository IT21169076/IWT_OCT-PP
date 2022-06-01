<?php
$servername = "vehicle_booking";
$username="root";
$password="con@34#!";
$dbname="vehicle_db";

//Create connection

$conn = new mysqli($servername, $username, $password, $dbname);


//Check connection 

if (!$conn)
{
    die(mysqli_error($conn));
}
?>  
