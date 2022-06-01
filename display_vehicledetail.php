<?php
require 'config.php';

$sql="SELECT*FROM vehicle_booking";

$result = mysqli_query ($conn,$sql);

if (result-> num_rows > 0){
  while ($row = $result-> fetch_assoc()){
    echo "<b>Customer details : </b> <br> 
    Customer Name : ".$_row['name']."<br>
    Customer Email : ".$row['email']."<br>
    Customer phone number : ".$row['phone']."<br>
    Customer Address : ".$row['address']."
    <br><br>

    <b>Vehicle Details : </b><br>
    Vehicle Type : ".$row['vehicle_type']."<br>
    Air Condition : ".$row['air_condition']."<br>
    Starting Date : ".$row['starting_date']."<br>
    End Date : ".$row['end_date']."<br><br>";
  }
}
else {
    echo"this this empty";
}


?>
