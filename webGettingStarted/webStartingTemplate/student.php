<?php
		$server = "localhost";
		$username = "root";
		$password = "";
		$database = "zalego";

		$conn=mysqli_connect($server,$username,$password,$database);
		$sqlQuery = mysqli_query($conn, "SELECT * FROM enrollment");
		

?> 









<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Admin Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Creating admin dashboard">
	<meta name="keywords" content="HTML,CSS,Zalego,Technology,Zalego institute,JavaScript">
	<meta name="author" content="Wariara Kinuthia">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<!-- All our code. write here   -->
	<div class="header">
		<img src="zalego.jpg" alt="Zalego" height="50" width="50" class="rounded-circle">
		<a href="#" class="navabar-trigger"><span></span></a>

	</div>
	<div class="sidebar">
		<nav>
			<ul>
				<li>
					<a href="student.php">
						<span>  <i class="fa fa-group"></i></span>
						<span>Students</span>
					</a>
				</li>
				<li>
					<a href="student.php">
						<span>  <i class="fa fa-folder-open"></i></span>
						<span>Courses</span>
					</a>
				</li>
				<li>
					<a href="student.php">
						<span>  <i class="fa fa-graduation-cap"></i></span>
						<span>Campus</span>
					</a>
				</li>
			</ul>
		</nav>
	</div>

	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<div class="card-header bg-dark text-white text-center">
						<span>Students</span>
					</div>
					<div class="card-body">
						<table class="table table-striped table-hover table-responsive">
							<thead>
								<tr>
									<th>No.</th>
									<th>Full Name</th>
									<th>Phone Number</th>
									<th>Email</th>
									<th>Gender</th>
									<th>Course</th>
									<th>Enrolled On</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								while($fetchrecords = mysqli_fetch_array($sqlQuery)) { ?>
								<tr>
									<td><?php  echo $fetchrecords['no']?></td>
									<td><?php  echo $fetchrecords['fullname']?></td>
									<td><?php  echo $fetchrecords['phonemuber']?></td>
									<td><?php  echo $fetchrecords['email']?></td>
									<td><?php  echo $fetchrecords['gender']?></td>
									<td><?php  echo $fetchrecords['course']?></td>
									<td><?php  echo $fetchrecords['created_at']?></td>
									<td>
										<a href="">Edit</a>
										<a href="">View</a>
										<a href="">Delete</a>
									</td>
								</tr>


								<?php }?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		
	


</div>
</div>
	
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>