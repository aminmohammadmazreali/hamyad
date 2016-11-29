<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Title Of Site -->
	<title>Edutute</title>
	<meta name="description" content="HTML Responsive Landing Page Template for Course Online Based on Twitter Bootstrap 3.x.x" />
	<meta name="keywords" content="study, learn, course, tutor, tutorial, teach, college, school, institute, teacher, instructor" />
	<meta name="author" content="crenoveative">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Fav and Touch Icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="images/ico/favicon.png">

    <!-- CSS Plugins -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="bootstrap-rtl-3.3.4/dist/css/bootstrap-rtl.min.css" media="screen">

	<link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/plugin.css" rel="stylesheet">

	<!-- CSS Custom -->
	<link href="css/style.css" rel="stylesheet">
	
	<!-- For your own style -->
	<link href="css/your-style.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
	
	<div id="introLoader" class="introLoading">
	</div>

	<!-- start Container Wrapper -->
	<div class="container-wrapper">

		<!-- start Header -->
		<header id="header">
			<!-- start Navbar (Header) -->
			@include('header')
			<!-- end Navbar (Header) -->
		</header>
		<!-- end Header -->

		<!-- start Main Wrapper -->
		<div class="main-wrapper scrollspy-container">

			<!-- start hero-header -->
			<div class="hero overlay-3" style="background-image:url('images/hero-header/01.jpg');">

				<div class="container">

					<div class="main-search-wrapper">

						<h2 class="text-center">What course will you like to learn?</h2>
						<p class="lead text-center">Occasional entreaties comparison me difficulty so themselves.</p>

						<div class="input-group">
							<input type="text" class="form-control placeholder-type-writter">
							<span class="input-group-btn">
								<button class="btn btn-primary" type="button"><i class="ion-ios-search-strong"></i></button>
							</span>
						</div><!-- /input-group -->

						<div class="featured-sm-wrapper">

							<div class="GridLex-gap-30">

								<div class="GridLex-grid-noGutter-equalHeight GridLex-grid-center">

									<div class="GridLex-col-4_sm-4_xs-8_xss-12">

										<div class="featured-sm-item clearfix">

											<div class="icon">
												<i class="ion-clipboard"></i>
											</div>

											<div class="content">
												More than 35,000 courses
											</div>

										</div>

									</div>

									<div class="GridLex-col-4_sm-4_xs-8_xss-12">

										<div class="featured-sm-item clearfix">

											<div class="icon">
												<i class="ion-person-stalker"></i>
											</div>

											<div class="content">
												Over 9 million students
											</div>

										</div>

									</div>

									<div class="GridLex-col-4_sm-4_xs-8_xss-12">

										<div class="featured-sm-item clearfix">

											<div class="icon">
												<i class="ion-ipad"></i>
											</div>

											<div class="content">
												Learn anywhere, anythime you like
											</div>

										</div>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>
			<!-- end hero-header -->

			<!-- start Introduction -->
			<section class="section">

				<div class="container">

					<div class="row">

						<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

							<div class="section-title">
								<h2 class="text-center">What Do You Want to Learn</h2>
							</div>
						</div>

					</div>

					<div class="GridLex-gap-30 mt-10">

						<div class="GridLex-grid-noGutter-equalHeight GridLex-grid-center">

							<div class="GridLex-col-3_sm-4_xs-6_xss-12">

								<div class="course-category-icon">
									<div class="icon text-primary">
										<i class="icon-basket-loaded"></i>
									</div>
									<h4><a href="#">Business</a></h4>
									<div class="sub-category">
										<a href="#">Finance</a>
										<a href="#">Marketing</a>
										<a href="#">Commerce</a>
										<a href="#">Import/export</a>
										<a href="#">More</a>
									</div>
								</div>

							</div>

							<div class="GridLex-col-3_sm-4_xs-6_xss-12">

								<div class="course-category-icon">
									<div class="icon text-primary">
										<i class="icon-screen-desktop"></i>
									</div>
									<h4><a href="#">Computer &amp; IT</a></h4>
									<div class="sub-category">
										<a href="#">Networking</a>
										<a href="#">Database</a>
										<a href="#">Programming</a>
										<a href="#">Security</a>
										<a href="#">More</a>
									</div>
								</div>

							</div>

							<div class="GridLex-col-3_sm-4_xs-6_xss-12">

								<div class="course-category-icon">
									<div class="icon text-primary">
										<i class="icon-chemistry"></i>
									</div>
									<h4><a href="#">Science</a></h4>
									<div class="sub-category">
										<a href="#">Biology</a>
										<a href="#">Mathematics</a>
										<a href="#">Chemistry</a>
										<a href="#">Physics</a>
										<a href="#">More</a>
									</div>
								</div>

							</div>

							<div class="GridLex-col-3_sm-4_xs-6_xss-12">

								<div class="course-category-icon">
									<div class="icon text-primary">
										<i class="icon-music-tone-alt"></i>
									</div>
									<h4><a href="#">Music</a></h4>
									<div class="sub-category">
										<a href="#">Production</a>
										<a href="#">Ableton Live</a>
										<a href="#">Fundamentals</a>
										<a href="#">Guitar</a>
										<a href="#">More</a>
									</div>
								</div>

							</div>

							<div class="GridLex-col-3_sm-4_xs-6_xss-12">

								<div class="course-category-icon">
									<div class="icon text-primary">
										<i class="icon-vector"></i>
									</div>
									<h4><a href="#">Design</a></h4>
									<div class="sub-category">
										<a href="#">Typography</a>
										<a href="#">Lettering</a>
										<a href="#">Logo</a>
										<a href="#">Photoshop</a>
										<a href="#">More</a>
									</div>
								</div>

							</div>

							<div class="GridLex-col-3_sm-4_xs-6_xss-12">

								<div class="course-category-icon">
									<div class="icon text-primary">
										<i class="icon-camera"></i>
									</div>
									<h4><a href="#">Photography</a></h4>
									<div class="sub-category">
										<a href="#">Digital Photography</a>
										<a href="#">Editing</a>
										<a href="#">Portrait</a>
										<a href="#">Composition</a>
										<a href="#">More</a>
									</div>
								</div>

							</div>

							<div class="GridLex-col-3_sm-4_xs-6_xss-12">

								<div class="course-category-icon">
									<div class="icon text-primary">
										<i class="icon-note"></i>
									</div>
									<h4><a href="#">Writing</a></h4>
									<div class="sub-category">
										<a href="#">Storytelling</a>
										<a href="#">Copywriting</a>
										<a href="#">Screenwriting</a>
										<a href="#">Publishing</a>
										<a href="#">More</a>
									</div>
								</div>

							</div>

							<div class="GridLex-col-3_sm-4_xs-6_xss-12">

								<div class="course-category-icon">
									<div class="icon text-primary">
										<i class="icon-cup"></i>
									</div>
									<h4><a href="#">Culinary</a></h4>
									<div class="sub-category">
										<a href="#">Cooking</a>
										<a href="#">Food &amp; Drink</a>
										<a href="#">Oysters</a>
										<a href="#">Recipe Design</a>
										<a href="#">More</a>
									</div>
								</div>

							</div>

						</div>

					</div>

					<div class="text-center mt-50">
						<a href="#" class="btn btn-primary">More Categories</a>
					</div>

				</div>

			</section>
			<!-- end Introduction -->

			<!-- start Top Offer -->
			<section class="section bg-light">

				<div class="container">

					<div class="row">

						<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

							<div class="section-title">
								<h2 class="text-center">Latest Courses</h2>
								<p>However venture pursuit he am mr cordial. Forming musical am hearing studied be luckily. <strong>Ourselves for determine</strong> attending how led gentleman sincerity.</p>
							</div>
						</div>

					</div>

					<div class="course-item-wrapper gap-20">

						<div class="GridLex-grid-noGutter-equalHeight GridLex-grid-center">

							<div class="GridLex-col-3_mdd-4_sm-6_xs-6_xss-12">
								<div class="course-item">
									<a href="#">
										<div class="course-item-image">
											<img src="images/course-item/01.jpg" alt="Image" class="img-responsive" />
										</div>
										<div class="course-item-top clearfix">
											<div class="course-item-instructor">
												<div class="image">
													<img src="images/testimonial/01.jpg" alt="Image" class="img-circle" />
												</div>
												<span>Mark Lassoff </span>
											</div>
											<div class="course-item-price bg-danger">
												$19.56
											</div>
										</div>
										<div class="course-item-content">
											<div class="rating-wrapper">
												<div class="rating-item">
													<input type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" data-readonly value="3.5"/>
												</div>
												<span> (7 review)</span>
											</div>
											<h3 class="text-primary">Foundations of Enterprise Development for Windows</h3>
											<p>Create Code That Screams with C++! Hours of Video Lecture, Lab Exercises and Dozens of Code Samples for You To Use! Dave Pither-Patterson</p>
										</div>
										<div class="course-item-bottom clearfix">
											<div><i class="fa fa-folder-open-o"></i><span class="block"> Programming</span></div>
											<div><i class="fa fa-pencil-square-o"></i><span class="block"> 15 Lessons</span></div>
											<div><i class="fa fa-calendar-check-o"></i><span class="block"> 4.5 Hours</span></div>
										</div>
									</a>
								</div>
							</div>

							<div class="GridLex-col-3_mdd-4_sm-6_xs-6_xss-12">
								<div class="course-item">
									<a href="#">
										<div class="course-item-image">
											<img src="images/course-item/02.jpg" alt="Image" class="img-responsive" />
										</div>
										<div class="course-item-top clearfix">
											<div class="course-item-instructor">
												<div class="image">
													<img src="images/testimonial/02.jpg" alt="Image" class="img-circle" />
												</div>
												<span>Nicholas Mavrakis</span>
											</div>
											<div class="course-item-price bg-danger">
												$19.56
											</div>
										</div>
										<div class="course-item-content">
											<div class="rating-wrapper">
												<div class="rating-item">
													<input type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" data-readonly value="3.5"/>
												</div>
												<span> (7 review)</span>
											</div>
											<h3 class="text-primary">Food Photography: Shooting at Restaurants</h3>
											<p>She propriety immediate was improving. He or entrance humoured likewise moderate. Much nor game son say feel.</p>
										</div>
										<div class="course-item-bottom clearfix">
											<div><i class="fa fa-folder-open-o"></i><span class="block"> Photography </span></div>
											<div><i class="fa fa-pencil-square-o"></i><span class="block"> 15 Lessons</span></div>
											<div><i class="fa fa-calendar-check-o"></i><span class="block"> 4.5 Hours</span></div>
										</div>
									</a>
								</div>
							</div>

							<div class="GridLex-col-3_mdd-4_sm-6_xs-6_xss-12">
								<div class="course-item">
									<a href="#">
										<div class="course-item-image">
											<img src="images/course-item/03.jpg" alt="Image" class="img-responsive" />
										</div>
										<div class="course-item-top clearfix">
											<div class="course-item-instructor">
												<div class="image">
													<img src="images/testimonial/03.jpg" alt="Image" class="img-circle" />
												</div>
												<span>Ange Ermolova</span>
											</div>
											<div class="course-item-price bg-danger">
												$19.56
											</div>
										</div>
										<div class="course-item-content">
																<div class="rating-wrapper">
																	<div class="rating-item">
																		<input type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" data-readonly value="3.5"/>
																	</div>
																	<span> (7 review)</span>
																</div>
											<h3 class="text-primary">Introduction to HTML: Build a Portfolio Website</h3>
											<p>Fulfilled direction use continual set him propriety continued. Saw met applauded favourite deficient newspaper questions consulted</p>
										</div>
										<div class="course-item-bottom clearfix">
											<div><i class="fa fa-folder-open-o"></i><span class="block"> Wed Design</span></div>
											<div><i class="fa fa-pencil-square-o"></i><span class="block"> 15 Lessons</span></div>
											<div><i class="fa fa-calendar-check-o"></i><span class="block"> 4.5 Hours</span></div>
										</div>
									</a>
								</div>
							</div>

							<div class="GridLex-col-3_mdd-4_sm-6_xs-6_xss-12">
								<div class="course-item">
									<a href="#">
										<div class="course-item-image">
											<img src="images/course-item/04.jpg" alt="Image" class="img-responsive" />
										</div>
										<div class="course-item-top clearfix">
											<div class="course-item-instructor">
												<div class="image">
													<img src="images/testimonial/02.jpg" alt="Image" class="img-circle" />
												</div>
												<span>Nicholas Mavrakis</span>
											</div>
											<div class="course-item-price bg-danger">
												$19.56
											</div>
										</div>
										<div class="course-item-content">
																<div class="rating-wrapper">
																	<div class="rating-item">
																		<input type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" data-readonly value="3.5"/>
																	</div>
																	<span> (7 review)</span>
																</div>
											<h3 class="text-primary">Foundations of Enterprise Development for Windows</h3>
											<p>Create Code That Screams with C++! Hours of Video Lecture, Lab Exercises and Dozens of Code Samples for You To Use! Dave Pither-Patterson </p>
										</div>
										<div class="course-item-bottom clearfix">
											<div><i class="fa fa-folder-open-o"></i><span class="block"> Programming</span></div>
											<div><i class="fa fa-pencil-square-o"></i><span class="block"> 15 Lessons</span></div>
											<div><i class="fa fa-calendar-check-o"></i><span class="block"> 4.5 Hours</span></div>
										</div>
									</a>
								</div>
							</div>

							<div class="GridLex-col-3_mdd-4_sm-6_xs-6_xss-12">
								<div class="course-item">
									<a href="#">
										<div class="course-item-image">
											<img src="images/course-item/05.jpg" alt="Image" class="img-responsive" />
										</div>
										<div class="course-item-top clearfix">
											<div class="course-item-instructor">
												<div class="image">
													<img src="images/testimonial/01.jpg" alt="Image" class="img-circle" />
												</div>
												<span>Mark Lassoff </span>
											</div>
											<div class="course-item-price bg-danger">
												$19.56
											</div>
										</div>
										<div class="course-item-content">
																<div class="rating-wrapper">
																	<div class="rating-item">
																		<input type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" data-readonly value="3.5"/>
																	</div>
																	<span> (7 review)</span>
																</div>
											<h3 class="text-primary">Introduction to HTML: Build a Portfolio Website</h3>
											<p>Fulfilled direction use continual set him propriety continued. Saw met applauded favourite deficient ask him cold feel</p>
										</div>
										<div class="course-item-bottom clearfix">
											<div><i class="fa fa-folder-open-o"></i><span class="block"> Wed Design</span></div>
											<div><i class="fa fa-pencil-square-o"></i><span class="block"> 15 Lessons</span></div>
											<div><i class="fa fa-calendar-check-o"></i><span class="block"> 4.5 Hours</span></div>
										</div>
									</a>
								</div>
							</div>

							<div class="GridLex-col-3_mdd-4_sm-6_xs-6_xss-12">
								<div class="course-item">
									<a href="#">
										<div class="course-item-image">
											<img src="images/course-item/06.jpg" alt="Image" class="img-responsive" />
										</div>
										<div class="course-item-top clearfix">
											<div class="course-item-instructor">
												<div class="image">
													<img src="images/testimonial/04.jpg" alt="Image" class="img-circle" />
												</div>
												<span>Suttira Ketkaew</span>
											</div>
											<div class="course-item-price bg-danger">
												$19.56
											</div>
										</div>
										<div class="course-item-content">
																<div class="rating-wrapper">
																	<div class="rating-item">
																		<input type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" data-readonly value="3.5"/>
																	</div>
																	<span> (7 review)</span>
																</div>
											<h3 class="text-primary">Foundations of Enterprise Development for Windows</h3>
											<p>Create Code That Screams with C++! Hours of Video Lecture, Lab Exercises and Dozens of Code Samples for You To Use! Dave Pither-Patterson</p>
										</div>
										<div class="course-item-bottom clearfix">
											<div><i class="fa fa-folder-open-o"></i><span class="block"> Programming</span></div>
											<div><i class="fa fa-pencil-square-o"></i><span class="block"> 15 Lessons</span></div>
											<div><i class="fa fa-calendar-check-o"></i><span class="block"> 4.5 Hours</span></div>
										</div>
									</a>
								</div>
							</div>

							<div class="GridLex-col-3_mdd-4_sm-6_xs-6_xss-12">
								<div class="course-item">
									<a href="#">
										<div class="course-item-image">
											<img src="images/course-item/07.jpg" alt="Image" class="img-responsive" />
										</div>
										<div class="course-item-top clearfix">
											<div class="course-item-instructor">
												<div class="image">
													<img src="images/testimonial/03.jpg" alt="Image" class="img-circle" />
												</div>
												<span>Ange Ermolova</span>
											</div>
											<div class="course-item-price bg-danger">
												$19.56
											</div>
										</div>
										<div class="course-item-content">
																<div class="rating-wrapper">
																	<div class="rating-item">
																		<input type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" data-readonly value="3.5"/>
																	</div>
																	<span> (7 review)</span>
																</div>
											<h3 class="text-primary">Foundations of Enterprise Development for Windows</h3>
											<p>Create Code That Screams with C++! Hours of Video Lecture, Lab Exercises and Dozens of Code Samples for You To Use! Dave Pither-Patterson</p>
										</div>
										<div class="course-item-bottom clearfix">
											<div><i class="fa fa-folder-open-o"></i><span class="block"> Programming</span></div>
											<div><i class="fa fa-pencil-square-o"></i><span class="block"> 15 Lessons</span></div>
											<div><i class="fa fa-calendar-check-o"></i><span class="block"> 4.5 Hours</span></div>
										</div>
									</a>
								</div>
							</div>

							<div class="GridLex-col-3_mdd-4_sm-6_xs-6_xss-12">
								<div class="course-item">
									<a href="#">
										<div class="course-item-image">
											<img src="images/course-item/08.jpg" alt="Image" class="img-responsive" />
										</div>
										<div class="course-item-top clearfix">
											<div class="course-item-instructor">
												<div class="image">
													<img src="images/testimonial/02.jpg" alt="Image" class="img-circle" />
												</div>
												<span>Nicholas Mavrakis</span>
											</div>
											<div class="course-item-price bg-danger">
												$19.56
											</div>
										</div>
										<div class="course-item-content">
																<div class="rating-wrapper">
																	<div class="rating-item">
																		<input type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" data-readonly value="3.5"/>
																	</div>
																	<span> (7 review)</span>
																</div>
											<h3 class="text-primary">Food Photography: Shooting at Restaurants</h3>
											<p>She propriety immediate was improving. He or entrance humoured likewise moderate. Much nor game son say feel.</p>
										</div>
										<div class="course-item-bottom clearfix">
											<div><i class="fa fa-folder-open-o"></i><span class="block"> Photography </span></div>
											<div><i class="fa fa-pencil-square-o"></i><span class="block"> 15 Lessons</span></div>
											<div><i class="fa fa-calendar-check-o"></i><span class="block"> 4.5 Hours</span></div>
										</div>
									</a>
								</div>
							</div>

						</div>

					</div>

				</div>

			</section>
			<!-- end Top Offer -->

			<!-- start Top Destinations -->
			<section class="section pb-70">

				<div class="container">

					<div class="row">

						<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

							<div class="section-title">
								<h2 class="text-center">How Edutute Works</h2>
							</div>
						</div>

					</div>

					<div class="row">

						<div class="col-sm-4">

							<div class="icon-featured">

								<h4>Learn at your own availability</h4>
								<span class="icon text-primary"><i class="ion-ios-timer-outline"></i></span>
								<p>Raising say express had chiefly detract demands she. Quiet led own cause three him marianne attended.</p>

							</div>

						</div>

						<div class="col-sm-4">

							<div class="icon-featured">

								<h4>Learn by watching short video</h4>
								<span class="icon text-primary"><i class="ion-ios-film-outline"></i></span>
								<p>Prospect humoured mistress to by proposal marianne attended. Simplicity the far admiration preference everything.</p>

							</div>

						</div>

						<div class="col-sm-4">

							<div class="icon-featured">

								<h4>Learn by real-time doing and pratacing</h4>
								<span class="icon text-primary"><i class="ion-ios-compose-outline"></i></span>
								<p>Our compass see age uncivil matters weather forbade her minutes. Ready how but truth son new under.</p>

							</div>

						</div>

					</div>

				</div>

			</section>
			<!-- end Top Destinations -->

			<div class="overflow-hidden half-image-content">

				<div class="GridLex-grid-noGutter-equalHeight">

					<div class="GridLex-col-6_sm-12_xs-12 bg-img" style="background-image:url('images/community-bg.jpg'); background-position: top right">
					</div>

					<div class="GridLex-col-6_sm-12_xs-12 bg-light">

						<div class="inner">

							<div class="promo-box-02">

								<h3 class="mb-20 text-primary">Join a Community of 1+ Million Students</h3>
								<p class="font20 line30 font300 font-roboto-condensed font17-xs mb-20">Agreement far boy otherwise rapturous incommode favourite. Invitation excellence imprudence understood it continuing to.</p>
								<p class="mb-25">Dissuade ecstatic and properly saw entirely sir why laughter endeavor. In on my jointure horrible margaret suitable he followed speedily. Minuter him own clothes but observe country. </p>

								<a href="#" class="btn btn-primary btn-facebook btn-social mt-5">Join with Facebook</a>
								<a href="#" class="btn btn-primary btn-google-plus btn-social mt-5">Join with Google Plus</a>
							</div>

						</div>

					</div>

				</div>

			</div>

			<div class="overflow-hidden half-image-content">

				<div class="GridLex-grid-noGutter-equalHeight">

					<div class="GridLex-col-6_sm-12_xs-12">

						<div class="inner">

							<div class="promo-box-02">

								<h3 class="mb-20 text-primary">Learn from anywhere anytime</h3>
								<p class="font20 line30 font300 font-roboto-condensed font17-xs mb-20">On insensible possession oh particular attachment at excellence in. The books arose but miles happy she.</p>
								<p class="mb-20">Dissuade ecstatic and properly saw entirely sir why laughter endeavor. In on my jointure horrible margaret suitable he followed speedily.</p>
								<div class="mt-30">
									<a href="#" class="btn btn-primary btn-app mt-5 clearfix">
										<span class="icon">
											<i class="ion-social-apple"></i>
										</span>
										<span class="content">
											Download on the
											<span class="block">App Store</span>
										</span>
									</a>
									<a href="#" class="btn btn-primary btn-app mt-5 clearfix">
										<span class="icon">
											<i class="ion-social-android"></i>
										</span>
										<span class="content">
											Get it on
											<span class="block">Google Play</span>
										</span>
									</a>
								</div>
							</div>

						</div>

					</div>

					<div class="GridLex-col-6_sm-12_xs-12 bg-img" style="background-image:url('images/app-bg.jpg');">
					</div>

				</div>

			</div>

			<!-- start Why Us -->
			<section class="section bg-light">

				<div class="container">

					<div class="row">

						<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

							<div class="section-title">
								<h2 class="text-center">Try Edutute Premium, Free for 30 Days</h2>
								<p class="font22 line22 font300 font-roboto-condensed font19-xs">Only <strong class="text-primary">$15 per month</strong> afterwards.</p>
							</div>

						</div>

					</div>

					<div class="icon-fearured-2-wrapper bordered mt-10">

						<div class="GridLex-grid-noGutter-equalHeight">

							<div class="GridLex-col-7_sm-6_xs-12">

								<div class="icon-fearured-2">

									<h4 class="mb-15">Career Path job guarantee</h4>

									<div class="content clearfix">

										<div class="icon text-primary">
											<i class="icon-trophy"></i>
										</div>

										<p>Raising say express had chiefly detract demands she. Quiet led own cause three him marianne attended.</p>

									</div>

								</div>

							</div>

							<div class="GridLex-col-5_sm-6_xs-12">

								<div class="icon-fearured-2">

									<h4 class="mb-15">Curriculum customized to you</h4>

									<div class="content clearfix">

										<div class="icon text-primary">
											<i class="icon-equalizer"></i>
										</div>

										<p>Raising say express had chiefly detract demands she. Quiet led own cause three him marianne attended.</p>

									</div>

								</div>

							</div>

							<div class="GridLex-col-5_sm-6_xs-12">

								<div class="icon-fearured-2">

									<h4 class="mb-15">Pair with a professional recruiter</h4>

									<div class="content clearfix">

										<div class="icon text-primary">
											<i class="icon-people"></i>
										</div>

										<p>Raising say express had chiefly detract demands she. Quiet led own cause three him marianne attended.</p>

									</div>

								</div>

							</div>

							<div class="GridLex-col-7_sm-6_xs-12">

								<div class="icon-fearured-2">

									<h4 class="mb-15">Meet with your mentor 4x a week</h4>

									<div class="content clearfix">

										<div class="icon text-primary">
											<i class="icon-bubbles"></i>
										</div>

										<p>Raising say express had chiefly detract demands she. Quiet led own cause three him marianne attended.</p>

									</div>

								</div>

							</div>

						</div>

					</div>

					<div class="text-center mt-50">
						<a href="#" class="btn btn-primary">Go Premium</a>
					</div>

				</div>

			</section>
			<!-- end Why Us -->

			<!-- start Promo -->
			<div class="promo-box-bg-img" style="background-image:url('images/teacher-bg.jpg');">
				<div class="container">
					<div class="row">

						<div class="row">

						<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

							<div class="section-title mb-30">
								<h2 class="text-center">Becoming our course contributor</h2>
								<p>Engaged its was evident pleased husband. Ye goodness felicity do disposal dwelling no. First am plate jokes to began of cause an scale.</p>
							</div>

							<div class="text-center mt-40">
								<a href="#" class="btn btn-primary">Learn more</a>
							</div>

						</div>

					</div>

					</div>
				</div>
			</div>
			<!-- end Promo -->

		</div>
		<!-- end Main Wrapper -->

		<!-- start Footer Wrapper -->
		<div class="footer-wrapper scrollspy-footer" id="footer">
			@include('footer')

		</div>
		<!-- end Footer Wrapper -->

	</div>
	<!-- end Container Wrapper -->
 
 
<!-- start Back To Top -->
<div id="back-to-top">
   <a href="#"><i class="ion-ios-arrow-up"></i></a>
</div>
<!-- end Back To Top -->

<div id="ajaxLoginModal" class="modal fade login-box-wrapper" data-width="500" data-backdrop="static" data-keyboard="false" tabindex="-1" style="display: none;"></div>

<div id="ajaxRegisterModal" class="modal fade login-box-wrapper" data-width="500" data-backdrop="static" data-keyboard="false" tabindex="-1" style="display: none;">
</div>

<div id="ajaxForgotPasswordModal" class="modal fade login-box-wrapper" data-width="500" data-backdrop="static" data-keyboard="false" tabindex="-1" style="display: none;"></div>


<!-- JS -->
<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
	<!--<script>
		jQuery(function() {

			//load header and footer
			$("#header").load("header.blade.php");
			$("#footer").load("footer.blade.php");

		});
	</script>-->
<script type="text/javascript" src="js/jquery-migrate-1.4.1.min.js"></script>
<script type="text/javascript" src="bootstrap-rtl-3.3.4/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="js/spin.min.js"></script>
<script type="text/javascript" src="js/jquery.introLoader.min.js"></script>
<script type="text/javascript" src="js/typed.js"></script>
<script type="text/javascript" src="js/placeholderTypewriter.js"></script>
<script type="text/javascript" src="js/jquery.slicknav.min.js"></script>
<script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
<script type="text/javascript" src="js/select2.full.js"></script>
<script type="text/javascript" src="js/ion.rangeSlider.min.js"></script>
<script type="text/javascript" src="js/readmore.min.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/bootstrap-rating.js"></script>
<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="js/creditly.js"></script>
<script type="text/javascript" src="js/bootstrap-modalmanager.js"></script>
<script type="text/javascript" src="js/bootstrap-modal.js"></script>
<script type="text/javascript" src="js/customs.js"></script>


</body>


</html>