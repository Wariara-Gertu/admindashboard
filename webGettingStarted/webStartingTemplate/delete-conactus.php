<?php 
require_once('contact/connection.php');
$sqlDeletecontact = mysqli_query($conn, "DELETE FROM contactus WHERE no='".$_GET['id']."' ");
if($sqlDeletecontact)
{
    echo "User record deleted";
    header('location:contactus.php');
}
else
{
    echo "Error occured";
}
?>