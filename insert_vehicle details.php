<?php
require 'config.php';



if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $vehicle_type = $_POST['type'];
    $condition = $_POST['condition'];
    $staff = $_POST['staff'];
    $starting_date = $_POST['sdate'];
    $end_date = $_POST['edate'];

    $sql ="INSERT INTO vehicle_booking VALUES ('$name','$phone','$email','$address','$vehicle_type','$condition','$starting_date','$end_date') ";
  
    $result = mysqli_query($conn,$sql);
}
