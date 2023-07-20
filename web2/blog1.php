<?php
    require 'function.php';
    $news = query("SELECT * FROM berita");
    // if(isset($_POST["cari"])) {
    //     $dokter = caridokter($_POST["keyword"]);
    // }
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>
	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

	<title>Health Kare - Blog 1</title>

	<!-- Standard Favicon -->
	<link rel="icon" type="image/x-icon" href="assets/images//favicon.ico" />
	
	<!-- For iPhone 4 Retina display: -->
	<link rel="apple-touch-icon-precomposed" href="assets/images//apple-touch-icon-114x114-precomposed.png">
	
	<!-- For iPad: -->
	<link rel="apple-touch-icon-precomposed" href="assets/images//apple-touch-icon-72x72-precomposed.png">
	
	<!-- For iPhone: -->
	<link rel="apple-touch-icon-precomposed" href="assets/images//apple-touch-icon-57x57-precomposed.png">	
	
	<!-- Library - Google Font Familys -->
	<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i%7CMontserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="assets/revolution/css/settings.css">
	
	<link rel="stylesheet" type="text/css" href="assets/revolution/fonts/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="assets/revolution/fonts/font-awesome/css/font-awesome.min.css">
	
	<!-- RS5.0 Layers and Navigation Styles -->
	<link rel="stylesheet" type="text/css" href="assets/revolution/css/layers.css">
	<link rel="stylesheet" type="text/css" href="assets/revolution/css/navigation.css">
	
	<!-- Library - Bootstrap v3.3.5 -->
    <link href="assets/css/lib.css" rel="stylesheet">
	<link href="assets/css/bootstrap-datepicker.min.css" rel="stylesheet">
	
	<!-- Custom - Common CSS -->
	<link href="assets/css/plugins.css" rel="stylesheet">
	<link href="assets/css/elements.css" rel="stylesheet">
	<link href="assets/css/rtl.css" rel="stylesheet">
	<link id="color" href="assets/css/color-schemes/default.css" rel="stylesheet"/>
	
	<!-- Custom - Theme CSS -->
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<!--[if lt IE 9]>
		<script src="js/html5/respond.min.js"></script>
    <![endif]-->
	
</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">

	<!-- Loader -->
	<div id="site-loader" class="load-complete">
		<div class="loader">
				<div class="line-scale">
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
			</div>
		</div>
	</div><!-- Loader /- -->
	
	<!-- Header -->
	<header class="header_s header_s1">
		<!-- SidePanel -->
		<div id="slidepanel">
			<!-- Top Header -->
			<div class="top-header container-fluid no-left-padding no-right-padding">
				<!-- Container -->
				<div class="container">
					<div class="top-header-brd">
						<div class="call-info">
							<p><a href="mailto:domain@domain.com" title="domain@domain.com"><i class="fa fa-envelope-o"></i>domain@domain.com</a></p>
							<p><a href="mailto:info@domain.com" title="info@domain.com">info@domain.com</a></p>
						</div>
						<div class="support-bar">
							<div class="support-link">
								<a href="#" title="Support"><i class="fa fa-life-ring"></i>Support</a>
							</div>
							<div class="support-link">
								<ul class="header-social">
									<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" title="Google"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
							<div class="support-link">
								<div class="language-dropdown dropdown">
									<button aria-expanded="true" aria-haspopup="true" data-toggle="dropdown" title="languages" id="language" type="button" class="btn dropdown-toggle"><i class="fa fa-commenting-o"></i> Language <span class="caret"></span></button>
									<ul class="dropdown-menu no-padding">
										<li><a title="Danish" href="#">Danish</a></li>
										<li><a title="German" href="#">German</a></li>
										<li><a title="French" href="#">French</a></li>
									</ul>
								</div>
							</div>
							<div class="search">	
								<a href="#" id="search" title="Search">Search Queries<i class="fa fa-search"></i></a>
							</div>
						</div>
					</div>
				</div><!-- Container /- -->
				<!-- Search Box -->
				<div class="search-box">
					<span><i class="icon_close"></i></span>
					<form><input class="form-control" placeholder="Enter a keyword and press enter..." type="text"></form>
				</div><!-- Search Box /- -->
			</div><!-- Top Header /- -->
			<!-- Logo Block -->
			<div class="logo-block">
				<!-- Container -->
				<div class="container">
					<div class="logo mobile">
						<a class="navbar-brand mobile-hide" href="index.php">Health Kare<span>Professional Medi care</span></a>
					</div>
					<div class="contact-block">
						<p><i class="fa fa-clock-o"></i>We are Near by You <span>Melbourne - Australia</span></p>
						<p><i class="fa fa-phone"></i>We Feel Happy to Talk<span><a href="tel:(01)9876543210" title="(01) 98 765 432 10">(01) 98 765 432 10</a></span></p>
					</div>
				</div><!-- Container /- -->
			</div><!-- Logo Block -->
		</div><!-- SidePanel /- -->
		<!-- Ownavigation -->
		<nav class="navbar ownavigation">
			<!-- Container -->
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="logo">
						<a class="navbar-brand desktop-hide" href="index.html">Health Kare<span>Professional Medi care</span></a>
					</div>
				</div>
				<div class="submit-btn">
					<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fa fa-bell-o"></i>Appointment</button>
				</div>
				<div class="navbar-collapse collapse" id="navbar">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a aria-expanded="false" aria-haspopup="true" role="button" class="dropdown-toggle" title="Home" href="index.html">Home</a>
							<i class="ddl-switch fa fa-angle-down"></i>
							<ul class="dropdown-menu">
								<li><a title="Home 1" href="index.html">Home 1</a></li>
								<li><a title="Home 2" href="index-2.html">Home 2</a></li>
								<li><a title="Home 3" href="index-3.html">Home 3</a></li>
							</ul>
						</li>
						<li><a title="About Us" href="about.html">About Us</a></li>
						<li class="dropdown">
							<a aria-expanded="false" aria-haspopup="true" role="button" class="dropdown-toggle" title="Treatments" href="#">Treatments</a>
							<i class="ddl-switch fa fa-angle-down"></i>
							<ul class="dropdown-menu">
								<li><a title="Treatments 3 Column" href="treatments-3-column.html">treatments 3 column</a></li>
								<li><a title="Treatments 4 Column" href="treatments-4-column.html">treatments 4 column</a></li>
								<li><a title="Treatments Details" href="treatments-details.html">treatments details</a></li>
								<li><a title="Treatments Full Width" href="treatments-full-width.html">treatments full width</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a aria-expanded="false" aria-haspopup="true" role="button" class="dropdown-toggle" title="Pages" href="#">Pages</a>
							<i class="ddl-switch fa fa-angle-down"></i>
							<ul class="dropdown-menu">
								<li><a title="Services" href="services.html">Services</a></li>
								<li><a title="Team" href="team.html">Team</a></li>
								<li><a title="Faq" href="faq.html">Faq</a></li>
								<li><a title="404" href="404.html">404</a></li>
							</ul>
						</li>
						<li class="dropdown active">
							<a href="blog.html" class="dropdown-toggle" title="Blog" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
							<i class="ddl-switch fa fa-angle-down"></i>
							<ul class="dropdown-menu">
								<li><a href="blog1.html" title="Blog 1">Blog 1</a></li>
								<li><a href="blog2.html" title="Blog 2">Blog 2</a></li>
								<li><a href="blog-post.html" title="Blog Post">Blog Post</a></li>
							</ul>
						</li>
						<li><a title="Contact Us" href="contact-us.html">Contact</a></li>
					</ul>
				</div>
				<div id="loginpanel" class="desktop-hide">
					<div class="right" id="toggle">
						<a id="slideit" href="#slidepanel"><i class="fo-icons fa fa-inbox"></i></a>
						<a id="closeit" href="#slidepanel"><i class="fo-icons fa fa-close"></i></a>
					</div>
				</div>
			</div><!-- Container /- -->
		</nav><!-- Ownavigation /- -->
		<!-- Modal -->
		<div class="modal fade submit-model-box" id="myModal" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content -->
				<div class="modal-content">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="modal-body">		
						<div class="model-header">
							<i class="icon icon-Files"></i>
							<h3><span>Fix Your</span>Appointment</h3>
						</div>
						<div class="submit-form">
							<form>
								<div class="form-group">
									<input class="form-control" placeholder="Name" required="" type="text">
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Email" required="" type="text">
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Phone Number" required="" type="text">
								</div>
								<div class="row">
									<div class="col-md-6 col-sm-12 col-xs-12 form-group">
										<div class="select">
											<select class="form-control"> 
												<option>Gender</option>
												<option>Male</option>
												<option>Female</option>
											</select>
										</div>
									</div>
									<div class="col-md-6 col-sm-12 col-xs-12 form-group">
										<input class="form-control" placeholder="Your Age" required="" type="text">
									</div>
								</div>
								<div class="form-group">
									<div class="select">
										<select class="form-control"> 
											<option>Select a Department</option>
											<option>Select a Department</option>
											<option>Select a Department</option>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 col-sm-12 col-xs-12 form-group">
										<div class="date" id="datetimepicker1">
											<input class="form-control" placeholder="Date to visit" type="text">
											<span class="fa fa-calendar"></span>
										</div>
									</div>
									<div class="col-md-6 col-sm-12 col-xs-12 form-group">
										<div class="select">
											<select class="form-control"> 
												<option>Time</option>
												<option>01:00</option>
												<option>02:00</option>
												<option>04:00</option>
												<option>04:00</option>
												<option>05:00</option>
											</select>
										</div>
									</div>
								</div>
								<div class="form-group">
									<button title="Submit Request" type="submit">Submit Request</button>
								</div>
							</form>
						</div>
					</div>
				</div><!-- Modal content /- -->
			</div>
		</div><!-- Modal /- -->
	</header><!-- Header /- -->
	
	<div class="main-container">
		<main>
			<!-- Page Banner -->
			<div class="page-banner contact-banner container-fluid no-padding">
				<div class="page-banner-content">
					<h3>News <span>Updates</span></h3>
					<p>The mate was a mighty sailing man the skipper brave and sure five passengers set sail that day for a three hour tour a three hour tour being thank you for a friend up through the ground came a bubbling</p>
				</div>
				<div class="banner-content container-fluid no-padding">
					<div class="container">
						<ol class="breadcrumb">
							<li><a href="index.html">Home</a></li>							
							<li><a href="blog2.html">Blog</a></li>							
							<li class="active">Style 01</li>
						</ol>
						<h4>Blog Posts</h4>
					</div>
				</div>
			</div><!-- Page Banner /- -->
			
			<!-- isi daftar berita -->
			<!-- Blog Section -->
			<div class="blog-section blog-list container-fluid no-left-padding no-right-padding">
				<!-- Container -->
				<div class="container">
					<!-- Row -->
					<div class="row">
						<!-- Content Area -->
						<div class="content-area col-md-9 col-sm-8 col-xs-12">
							<?php
								$i=1;
								foreach ($news as $a) :
							?>
							<div class="type-post">
								<div class="entry-cover">
									<a title="Blog" href="blog-post.php?id_berita=<?php echo$a['id_berita'];?>">
										<img alt="blog" src="assets/images/<?php echo $a ['gambar'];?>" width="870px" height="310px"/>
									</a>
									<div class="entry-header">
										<h3 class="entry-title"><a title="Well the first thing you know old Jeds a millionaire speak Beats all you've ever saw been in trouble with the law since the day they" href="blog-post.html">
											<!-- contoh masukin nya -->
											<?php echo $a ['judul'];?>
										</a></h3>
									</div>
								</div>
								<div class="entry-content">
									<p> <?php echo $a ['berita'];?> <span>[...]</span></p>
								</div>
								<div class="entry-meta"> 
									<div class="post-date"><a href="#" title="Date"><i class="fa fa-calendar"></i><?php echo $a ['tgl'];?></a></div>
									<div class="byline"><a href="#" title="adminol"><i class="fa fa-user"></i>Admin</a></div>
									<div class="post-comment"><a href="#" title="12 Comments"><i class="fa fa-comments-o"></i>12 Comments</a></div>
									<div class="post-like"><a href="#" title="Favorites 18"><i class="fa fa-heart-o"></i>Favorites 18</a></div>
									<div class="post-share">
										<span><i class="fa fa-share-alt"></i>Share</span>
										<ul>
											<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#" title="Google"><i class="fa fa-google-plus"></i></a></li>
											<li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<?php
                                    endforeach;
							?>
							
							
						</div><!-- Content Area /- -->
						<!-- Widget Area -->
						<div class="col-md-3 col-sm-4 col-xs-12 widget-area">
							<!-- Widget Search -->
							<aside class="widget widget_search">
								<form method="get" class="searchform" action="#">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Search Your Queries">
										<span class="input-group-btn">
											<button class="btn btn-search" title="Search" type="button"><i class="fa fa-search"></i></button>
										</span>
									</div>
								</form>
							</aside><!-- Widget Search /- -->
							<!-- Widget Categories -->
							<aside id="categories" class="widget widget_categories">
								<h3 class="widget-title"><i class="icon icon-Settings"></i>Categories</h3>
								<ul>
									<li class="cat-item"><a href="#" title="Blood Donors">Blood Donors</a> (13)</li>
									<li class="cat-item"><a href="#" title="Emergency Care">Emergency Care</a> (17)</li>
									<li class="cat-item"><a href="#" title="Scan & X-Rays">Scan & X-Rays</a> (21)</li>
									<li class="cat-item"><a href="#" title="Surgical Experts">Surgical Experts</a> (16)</li>
									<li class="cat-item"><a href="#" title="General Medicine">General Medicine</a> (23)</li>
									<li class="cat-item"><a href="#" title="Doctors Community">Doctors Community</a> (09)</li>
								</ul>
							</aside><!-- Widget Categories /- -->
							<!-- Widget Contact -->
							<aside id="contact" class="widget widget_contact">
								<h6><span>Need a</span>Consultation?</h6>
								<a href="#">Contact Us</a>
							</aside><!-- Widget Contact /- -->
							<!-- Widget Archives -->
							<aside id="archives" class="widget widget_archive">
								<h3 class="widget-title"><i class="icon icon-Edit"></i>Archives</h3>
								<ul>
									<li class="cat-item"><a href="#" title="February 2017">February 2017</a> (08)</li>
									<li class="cat-item"><a href="#" title="January 2017">January 2017</a> (23)</li>
									<li class="cat-item"><a href="#" title="December 2016">December 2016</a> (14)</li>
									<li class="cat-item"><a href="#" title="November 2016">November 2016</a> (11)</li>
									<li class="cat-item"><a href="#" title="October 2016">October 2016</a> (18)</li>
									<li class="cat-item"><a href="#" title="September 2016">September 2016</a> (24)</li>
								</ul>
							</aside><!-- Widget Archives /- -->
							<!-- Widget Gallery -->
							<aside id="gallery" class="widget widget_gallery">
								<h3 class="widget-title"><i class="icon icon-Picture"></i>Treatments</h3>
								<ul>
									<li><a href="#"><img src="http://placehold.it/84x84" alt="wgt-gallery"></a></li>
									<li><a href="#"><img src="http://placehold.it/84x84" alt="wgt-gallery"></a></li>
									<li><a href="#"><img src="http://placehold.it/84x84" alt="wgt-gallery"></a></li>
									<li><a href="#"><img src="http://placehold.it/84x84" alt="wgt-gallery"></a></li>
									<li><a href="#"><img src="http://placehold.it/84x84" alt="wgt-gallery"></a></li>
									<li><a href="#"><img src="http://placehold.it/84x84" alt="wgt-gallery"></a></li>
									<li><a href="#"><img src="http://placehold.it/84x84" alt="wgt-gallery"></a></li>
									<li><a href="#"><img src="http://placehold.it/84x84" alt="wgt-gallery"></a></li>
									<li><a href="#"><img src="http://placehold.it/84x84" alt="wgt-gallery"></a></li>
								</ul>
							</aside><!-- Widget Gallery /- -->
						</div><!-- Widget Area /- -->
					</div><!-- Row /- -->
				</div><!-- Container /- -->
			</div><!-- Blog Section /- -->
			
			<!-- Newsletter -->
			<div class="newsletter-section newsletter-section2 newsletter-section3 container-fluid no-left-padding no-right-padding">
				<!-- Container -->
				<div class="container">
					<!-- Row -->
					<div class="row">
						<div class="col-md-5 col-sm-6 col-xs-6 newsletter-title">
							<h3 class="newsletter-heading"><span>Subscribe</span> Our Newsletter</h3>
						</div>
						<div class="col-md-7 col-sm-6 col-xs-6 newsletter-form">
							<div class="input-group">
								<input class="form-control" placeholder="Enter Your E-mail Address" type="text">
								<span class="input-group-btn">
									<button class="btn btn-default" type="button">Subscribe</button>
								</span>
							</div>
						</div>
					</div><!-- Row /- -->
				</div><!-- Container /- -->
			</div><!-- Newsletter /- -->
		</main>
	</div>
	
	<!-- Footer Main2 -->
	<footer id="footer-main" class="footer-main footer-main2 container-fluid no-left-padding no-right-padding">
		<!-- Container -->
		<div class="container">
			<!-- Row -->
			<div class="row">
				<!-- Widget Information -->
				<div class="col-md-3 col-sm-6 col-xs-6 widget-block">
					<aside class="widget widget_information">
						<div class="logo">
							<a class="navbar-brand" href="index.html">Health Kare<span>Professional Medi care</span></a>
						</div>
						<div class="information-block">
							<i class="icon icon-Pointer"></i>
							<p>7307 San Pablo Drive</p>
							<p>South Ozone, NY 11420</p>
						</div>
						<div class="information-block">
							<i class="icon icon-Phone2"></i>
							<p><a href="tel:(01)9876543210" title="(01) 98 - 765 432 10">(01) 98 - 765 432 10,</a></p>
							<p><a href="tel:(01)9012345678" title="(01) 90 - 123 456 78">(01) 90 - 123 456 78</a></p>
						</div>
						<div class="information-block">
							<i class="icon icon-Mail"></i>
							<p><a href="mailto:admin@healthkare.com" title="admin@healthkare.com">admin@healthkare.com,</a></p>
							<p><a href="mailto:info@healthkare.com" title="info@healthkare.com">info@healthkare.com</a></p>
						</div>
					</aside>
				</div><!-- Widget Information /- -->
				<!-- Widget About -->
				<div class="col-md-3 col-sm-6 col-xs-6 widget-block">
					<aside class="widget widget_about">
						<h3 class="widget-title">About Us</h3>
						<p>Above the law sunny days the clouds away fateful trip</p>
						<p>That started my way to where the air is sweet can you tell me how to get how to get sesame</p>
						<ul class="footer-social">
							<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#" title="Google"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						</ul>
					</aside>
				</div><!-- Widget About /- -->
				<!-- Widget Links -->
				<div class="col-md-2 col-sm-6 col-xs-6 widget-block">
					<aside class="widget widget_links">
						<h3 class="widget-title">Useful links</h3>
						<ul>
							<li><a href="#" title="Get An Appointment">Get An Appointment</a></li>
							<li><a href="#" title="Old Patient Reports">Old Patient Reports</a></li>
							<li><a href="#" title="Exclusive Treatments">Exclusive Treatments</a></li>
							<li><a href="#" title="Insurance Claim">Insurance Claim</a></li>
							<li><a href="#" title="Emergency Care Unit">Emergency Care Unit</a></li>
							<li><a href="#" title="Our Doctors Profile">Our Doctors Profile</a></li>
						</ul>
					</aside>
				</div><!-- Widget Links /- -->
				<!-- Widget Workinghours -->
				<div class="col-md-4 col-sm-6 col-xs-6 widget-block">
					<aside class="widget widget_workinghours">
						<h3 class="widget-title">Working Time</h3>
						<ul>
							<li><span>Monday - Friday</span><b>10:00am - 6:00pm</b></li>
							<li><span>Saturday</span><b>10:00am - 4:00pm</b></li>
							<li><span>Sunday</span><b>11:00am - 4:00pm</b></li>
							<li><span>Discharge</span><b>1:00am - 4:00pm</b></li>
							<li><span class="emergency">Emergency Unit </span><b class="open">Open Always</b></li>
						</ul>
					</aside>
				</div><!-- Widget Workinghours /- -->
			</div><!-- Row /- -->
		</div><!-- Container /- -->
		<div class="btm-ftr-menu container-fluid no-left-padding no-right-padding">
			<!-- Container -->
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<!-- Ownavigation -->
						<nav class="navbar ownavigation">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-ftr" aria-expanded="false" aria-controls="navbar">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>									
							</div>
							<div id="navbar-ftr" class="navbar-collapse collapse">
								<ul class="nav navbar-nav">
									<li class="active"><a href="index.html" title="Home">Home</a></li>
									<li><a href="about.html" title="About Us">About Us</a></li>
									<li><a href="#" title="Projects">Projects</a></li>
									<li><a href="#" title="Help">Help</a></li>								
									<li><a href="faq.html" title="FAQ">FAQ</a></li>
									<li><a href="contact-us.html" title="Contact">Contact</a></li>
								</ul>
							</div>
						</nav><!-- Ownavigation /- -->
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12 copyright-section">
						<p>&copy; Copyrights 2017. Health Kare All Rights Reserved</p>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- Footer Main2 /- -->
	

	
	<!-- JQuery v1.12.4 -->
	<script src="assets/js/jquery.min.js"></script>
	
	<!-- Library - Js -->
	<script src="assets/js/lib.js"></script>
	<script src="assets/js/bootstrap-datepicker.min.js"></script>
	
	<!-- RS5.0 Core JS Files -->
	<script type="text/javascript" src="assets/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
	<script type="text/javascript" src="assets/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
	<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
	<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>

	<!-- Library - Google Map API -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDW40y4kdsjsz714OVTvrw7woVCpD8EbLE"></script>
	
	<!-- Library - Theme JS -->
	<script src="assets/js/functions.js"></script>
	
</body>
</html>