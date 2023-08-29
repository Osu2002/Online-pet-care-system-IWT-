<?php
include("admin/dbconnection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile</title>
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
<style>
    <?php include "styles/about_styles.css" ?>
    <?php include "styles/about_responsive.css" ?>
    <?php include "plugins/OwlCarousel2-2.2.1/animate.css" ?>
    <?php include "plugins/OwlCarousel2-2.2.1/owl.theme.default.css" ?>
    <?php include "plugins/OwlCarousel2-2.2.1/owl.carousel.css" ?>
  
</style>
</head>
<body>
    <?php include "header.php"?>

    <div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="img/profile.jpg"></div>
		<div class="home_content">
			<div class="home_title">Profile</div>
		</div>
	</div>
 
<?php
$vid=$_GET['viewid'];
$ret=mysqli_query($con,"select * from reguser where id =$vid");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

<div class="mt-3 container">
    <div class="main-body">
    
          <div class="row gutters-sm">
            <div class="col-lg">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md">
                      <h6 class="mb-0 font-weight-bold">Username</h6>
                    </div>
                    <div class="col-md text-secondary">
                    <?php  echo $row['username'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-md">
                      <h6 class="mb-0 font-weight-bold">First Name</h6>
                    </div>
                    <div class="col-md text-secondary">
                    <?php  echo $row['firstname'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-md">
                      <h6 class="mb-0 font-weight-bold">Last Name</h6>
                    </div>
                    <div class="col-md text-secondary">
                    <?php  echo $row['lastname'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-md">
                      <h6 class="mb-0 font-weight-bold">Email</h6>
                    </div>
                    <div class="col-md text-secondary">
                    <?php  echo $row['email'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-md">
                      <h6 class="mb-0 font-weight-bold">Mobile</h6>
                    </div>
                    <div class="col-md text-secondary">
                    <?php  echo $row['mobile'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-md">
                      <h6 class="mb-0 font-weight-bold">Address</h6>
                    </div>
                    <div class="col-md text-secondary">
                    <?php  echo $row['address'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " target="__blank" href="editprofile.php?editid=<?php echo htmlentities ($row['id']);?>">Edit</a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>
    </div>

<?php 
$cnt=$cnt+1;
}?>

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