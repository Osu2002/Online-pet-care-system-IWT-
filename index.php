<!DOCTYPE html>
<html lang="en">
<head>
<title>Tial Waggers</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<style>
	<?php include "styles/main_styles.css"?>
	<?php include "styles/responsive.css"?>
	</style>
</head>

<body>

<div class="super_container">
	
	<!-- Header -->

	<?php include "header.php"?>
	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->

		<div class="home_slider_container">
			
			<div class="owl-carousel owl-theme home_slider">

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<!-- Image-->
					<div class="home_slider_background" style="background-image:url(img/home1.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>Tail</h1>
							<h1>Waggers</h1>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(img/home2.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>Tail</h1>
							<h1>Waggers</h1>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(img/home3.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>Tail</h1>
							<h1>Waggers</h1>
						</div>
					</div>
				</div>

			</div>
			
			<!-- Home Slider Nav - Prev -->
			<div class="home_slider_nav home_slider_prev">
				<svg version="1.1" id="Layer_2"  x="0px" y="0px"
					width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
						<linearGradient id='home_grad_prev'>
							<stop offset='0%' stop-color='#fa9e1b'/>
							<stop offset='100%' stop-color='#8d4fff'/>
						</linearGradient>
					</defs>
					<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
					M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
					C22.545,2,26,5.541,26,9.909V23.091z"/>
					<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
					11.042,18.219 "/>
				</svg>
			</div>
			
			<!-- Home Slider Nav - Next -->
			<div class="home_slider_nav home_slider_next">
				<svg version="1.1" id="Layer_3" x="0px" y="0px"
				width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
						<linearGradient id='home_grad_next'>
							<stop offset='0%' stop-color='#fa9e1b'/>
							<stop offset='100%' stop-color='#8d4fff'/>
						</linearGradient>
					</defs>
				<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
				M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
				C22.545,2,26,5.541,26,9.909V23.091z"/>
				<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
				17.046,15.554 "/>
				</svg>
			</div>

			<!-- Home Slider Dots -->

			<div class="home_slider_dots">
				<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
					<li class="home_slider_custom_dot active"><div></div>01</li>
					<li class="home_slider_custom_dot"><div></div>02</li>
					<li class="home_slider_custom_dot"><div></div>03</li>
				</ul>
			</div>
			
0		</div>

	</div>

	<!-- Search -->

	<div class="search">
		

		<!-- Search Contents -->
		
		<div class="container fill_height">
			<div class="row fill_height">
				<div class="col fill_height">

					<!-- Search Tabs -->

					<div class="search_tabs_container">
						<div class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							
							<a class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start" href="dogs/dogs.php"><img src="img/dogicon.png">&nbsp Dogs</a>
							<a class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start" href="cats/cats.php"><img src="img/caticon.png" alt=""> &nbsp cats</a>
							<a class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start" href="birds/birds.php"><img src="img/birdicon.png" alt=""> &nbsp birds</a>
							<a class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start" href="fish/fish.php"><img src="img/fishicon.png" alt=""> &nbsp fishes</a>
							<a class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start" href="admin/product.php"><img src="img/productsicon.png" alt=""> &nbsp products</a>
							
							
						</div>	
						
					</div>
					
					</div>
					
				</div>
			
			</div>
	
		</div>
				
	</div>
	
	<!-- Intro -->
	
	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="intro_title text-center">What We Offer?</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="intro_text text-center">
						<p>Welcome to our pet-centric website! We offer a wide array of services, including expert advice, informative articles, a diverse marketplace for pet products, and more. Whether you're a new pet owner or an experienced enthusiast, we have everything you need to enhance your furry friend's well-being. Join us and embark on a journey of pet care and companionship.</p>
					</div>
				</div>
			</div>
			<div class="row intro_items">

				<!-- Intro Item -->

				<div class="col-lg-4 intro_col">
					<div class="intro_item">
						<div class="intro_item_overlay"></div>
						<!-- Image-->
						<div class="intro_item_background" style="background-image:url(img/intro1.jpg)"></div>
						<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
							
							<div><div></div><span></span><span></span><span></span></a></div>
							<div class="intro_center text-center">
								
								
								
							</div>
						</div>
					</div>
				</div>

				<!-- Intro Item -->

				<div class="col-lg-4 intro_col">
					<div class="intro_item">
						<div class="intro_item_overlay"></div>
						<!-- Image -->
						<div class="intro_item_background" style="background-image:url(img/intro2.jpg)"></div>
						<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
							<div></div>
							<div><div></div><span></span><span></span><span></span></a></div>
							<div>
								
								<div></div>
								<div>
									
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Intro Item -->

				<div class="col-lg-4 intro_col">
					<div class="intro_item">
						<div class="intro_item_overlay"></div>
						<!-- Image-->
						<div class="intro_item_background" style="background-image:url(img/intro3.jpg)"></div>
						<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
							<div></div>
							<div><div></div><span></span><span></span><span></span></a></div>
							<div class="intro_center text-center">
								
								<div></div>
								<div>
									
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- CTA -->

	<div class="cta">
		<!-- Image -->
		<div class="cta_background" style="background-image:url(img/cta2.jpg)"></div>
		
		<div class="container">
			<div class="row">
				<div class="col">

					<!-- CTA Slider -->
					
					<div class="cta_slider_container">
						<div class="owl-carousel owl-theme cta_slider">

							<!-- CTA Slider Item -->
							
							<div class="owl-item cta_item text-center">
								<div class="cta_title"><i>"Until one has loved an animal, a part of one's soul remains unawakened."</i></div>
								<div>
									
									<i></i>
									<i></i>
									<i></i>
									<i></i>
									<i></i>
								</div>
								<p class="cta_text"> - Anatole France -</p>
								<div class="button cta_button"><div></div><span></span><span></span><span></span></a></div>
							</div>
							
							<!-- CTA Slider Item -->
							<div class="owl-item cta_item text-center">
								<div class="cta_title"><i>"Women and cats will do as they please, and men and dogs should relax and get used to the idea."</i></div>
								<div>
									<i></i>
									<i></i>
									<i></i>
									<i></i>
									<i></i>
								</div>
								<p class="cta_text">- Robert A. Heinlein -</p>
								<div class="button cta_button"><div></div><span></span><span></span><span></span></a></div>
							</div>

							<!-- CTA Slider Item -->
							<div class="owl-item cta_item text-center">
								<div class="cta_title"><i>"Animals are such agreeable friends. They ask no questions; they pass no criticisms."</i></div>
								<div>
									<i></i>
									<i></i>
									<i></i>
									<i></i>
									<i></i>
								</div>
								<p class="cta_text">- George Eliot -</p>
								<div class="button cta_button"><div></div><span></span><span></span><span></span></a></div>
							</div>
							
						</div>

						<!-- CTA Slider Nav - Prev -->
						<div class="cta_slider_nav cta_slider_prev">
							<svg version="1.1" id="Layer_4" x="0px" y="0px"
								width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
									<linearGradient id='cta_grad_prev'>
										<stop offset='0%' stop-color='#fa9e1b'/>
										<stop offset='100%' stop-color='#8d4fff'/>
									</linearGradient>
								</defs>
								<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
								M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
								C22.545,2,26,5.541,26,9.909V23.091z"/>
								<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
								11.042,18.219 "/>
							</svg>
						</div>
						
						<!-- CTA Slider Nav - Next -->
						<div class="cta_slider_nav cta_slider_next">
							<svg version="1.1" id="Layer_5" x="0px" y="0px"
							width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
									<linearGradient id='cta_grad_next'>
										<stop offset='0%' stop-color='#fa9e1b'/>
										<stop offset='100%' stop-color='#8d4fff'/>
									</linearGradient>
								</defs>
							<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
							M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
							C22.545,2,26,5.541,26,9.909V23.091z"/>
							<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
							17.046,15.554 "/>
							</svg>
						</div>

					</div>

				</div>
			</div>
		</div>
					
	</div>

		
										
	<!-- Team -->

	<div class="testimonials" id="contact">
		<div class="test_border"></div>
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<h2 class="section_title">Our Team</h2>
				</div>
			</div>
			<div class="row">
				<div class="col">
					
					<!-- Team Slider -->

					<div class="test_slider_container">
						<div class="owl-carousel owl-theme test_slider">

							<!-- Team Item -->
							<div class="owl-item">
								<div class="test_item">
									<div class="test_image"><img src="img/weliya.jpg"></div>
									
									<div class="test_content_container">
										<div class="test_content">
											
											<div class="test_quote_title">SONAL DILMITH</div>
											<p class="test_quote_text">"A pet's love is a remedy for a weary soul, a source of comfort in times of need, and a reminder of the simple joys in life"</p>
										</div>
									</div>
								</div>
							</div>

							<!-- Testimonial Item -->
							<div class="owl-item">
								<div class="test_item">
									<div class="test_image"><img src="img/patiya.jpg"></div>
									
									<div class="test_content_container">
										<div class="test_content">
											
											<div class="test_quote_title">DANUK BIYANWALA</div>
											<p class="test_quote_text">"I hope this website would be very helpful for all pet lovers and I believe every viewer would find this as a very informative one"
										</div>
									</div>
								</div>
							</div>

							<!-- Testimonial Item -->
							<div class="owl-item">
								<div class="test_item">
									<div class="test_image"><img src="img/thadiya.jpg"></div>
									
									<div class="test_content_container">
										<div class="test_content">
											
											<div class="test_quote_title">AKITHA KAWEEN</div>
											<p class="test_quote_text">"Pets teach us unconditional love, loyalty, and the true meaning of happiness.Pets are not our whole lives, but they make our lives whole"</p>
										</div>
									</div>
								</div>
							</div>
							<!-- Testimonial Item -->
							<div class="owl-item">
								<div class="test_item">
									<div class="test_image"><img src="img/osura1.jpg" alt=""></div>
									<div class="test_content_container">
										<div class="test_content">
											<div class="test_quote_title">OSURA SAMODA</div>
											<p class="test_quote_text">"Pets leave paw prints on our hearts and fill our lives with wagging tails and purring love".</p>
										</div>
									</div>
								</div>
							</div>

							<!-- Testimonial Item -->
							<div class="owl-item">
								<div class="test_item">
									<div class="test_image"><img src="img/kavindu.jpg"></div>
									<div class="test_content_container">
										<div class="test_content">
											<div class="test_quote_title">KAVINDU PINSARA</div>
											<p class="test_quote_text">"Pets bring joy, companionship, and unconditional love. They teach us empathy, responsibility, and the beauty of unconditional bonds."</p>
										</div>
									</div>
								</div>
							</div>

						</div>

						<!-- Testimonials Slider Nav - Prev -->
						<div class="test_slider_nav test_slider_prev">
							<svg version="1.1" id="Layer_6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
									<linearGradient id='test_grad_prev'>
										<stop offset='0%' stop-color='#fa9e1b'/>
										<stop offset='100%' stop-color='#8d4fff'/>
									</linearGradient>
								</defs>
								<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
								M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
								C22.545,2,26,5.541,26,9.909V23.091z"/>
								<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
								11.042,18.219 "/>
							</svg>
						</div>
						
						<!-- Testimonials Slider Nav - Next -->
						<div class="test_slider_nav test_slider_next">
							<svg version="1.1" id="Layer_7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
									<linearGradient id='test_grad_next'>
										<stop offset='0%' stop-color='#fa9e1b'/>
										<stop offset='100%' stop-color='#8d4fff'/>
									</linearGradient>
								</defs>
							<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
							M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
							C22.545,2,26,5.541,26,9.909V23.091z"/>
							<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
							17.046,15.554 "/>
							</svg>
						</div>

					</div>
					
				</div>
			</div>

		</div>
	</div>
			<br>
			<br>
			
					</div>
				</div>

			</div>
		</div>
	</div>
	<!--Feedback-->
	<div class="contact" id="contact">
		<div class="contact_background" style="background-image:url(img/feedback.jpg)"></div>

		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="contact_image">
						
					</div>
				</div>
				<div class="col-lg-7">
					<div class="contact_form_container">
						<div class="contact_title">we value your feedback</div>
						<form action="feedbackform.php" id="contact_form" class="contact_form" method="post">
							<input type="text" name="name" class="contact_form_name input_field" placeholder="Name" required="required" data-error="Name is required.">
							<input type="text" name="email" class="contact_form_email input_field" placeholder="E-mail" required="required" data-error="Email is required.">
							<input type="text" name="subject"  class="contact_form_subject input_field" placeholder="Subject" required="required" data-error="Subject is required.">
							<textarea id="contact_form_message" class="text_field contact_form_message" name="feedback" rows="4" placeholder="Feedback" required="required" data-error="Please, write us a feedback."></textarea>
							<button type="submit" name="submit" class="form_submit_button button">send feedback<span></span><span></span><span></span></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	
	<?php include "footer.php" ?>

	
	</div>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>

<script src="js/custom.js"></script>

</body>
</html>