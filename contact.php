<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<style>
	<?php include "styles/contact_styles.css"?>
</style>
</head>

<body>

<div class="super_container">
	
	<!-- Header -->

	<?php include "header.php"?>

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="img/contact.jpg"></div>
		<div class="home_content">
			<div class="home_title">contact us</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact_form_section">
		<div class="container">
			<div class="row">
				<div class="col">

					<!-- Contact Form -->
					<div class="contact_form_container">
						<div class="contact_title text-center">get in touch</div>
						<form action="contactform.php" id="contact_form" class="contact_form text-center" method="post">
							<input type="text"  class="contact_form_name input_field" name="name" placeholder="Name" required="required" data-error="Name is required.">
							<input type="text" class="contact_form_email input_field" name="email" placeholder="E-mail" required="required" data-error="Email is required.">
							<input type="text" class="contact_form_subject input_field" name="subject" placeholder="Subject" required="required" data-error="Subject is required.">
							<textarea class="text_field contact_form_message" name="message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
							<button type="submit" name="submit" class="form_submit_button button trans_200">send message<span></span><span></span><span></span></button>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- About -->
	<div class="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					
					<!-- About - Image -->

					<div class="about_image" style="height: 400px; width: 400px;">
						<img src="img/contact2.jpg"  alt="" style="width : 400px; height:400px; object-fit:cover;">
					</div>

				</div>

				<div class="col-lg-4">
					
					<!-- About - Content -->

					<div class="about_content">
						<div class="logo_container about_logo">
							<div class="logo"><img src="img/logo.png" alt=""></div>
						</div>
						<p class="about_text">Welcome to our pet-centric website! We offer a wide array of services, including expert advice, informative articles, a diverse marketplace for pet products, and more. Whether you're a new pet owner or an experienced enthusiast, we have everything you need to enhance your furry friend's well-being. Join us and embark on a journey of pet care and companionship.</p>
						<ul class="about_social_list">
							<li class="about_social_item"><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li class="about_social_item"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
							<li class="about_social_item"><a href="#"><i class="fa fa-twitter"></i></a></li>
							
						</ul>
					</div>

				</div>

				<div class="col-lg-3">
					
					<!-- About Info -->

					<div class="about_info">
						<ul class="contact_info_list">
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div></div>
								<div class="contact_info_text">SLIIT Malabe Campus, New Kandy Rd, Malabe, Sri Lanka</div>
							</li>
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div></div>
								<div class="contact_info_text">011-7544-801</div>
							</li>
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src="images/message.svg" alt=""></div></div>
								<div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top">tailwaggers@gmail.com</a></div>
							</li>
							
						</ul>
					</div>

				</div>

			</div>
		</div>
	</div>

	<!-- Google Map -->
		
	<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.798467128219!2d79.9703695747609!3d6.914682818494421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae256db1a6771c5%3A0x2c63e344ab9a7536!2sSri%20Lanka%20Institute%20of%20Information%20Technology!5e0!3m2!1sen!2slk!4v1686263368777!5m2!1sen!2slk" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	<!-- Footer -->
	
	<?php include "footer.php" ?>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact_custom.js"></script>

</body>

</html>