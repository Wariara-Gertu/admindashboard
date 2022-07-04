<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "zalego";

$conn=mysqli_connect($server,$username,$password,$database);
$sqlQuery = mysqli_query($conn, "SELECT * FROM enrollment");
$fetchrecords = mysqli_fetch_array($sqlQuery);
//echo $fetchrecords['fullname'];
//echo  $fetchrecords['phonemuber'];
//echo $fetchrecords['email'];
while ($fetchrecords = mysqli_fetch_array($sqlQuery)) {
    # code
    echo $fetchrecords['fullname'].' '. $fetchrecords['phonemuber'].' '.  $fetchrecords['email'].'<br>';
}







?>