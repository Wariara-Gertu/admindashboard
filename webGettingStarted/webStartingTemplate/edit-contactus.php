<?php
$message = "";
require_once('contact/connection.php');
$querycontact= mysqli_query($conn, "SELECT * FROM contactus WHERE no='".$_GET['id']."'  ");

while($fetchuser = mysqli_fetch_array($querycontact))
{
    $id = $fetchuser['no'];
    $firstname = $fetchuser['firstname'];
    $lastname = $fetchuser['lastname'];
    $phonenumber = $fetchuser['phonenumber'];
    $email = $fetchuser['email'];
    $message = $fetchuser['message'];
   
}



//update user records
if(isset($_POST['updatecontactus']))
{
    // fetch from data
    
    $name1 = $_POST['firstname'];
    $name2 = $_POST['lastname'];
    $phone = $_POST['phonenumber'];
    $emailaddress = $_POST['email'];
    $text = $_POST['message'];
    

    //update records
    $updatecontactus = mysqli_query($conn, "UPDATE contactus SET firstname='$name1', lastname='$name2', 
    phonenumber='$phone', email = '$emailaddress', message='$text', createdat='$create'
    WHERE no='".$_GET['id']."' ");

    if($updatecontactus)
    {
      $message = "Data updated";
    }
    else
    {
     $message = "Error occured";                                                
    }
    
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
                            <h4>Edit Student: <?php echo $firstname?></h4>
                            <span><?php  echo $message ?></span>
                        </div>



                 <div class="card-body">

                        <!-- add form code here-->
                

                        <form action="edit-contactus.php?id=<?php echo $id ?>" method="POST">
                <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="firtsname" class="form-label">First Name</label>
                        <input type="text"  name="firstname"  value=<?php echo $firstname?> class="form-control" placeholder="Enter Your First Name">
                    </div>
                    <div class="mb-3 col-lg-6">
                       <label for="lastname" class="form-label">Last Name</label>
                       <input type="text" name="lastname"  value=<?php echo $lastname?> class="form-control" placeholder="Enter Your Last Name">
                   </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="phonenumber" class="form-label">Phone Number</label>
                        <input type="text"  name="phonenumber"  value=<?php echo $phonenumber?> class="form-control" placeholder="Enter Your Phone Number">
                    </div>
                    <div class="mb-3 col-lg-6">
                       <label for="email" class="form-label">Email</label>
                       <input type="email" name="email"  value=<?php echo $email?>  class="form-control" placeholder="Enter Your Email">
                   </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-lg-12">
                        <label for="message" class="Your Message">Your Message</label>        
                        <textarea cols="30"  name="message"  value=<?php echo $message?> rows="5" class="form-control" ></textarea>
                    </div>
                </div>
                

                </form>     
                <button type="submit"  name = "updatecontactus" class="btn btn-outline-primary">Update Records</button>
            </div>
 


                        </div>
                    </div>
                </div>
            </div>

        </div>

<?php require_once('includes/scripts.php')?>


</body>
</html>