<?php 
require_once('logics/dbconnection.php');
$sqlDeleteStudent = mysqli_query($conn, "DELETE FROM enrollment WHERE no='".$_GET['id']."' ");
if($sqlDeleteStudent)
{
    echo "User record deleted";
    header('location:student.php');
}
else
{
    echo "Error occured";
}
?>