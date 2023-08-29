
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signup</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Travelix Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/blog_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">
<style>
    <?php include "styles/contact_styles.css"?>
    <?php include "styles/signup.css"?>
  
</style>
</head>
<body>
    <?php include "header.php"?>

    <div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="img/signup2.jpg"></div>
		<div class="home_content">
			<div class="home_title">Signup</div>
		</div>
	</div>

  <section class="h-100k">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card card-registration my-4">
            <div class="row g-0">
              <div class="col-xl-6 d-none d-xl-block">
                <img src="img/signup.jpg"
                  alt="" class="img-fluid"
                  style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
              </div>
              <div class="col-xl-6">
                <div class="card-body p-md-5 text-black">
                  <h3 class="mb-5 text-uppercase">Registration Form</h3>
                  <form action="signupform.php" method="post">
                    <div class="form-outline mb-4">
                      <input type="text" id="form3Example97" class="form-control form-control-lg" name="username"/>
                      <label class="form-label" for="form3Example97">Username</label>
                    </div>

                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="text" id="form3Example1m" class="form-control form-control-lg" name="firstname"/>
                          <label class="form-label" for="form3Example1m">First name</label>
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="text" id="form3Example1n" class="form-control form-control-lg" name="lastname"/>
                          <label class="form-label" for="form3Example1n">Last name</label>
                        </div>
                      </div>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="text" id="form3Example8" class="form-control form-control-lg" name="address"/>
                      <label class="form-label" for="form3Example8">Address</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="text" id="form3Example9" class="form-control form-control-lg" name="email"/>
                      <label class="form-label" for="form3Example9">Email</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="text" id="form3Example90" class="form-control form-control-lg" name="mobile"/>
                      <label class="form-label" for="form3Example90">Mobile</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="text" id="form3Example99" class="form-control form-control-lg" name="password"/>
                      <label class="form-label" for="form3Example99">Password</label>
                    </div>

                    <div class="d-flex justify-content-end pt-3">
                      <button type="button" class="btn btn-light btn-lg">Reset all</button>
                      <button type="submit" name="submit" class="btn btn-warning btn-lg ms-2">Submit form</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  
<?php include "footer.php" ?>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact_custom.js"></script>
</body>
</html>