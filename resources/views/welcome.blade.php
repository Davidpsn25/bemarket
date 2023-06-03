<!DOCTYPE html><html><head>
<meta charset="utf-8">
<title>BeMarketForex</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body>
 
<div class="page-wrapper">
	
    <!-- Preloader -->
    <div class="preloader"></div>
	<!-- End Preloader -->
 	
 	<!-- Main Header / Header Style Two -->
    <header class="main-header header-style-two">
    	
		<!-- Header Top -->
		<div class="header-top_two">
			<div class="auto-container">
				<div class="d-flex justify-content-center align-items-center flex-wrap">
					
					<!-- Info List -->
					<ul class="info-list">
						
						<li><a href="#"><span class="icon fa-solid fa-envelope fa-fw"></span>support@bemarketforex.com</a></li>
						<li><a href="#"><span class="icon fa-solid fa-map fa-fw"></span>Chat Support</a></li>
					</ul>
					
					<!-- Social Box 
					<ul class="header-social_box">
						<li><a href="https://www.twitter.com/" class="fa-brands fa-facebook-f fa-fw"></a></li>
						<li><a href="https://www.facebook.com/" class="fa-brands fa-twitter fa-fw"></a></li>
						<li><a href="https://www.linkedin.com/" class="fa-brands fa-linkedin fa-fw"></a></li>
						<li><a href="https://instagram.com/" class="fa-solid fa-instagram fa-fw"></a></li>
					</ul>-->
					
				</div>
                
			</div>
		</div>
		<!-- End Header Top -->
		
		<!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
				<div class="inner-container d-flex">
					<!-- Logo Box -->
					<div class="logo"><a href="index.html"><img src="" alt title></a></div>
					
					<!-- Upper Right -->
					<div class="upper-right">
						<div class="nav-outer d-flex justify-content-between align-items-center flex-wrap">
						
							<!-- Main Menu -->
							<nav class="main-menu show navbar-expand-md">
								<div class="navbar-header">
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								
								<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
									<ul class="navigation clearfix">
										
										
										<li><a href="contact.html">Contact</a></li>
                                        <li>
                                        @if (Route::has('login'))
                    @auth
                    <li> <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a></li>
                    @else
                    <li><a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a></li>

                        @if (Route::has('register'))
                        <li><a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a></li>
                        @endif
                        @endauth
                        @endif
</li>
                    
									</ul>
								</div>
								
							</nav>
							<!-- Main Menu End-->
							
							<div class="outer-box d-flex align-items-center">
								
								<!-- Search Box -->
								<!--<div class="search-box">
									<form method="post" action="contact.html">
										<div class="form-group">
											<input type="search" name="search-field" value placeholder="Search..." required>
											<button type="submit"><span class="icon fa fa-search"></span></button>
										</div>
									</form>
								</div>-->
								
								<!-- Language -->
								<div class="language dropdown">
									<button class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-globe fa-fw"></i>English  <span class="fa fa-angle-down"></span></button>
									<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
										<li><a href="#">Português BR</a></li>
										<!--<li><a href="#">German Branch</a></li>
										<li><a href="#">UAE Branch</a></li>
										<li><a href="#">Qatar Branch</a></li>-->
									</ul>
								</div>
								
								<!--<div class="button-box">
									<a class="btn-style-three theme-btn btn-item" href="#">
										<div class="btn-wrap">
											<span class="text-one">Tell Us<i class="fa-solid fa-arrow-right fa-fw"></i></span>
											<span class="text-two">Tell Us<i class="fa-solid fa-arrow-right fa-fw"></i></span>
										</div>
									</a>
								</div>-->
								
								<!-- Mobile Navigation Toggler -->
								<div class="mobile-nav-toggler"><span class="icon fa-solid fa-bars fa-fw"></span></div>
								
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container">
				<div class="d-flex justify-content-between align-items-center">
					<!-- Logo -->
					<div class="logo">
						<a href="index.html" title><img src="" alt title></a>
					</div>
					
					<!-- Right Col -->
					<div class="right-box d-flex align-items-center flex-wrap">
						<!-- Main Menu -->
						<nav class="main-menu">
							<!--Keep This Empty / Menu will come through Javascript-->
						</nav>
						<!-- Main Menu End-->
						
						<div class="outer-box d-flex align-items-center">
								
							<!-- Search Box -->
							<!--<div class="search-box">
								<form method="post" action="contact.html">
									<div class="form-group">
										<input type="search" name="search-field" value placeholder="Search..." required>
										<button type="submit"><span class="icon fa fa-search"></span></button>
									</div>
								</form>
							</div>-->
							
							<!-- Language -->
							<div class="language dropdown">
								<button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-globe fa-fw"></i>English  <span class="fa fa-angle-down"></span></button>
								<ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
									<li><a href="#">Português BR</a></li>
									<!--<li><a href="#">German Branch</a></li>
									<li><a href="#">UAE Branch</a></li>
									<li><a href="#">Qatar Branch</a></li>-->
								</ul>
							</div>
							
							<!--<div class="button-box">
								<a class="btn-style-three theme-btn btn-item" href="#">
									<div class="btn-wrap">
										<span class="text-one">Tell Us<i class="fa-solid fa-arrow-right fa-fw"></i></span>
										<span class="text-two">Tell Us<i class="fa-solid fa-arrow-right fa-fw"></i></span>
									</div>
								</a>
							</div>-->
							
							<!-- Mobile Navigation Toggler -->
							<div class="mobile-nav-toggler"><span class="icon fa-solid fa-bars fa-fw"></span></div>
							
						</div>
						
					</div>
					
				</div>
            </div>
        </div>
		<!-- End Sticky Menu -->
        
		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-020-x-mark"></span></div>
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="" alt title></a></div>
				<!-- Search -->
				<!--<div class="search-box">
					<form method="post" action="contact.html">
						<div class="form-group">
							<input type="search" name="search-field" value placeholder="SEARCH HERE" required>
							<button type="submit"><span class="icon flaticon-001-loupe"></span></button>
						</div>
					</form>
				</div>-->
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div>
		<!-- End Mobile Menu -->
	
    </header>
    <!-- End Main Header -->
	
	<!-- Main Slider -->
	<section class="slider-two">
		<div class="single-item-carousel owl-carousel owl-theme">
			
			<!-- Slide -->
			<div class="slide">
				<div class="slider-two_image-layer" style="background-image:url(images/robotrader.jpg)"></div>
				<div class="slider-two_pattern-layer" style="background-image:url(images/pattern-1.png)"></div>
				<div class="auto-container">
					
					<!-- Content Column -->
					<div class="slider-two-content">
						<div class="slider-two_inner">
							<div class="slider-two_title">Yes, It's Possible.</div>
							<h1 class="slider-two_heading">BeMarket helps you to achieve your financial goals. <br> Copy the best traders NOW and Start profiting today!</h1>
							<div class="slider-two_text">See how you can have your own online business with great earnings,<br>working from the comfort of your home or wherever you are.<br>All you need is a laptop or cell phone with internet access!</div>
							<!-- Button Box -->
							<div class="slider-two_button-box">
								<a class="btn-style-two theme-btn btn-item" href="#">
									<div class="btn-wrap">
										<span class="text-one">Our Team <i class="fa-solid fa-arrow-right fa-fw"></i></span>
										<span class="text-two">Our Team <i class="fa-solid fa-arrow-right fa-fw"></i></span>
									</div>
								</a>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
			<!-- Slide -->
			<div class="slide">
				<div class="slider-two_image-layer" style="background-image:url(images/inteligencia.jpg)"></div>
				<div class="slider-two_pattern-layer" style="background-image:url(images/pattern-1.png)"></div>
				<div class="auto-container">
					
					<!-- Content Column -->
					<div class="slider-two-content">
						<div class="slider-two_inner">
							<div class="slider-two_title">Yes, It's Possible.</div>
							<h1 class="slider-two_heading">BeMarket helps you to achieve your financial goals. <br> Copy the best traders NOW and Start profiting today!</h1>
							<div class="slider-two_text">See how you can have your own online business with great earnings,<br>working from the comfort of your home or wherever you are.<br>All you need is a laptop or cell phone with internet access!</div>
							<!-- Button Box -->
							<div class="slider-two_button-box">
								<a class="btn-style-two theme-btn btn-item" href="#">
									<div class="btn-wrap">
										<span class="text-one">Our Team <i class="fa-solid fa-arrow-right fa-fw"></i></span>
										<span class="text-two">Our Team <i class="fa-solid fa-arrow-right fa-fw"></i></span>
									</div>
								</a>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
			<!-- Slide -->
			<div class="slide">
				<div class="slider-two_image-layer" style="background-image:url(images/roboIA.jpg)"></div>
				<div class="slider-two_pattern-layer" style="background-image:url(images/pattern-1.png)"></div>
				<div class="auto-container">
					
					<!-- Content Column -->
					<div class="slider-two-content">
						<div class="slider-two_inner">
							<div class="slider-two_title">Yes, It's Possible.</div>
							<h1 class="slider-two_heading">BeMarket helps you to achieve your financial goals. <br> Copy the best traders NOW and Start profiting today!</h1>
							<div class="slider-two_text">See how you can have your own online business with great earnings,<br>working from the comfort of your home or wherever you are.<br>All you need is a laptop or cell phone with internet access!</div>
							<!-- Button Box -->
							<div class="slider-two_button-box">
								<a class="btn-style-two theme-btn btn-item" href="#">
									<div class="btn-wrap">
										<span class="text-one">Our Team <i class="fa-solid fa-arrow-right fa-fw"></i></span>
										<span class="text-two">Our Team <i class="fa-solid fa-arrow-right fa-fw"></i></span>
									</div>
								</a>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
		</div>
	</section>
	<!-- End Main Slider -->
	
	
	
	
	
	<!-- About Two -->
	<section class="about-two">
		<div class="about-two_pattern-two" style="background-image:url(images/pattern-13.png)"></div>
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Content Column -->
				<div class="about-two_image-column col-lg-6 col-md-12 col-sm-12">
					<div class="about-two_pattern-one" style="background-image:url(images/pattern-12.png)"></div>
					<div class="about-two_image">
						<img src="images/atendimento.jpg" alt>
						<!-- About One Detail -->
						<a class="about-two_play lightbox-video fa-solid fa-play fa-fw" href="https://www.youtube.com/watch?v=2cY2SRUFfU8">
							<i class="ripple"></i>
						</a>
					</div>
				</div>
				
				<!-- Content Column -->
				<div class="about-two_content col-lg-6 col-md-12 col-sm-12">
					<div class="about-two_content-inner">
						<div class="sec-title_two">
							<div class="sec-title_two-title">About Our Company</div>
							<h2 class="sec-title_two-heading">Let The <span>Professionals </span> <br>Handle Your Trading.</h2>
						</div>
						<div class="about-two_text">With our copytrade service, you can follow the trades of experienced and successful traders, with no knowledge or experience required. What's more, if you act now, you can take advantage of a special offer and start earning today. Don't let this opportunity slip away, try it now!</div>
						<div class="about-two_feature">
							<div class="row clearfix">
							
								<!-- About Two Block -->
								<div class="about-two_block col-lg-6 col-md-6 col-sm-6">
									<div class="about-two_block-inner">
										<span class="about-two_block-icon">
											<img src="images/about-1.png" alt>
										</span>
										<h6 class="about-two_block-heading">Start<br>NOW</h6>
									</div>
								</div>
								
								<!-- About Two Block -->
								<div class="about-two_block col-lg-6 col-md-6 col-sm-6">
									<div class="about-two_block-inner">
										<span class="about-two_block-icon">
											<img src="images/atendimento.png" alt>
										</span>
										<h6 class="about-two_block-heading">Technical <br> Support</h6>
									</div>
								</div>
								
							</div>
						</div>
						
												
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End About Two -->
	
	
	
	
	
	
	
	
	
	<!-- Testimonial Section -->
	<section class="testimonial-section" style="background-image: url(images/inteligencia.jpg)">
		<div class="pattern-layer-one" style="background-image: url(images/pattern-25.png)"></div>
		<div class="auto-container">
			<div class="row clearfix">
			
				<!-- Title Column -->
				<div class="title-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<!-- Sec Title -->
						<div class="sec-title_two">
							<div class="sec-title_two-title">Testimonials ~</div>
							<h2 class="sec-title_two-heading">Here's what our <br> <span>customers</span> have said.</h2>
							<div class="text;font-size:10px">***Attention: the financial results presented here are not typical and are the result of an investment system that performs operations of several professional investors in market variables and involve financial risks. Past returns are no guarantee of future returns. Investments in variable income can bring financial losses to any investor. Results may vary from person to person depending on your investment.</div>
						</div>
						<!-- Button Box -->
						<div class="button-box">
							<a class="btn-style-three theme-btn btn-item" href="#">
								<div class="btn-wrap">
									<span class="text-one">View More <i class="fa-solid fa-arrow-right fa-fw"></i></span>
									<span class="text-two">View More <i class="fa-solid fa-arrow-right fa-fw"></i></span>
								</div>
							</a>
						</div>
					</div>
				</div>
				
				<!-- Carousel Column -->
				<div class="carousel-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column" style="background-image: url(images/pattern-26.png)">
						<div class="authors-outer">
							<div class="author-one">
								<img src="images/author2.jpg" alt>
							</div>
							<!-- <div class="author-two">
								<img src="images/author2.jpg" alt>
							</div>
							<div class="author-three">
								<img src="images/author2.jpg" alt>
							</div>
							<div class="author-four">
								<img src="images/author2.jpg" alt>
							</div> -->
						</div>
						<div class="single-item-carousel owl-carousel owl-theme">
						
							<!-- Testimonial Block -->
							<div class="testimonial-block">
								<div class="inner-box">
									<div class="rating">
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
									<div class="text">I don't even have words to describe how amazing it is to make an investment and feel safe, I have many long-term plans that I want to accomplish and I will be able to thanks to Bemarket."</div>
								</div>
								<div class="author-box">
									<div class="box-inner">
										<span class="author-image">
											<img src="images/author-1.jpg" alt>
										</span>
										<h5>Paula Spinola</h5>
										<div class="designation">Client B3</div>
									</div>
								</div>
							</div>
							
							<!-- Testimonial Block -->
							<div class="testimonial-block">
								<div class="inner-box">
									<div class="rating">
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
									<div class="text">"I was already working in the market and trying to trade in my own way, but now I have time to study more about the market to trade in the future."</div>
								</div>
								<div class="author-box">
									<div class="box-inner">
										<span class="author-image">
											<img src="images/author-4.jpg" alt>
										</span>
										<h5>Fransisnei Jesus</h5>
										<div class="designation">Client Forex</div>
									</div>
								</div>
							</div>
							
							<!-- Testimonial Block -->
							<div class="testimonial-block">
								<div class="inner-box">
									<div class="rating">
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
									<div class="text">"Very cool to see the dollars being earned in my account, I simply connected to the system and I'm already earning a lot of money with them and great support."</div>
								</div>
								<div class="author-box">
									<div class="box-inner">
										<span class="author-image">
											<img src="images/author-5.jpg" alt>
										</span>
										<h5>Thiago Guilhermino</h5>
										<div class="designation">Client Forex</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Testimonial Section -->
	
	
	<!-- CTA One -->
	<section class="cta-one">
		<div class="auto-container">
			<div class="d-flex justify-content-between align-items-center flex-wrap">
				<div class="left-box">
					<h3 class="cta-one_heading">Looking for the best automated business solutions?</h3>
					<div class="cta-one_text">Join our investment fund.</div>
				</div>
				<div class="right-box">
					<a class="cta-one_btn theme-btn" href="contact.html">get a quote</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End CTA One -->
	
	<!-- Footer -->
	<footer class="main-footer" style="background-image:url(images/pattern-11.png)">
		<div class="auto-container">
			<!-- Widgets Section -->
			<div class="widgets-section">
				<div class="row clearfix">
					
					<!-- Big Column -->
					<div class="big-column col-lg-20 col-md-12 col-sm-12">
						<div class="row clearfix">
							
							<!-- Footer Column -->
							<div class="footer-column col-lg-4 col-md-6 col-sm-12">
								<div>
									<div class="logo">
										<a href="index.html"><img src="images/logo1.png" alt></a>
									</div>
									<div class="text">We work with a passion of taking challenges and creating new ones.</div>
									
								</div>
							</div>
							
										
						</div>
					</div>
					
					
					
				</div>
			</div>
			
			<div class="footer-bottom">
				<div class="copyright">2023 © All rights reserved by <a href="#">BeMarketForex</a></div>
			</div>
			
		</div>
	</footer>
	<!-- Footer -->
	
	<!-- Search Popup -->
	<div class="search-popup">
		<div class="color-layer"></div>
		<button class="close-search"><span class="fa-solid fa-power-off fa-fw"></span></button>
		<form method="post" action="blog.html">
			<div class="form-group">
				<input type="search" name="search-field" value placeholder="Search Here" required>
				<button class="fa-solid fa-paper-plane fa-fw" type="submit"></button>
			</div>
		</form>
	</div>
	<!-- End Search Popup -->
		
</div>
<!-- End PageWrapper -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>

<script src="js/jquery.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/odometer.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/parallax-scroll.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/tilt.jquery.min.js"></script>
<script src="js/magnific-popup.min.js"></script>

<script src="js/script.js"></script>
    
</body></html>