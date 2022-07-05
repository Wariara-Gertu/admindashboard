<?php
		require_once('logics/dbconnection.php');
		$sqlQuery = mysqli_query($conn, "SELECT * FROM enrollment");
		

?> 









<!DOCTYPE html>
<html>
<?php require_once('includes/headers.php') ?>


<body>
	<!-- All our code. write here   -->
	<?php require_once('includes/navbar.php') ?>


	<div class="sidebar">
	<?php require_once('includes/sidebar.php') ?>
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
	
<?php require_once('includes/scripts.php') ?>
</body>
</html>