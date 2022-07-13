<?php  
//databse connection
require_once('logics/dbconnection.php');
$sqlfecthstudent = mysqli_query($conn,
 "SELECT * FROM enrollment WHERE no='".$_GET['id']."'  ");
 while($fetchstudentrecords = mysqli_fetch_array($sqlfecthstudent))
 {
    $fullname = $fetchstudentrecords['fullname'];
    $phone = $fetchstudentrecords['phonemuber'];
    $email =$fetchstudentrecords['email'];
    $gender = $fetchstudentrecords['gender'];
    $course = $fetchstudentrecords['course'];
    $createdat = $fetchstudentrecords['created_at'];
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
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header bg-dark text-white text-center">
                        <h4 class="card-title">Personal Information</h4>
                    </div>
                    <div class="card-body">
                       <ul class="list-group">
                            <li class="list-group-item">Full Name: <span class="float-right badge badge-primary"><?php echo $fullname?></span></li>
                            <li class="list-group-item">Email: <span class="float-right  badge badge-secondary"><?php echo $email?></span> </li>
                            <li class="list-group-item">Phone Number:<span class="float-right badge badge-danger"><?php echo $phone?></span> </li>
                        
                       </ul> 

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header bg-dark text-white text-center">
                        <h4 class="card-title">Other Information</h4>
                    </div>
                    <div class="card-body">
                       <ul class="list-group">
                            <li class="list-group-item">Gender: <span class="float-right badge badge-primary"><?php echo $gender?></span></li>
                            <li class="list-group-item">Course: <span class="float-right  badge badge-secondary"><?php echo $course?></span> </li>
                            <li class="list-group-item">Enrolled On:<span class="float-right badge badge-danger"><?php echo $createdat?></span> </li>
                        
                       </ul> 

                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
<?php require_once('includes/scripts.php')?>


</body>
</html>