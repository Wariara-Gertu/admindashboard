<?php
require_once('logics/dbconnection.php');
$queryuser= mysqli_query($conn, "SELECT * FROM enrollment WHERE no='".$_GET['id']."'  ");

while($fetchuser = mysqli_fetch_array($queryuser))
{
    $fullname = $fetchuser['fullname'];
    $phonemuber = $fetchuser['phonemuber'];
    $email = $fetchuser['email'];
    $gender = $fetchuser['gender'];
    $course = $fetchuser['course'];
}

?>


                                                                                                                         


<!DOCTYPE html>
<html>
	<?php require_once('includes/headers.php')?>


<body>
	<!-- All our code. write here   -->
	<?php require_once('includes/navbar.php')?>


	<div class="sidebar">
	    <?php require_once('includes/sidebar.php')?>

	</div>

	<div class="main-content">
      
		<div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <h4>Edit Student: <?php echo $fullname?></h4>
                        </div>



                        <div class="card-body">

                        <!-- add form code here-->
                        <form action="enroll.php" method="POST">
                      
                        
                      <div class="row">
                       <div class="mb-3 col-lg-6">
                        <label for="fullname" class="form-label">Full Name</label>
                        <input type="text"  name = "fullname" value=<?php echo $fullname?> class="form-control" placeholder="Enter Your Full Name">
                    </div>
                    <div class="mb-3 col-lg-6">
                       <label for="phonemuber" class="form-label">Phone Number</label>
                       <input type="text" name="phonemuber"  value=<?php echo $phonemuber?> class="form-control" placeholder="enter phonenumber">
                   </div>
                </div>

                <div class="row">
                <div class="mb-3 col-lg-6">
                       <label for="email" class="form-label">Email</label>
                       <input type="email" name="email"  value=<?php echo $email?> class="form-control" placeholder="Enter Your Email">
                   </div>
                    <div class="mb-3 col-lg-6">
                        <label for="gender" name="gender" class="form-label">Gender:</label>
                        <select name="gender"  class="form-control" >
                        <option selected> <?php echo $gender?> </option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="nonbinary">Non-binary</option>
                        </select>
                        
                       
                </div>
                </div>
        <div class="row">
            <div class="mb-3 col-lg-6">
                        <label for="course" name="course" class="form-label">Course:</label>
                        <select  name="course" class="form-control"   >
                        <option selected>--select your course--</option>    
                            <option value="webdesign">Web design</option>
                            <option value="cybersecurity">Cyber Security</option>
                            <option value="datascience">Data science</option>
                        </select>
                        
                        
            </div>
        </div>






<button type="submit"  name = "submitbutton" class="btn btn-outline-primary">Update Record</button>
 </div>
 </form>


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php require_once('includes/scripts.php')?>


</body>
</html>