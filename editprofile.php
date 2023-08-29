<?php 
//Database Connection
include('admin/dbconnection.php');
if(isset($_POST['submit']))
  {
  	$eid=$_GET['editid'];
  	//Getting Post Values
    
      $username           = $_POST['username'];
      $firstname           = $_POST['firstname'];
      $lastname           = $_POST['lastname'];
      $address           = $_POST['address'];
      $email              = $_POST['email'];
      $mobile           = $_POST['mobile'];
      $password        = $_POST['password'];

    //Query for data updation
     $query=mysqli_query($con, "update  reguser set username='$username', firstname='$firstname', address='$address', email='$email', mobile='$mobile'  where id='$eid'");
     
    if ($query) {
    echo "<script>alert('You have successfully update the data');</script>";
    echo "<script type='text/javascript'> document.location ='profile.php?viewid=$eid'; </script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Edit Profile</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/about_styles.css">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
</head>
<style>
   
	<?php include "styles/about_styles.css" ?>
	<?php include "styles/about_responsive.css" ?>
	<?php include "plugins/OwlCarousel2-2.2.1/animate.css" ?>
	<?php include "plugins/OwlCarousel2-2.2.1/owl.theme.default.css" ?>
	<?php include "plugins/OwlCarousel2-2.2.1/owl.carousel.css" ?>
  </style>
  </head>
  
  <body>
  


	<?php include "header.php" ?>

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="img/editprofile.jpg"></div>
		<div class="home_content">
			<div class="home_title"  >Edit Profile</div>
		</div>
	</div>

	<div class="container-xl px-4 mt-4 d-flex flex-row align-items-center justify-content-center">
    
        
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form method="post">
                    <?php
                    $eid=$_GET['editid'];
                    $ret=mysqli_query($con,"select * from reguser where id='$eid'");
                    while ($row=mysqli_fetch_array($ret)) {
                    ?>
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Username (how your name will appear to other users on the site)</label>
                            <input class="form-control" id="inputUsername" type="text"  name="username" value="<?php  echo $row['username'];?>">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">First name</label>
                                <input class="form-control" id="inputFirstName" type="text" name="firstname" value="<?php  echo $row['firstname'];?>">
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">Last name</label>
                                <input class="form-control" id="inputLastName" type="text" name="lastname" value="<?php  echo $row['lastname'];?>" >
                            </div>
                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                            
                            <!-- Form Group (location)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLocation">Address</label>
                                <input class="form-control" id="inputLocation" type="text" name="address" value="<?php  echo $row['address'];?>" >
                            </div>
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">Mobile</label>
                                <input class="form-control" id="inputPhone" type="text" name="mobile" value="<?php  echo $row['mobile'];?>" >
                            </div>
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                            <input class="form-control" id="inputEmailAddress" type="text" name="email" value="<?php  echo $row['email'];?>" >
                        </div>
                        <?php 
                        }?>
                        <!-- Save changes button-->
                        <button class="btn btn-primary" type="submit" name="submit">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    
</div>

    
	<!-- Footer -->
	
	<?php include "footer.php" ?>


<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/about_custom.js"></script>

</body>

</html>