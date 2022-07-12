<?php 
require_once('logics/dbconnection.php');
// count all enrolled students
$queryAllStudents = mysqli_query($conn, "SELECT * FROM enrollment");
$countallStudents = mysqli_num_rows($queryAllStudents);

//count by gender
$queryAllFemale = mysqli_query($conn,"SELECT * FROM enrollment WHERE gender='Female'" );
$countallFemale = mysqli_num_rows($queryAllFemale);
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
				<div class="col-sm-12">
					<div class="card-header bg-dark text-white text-center">
						<span>Top content</span>
					</div>
				</div>
	</div>
		
	

	<div class="row">

		<div class="col-lg-3">
			<div class="card-header bg-dark text-white text-center">
				<span>Student</span>
			</div>
			<div class="card-body">
			<span><i class="fa fa-group fa-3x"></i></span>
			<span class="float-right badge badge-dark"><?php echo $countallStudents ?></span>
		</div>
			<div class="card-footer"></div>
		</div>

		<div class="col-lg-3">
			<div class="card-header bg-dark text-white text-center">
				<span>Available Courses</span>
			</div>
			<div class="card-body">
				<span><i class="fa fa-folder-open fa-3x"></i></span>
			<span class="float-right"><?php echo $countallFemale ?></span>
			</div>
			<div class="card-footer"></div>
		</div>

		<div class="col-lg-3">
			<div class="card-header bg-dark text-white text-center">
				<span> Campuses</span>
			</div>
			<div class="card-body">
			<span><i class="fa fa-graduation-cap fa-3x"></i></span>
			<span class="float-right">00</span>
			</div>
			<div class="card-footer"></div>
		</div>

		<div class="col-lg-3">
			<div class="card-header bg-dark text-white text-center">
				<span>Users</span>
			</div>
			<div class="card-body">
			<span><i class="fa fa-user fa-3x"></i></span>
			<span class="float-right">00</span>
			</div>
			<div class="card-footer"></div>
		</div>

		<div class="col-lg-12">
			<div class="card-header bg-dark text-white text-center">
				<span>Student Analysis</span>
			</div>
			
		</div>

	</div>
	
</div>
</div>
<?php require_once('includes/scripts.php')?>


</body>
</html>