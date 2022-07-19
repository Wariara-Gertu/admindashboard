<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "zalego";


$conn = mysqli_connect($server,$username,$password,$database);

if(isset($_POST['submitbutton']))
{

    $fullname = $_POST['fullname'];
    $phonemuber = $_POST['phonemuber'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];

    $insertdata = mysqli_query($conn, "INSERT INTO 
    enrollment(fullname,phonemuber,email,gender,course)
    VALUES('$fullname','$phonemuber','$email','$gender','$course')");
    if($insertdata)
    {
        echo "Data Submitted Successfully";
    }
    else
    {
         
        
        echo "Error Occured".mysqli_error($conn);
    }
}

?>




<!DOCTYPE html>   
<html>
     <?php require_once('includes/headers.php')?>

    <body>
        
   
    <?php require_once('includes/navbar.php')?>

    
	<div class="sidebar">
	    <?php require_once('includes/sidebar.php')?>

	</div>

    <div class="main-content">
        <div class="container-fluid">

   
    
     <div class="container shadow p-2 mb-5 bg-body rounded">
        <form action="add-enrollment.php" method="POST">
        <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <h4>Student Enrollment</h4>
                            
                        </div>

 
        
        <div class="row p-2">
                    <div class="mb-3 col-lg-6">
                        <label for="fullname" class="form-label">Full Name</label>
                        <input type="text"  name = "fullname" class="form-control" placeholder="Enter Your Full Name">
                    </div>
                    <div class="mb-3 col-lg-6">
                       <label for="phonemuber" class="form-label">Phone Number</label>
                       <input type="text" name="phonemuber" class="form-control" placeholder="enter phonenumber">
                   </div>
                </div>

                <div class="row p-2">
                <div class="mb-3 col-lg-6">
                       <label for="email" class="form-label">Email</label>
                       <input type="email" name="email"  class="form-control" placeholder="Enter Your Email">
                    </div>
                     <div class="mb-3 col-lg-6">
                        <label for="gender" name="gender" class="form-label">What's your gender?</label>
                        <select class="form-control" name="gender">
                        <option selected>--select your gender--</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="nonbinary">Non-binary</option>
                        </select>
                    </div>
                </div>

        
        
        <div class="row p-2">
            <div class="mb-3 col-lg-6">
                        <label for="course" name="course" class="form-label">What's your Preference?</label>
                        <select  class="form-control" name="course" >
                        <option selected>--select your course--</option>    
                            <option value="webdesign">Web design</option>
                            <option value="cybersecurity">Cyber Security</option>
                            <option value="datascience">Data science</option>
                        </select>
                        
                        
            </div>
        </div>





        <div>
            <button type="submit"  name = "submitbutton" class="btn btn-primary">submit application</button>
        </div>
 </form>
 

 </div>
    </div>      
    








    <?php require_once('includes/scripts.php')?>
    <body>
        
    
    </html>