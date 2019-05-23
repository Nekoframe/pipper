<?php 
  $page = 'home';
  $title = 'Pipper - Home';
  include 'meta.php';
  include 'header.php';
?>


<!-- wrapper -->
<div class="wrapper" data-role="page" id="index">

	<!-- slider_section -->
	<section class="slider_section">
		<div id="banner" class="carousel slide" data-ride="carousel">

		  <!-- Indicators -->
		  <ul class="carousel-indicators">
		    <li data-target="#banner" data-slide-to="0" class="active"></li>
		    <li data-target="#banner" data-slide-to="1"></li>
		    <li data-target="#banner" data-slide-to="2"></li>
		  </ul>
		  
		  <!-- The slideshow -->
		  <div class="carousel-inner">

		    <div class="carousel-item active">
		      	<a href="#!"><img src="images/banner/index_banner.jpg" alt="Slide 1" class="lazy" data-src="example.jpg"></a>
		      <div class="carousel-caption">
			    <h1>Caption</h1>
			  </div>
			</div>

		    <div class="carousel-item">
		      <a href="#!"><img src="images/banner/index_banner.jpg" alt="Slide 2" class="lazy" data-src="example.jpg"></a>
		      <div class="carousel-caption">
			    <h1>Caption</h1>
			  </div>
		    </div>

		    <div class="carousel-item">
		      <a href="#!"><img src="images/banner/index_banner.jpg" alt="Slide 3" class="lazy" data-src="example.jpg"></a>
		      <div class="carousel-caption">
			    <h1>Caption</h1>
			  </div>
		    </div>

		  </div>
		</div>
	</section>
	<!-- end slider_section -->



	<!-- pipper_standard -->
	<section class="pipper_standard">

		<?php 
		  include 'side_menu.php';
		?>

		<div class="pipper_header animatable fadeInUp slower">
			<div class="leaf"><img src="images/header_leaf_green.png" class="lazy" data-src="example.jpg"></div>
			<header>Why <span>Pipper</span><br>Standard</header>
		</div>
		<div class="pipper_circle">
			<img src="images/pipper_circle.png" class="circle animatable fadeInUp slow lazy" data-src="example.jpg">
			<!-- <h2 class="pipper_baby animatable bounceInLeft slower delay-1s">Pipper<br>for Babies
				<div class="icon_arrow"><img src="images/arrow_right.png"></div>
			</h2>
			<h2 class="pipper_allergy animatable bounceInRight slower delay-2s">Pipper<br>for Health<br>&amp; Allergies
				<div class="icon_arrow"><img src="images/arrow_left.png"></div>
			</h2>
			<h2 class="pipper_environment animatable bounceInRight slower delay-3s">Pipper for<br>Environment
				<div class="icon_arrow"><img src="images/arrow_left.png"></div>
			</h2> -->
		</div>
	</section>
	<!-- end pipper_standard -->




	<!-- product_banner -->
	<section class="product_banner">
		<div class="pipper_header center_leaf">
			<div class="animatable fadeInUp slower">
				<div class="leaf"><img src="images/header_leaf_white.png" alt="Pipper" class="lazy" data-src="example.jpg"></div>
				<header><span>Pipper</span><br>Products</header>
			</div>
		</div>

		<div class="product_banner_slider">
			<div id="product_banner" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner">

			    <div class="carousel-item active">
			      <div class="row">
			      	<div class="col-xl-3 col-lg-12 offset-xl-2 product_description">
			      		<h1><a href="product_listing.php">Laundry Care</a></h1>
			      		<content>Pipper Standard Laundry 
Detergent, Fabric Softener, 
and Stain Remover can clean your clothes safely without using toxic chemicals!</content>
						<!-- <content class="thai">สเครดิตไตรมาสซี้เฟิร์ม รูบิกเทวาธิราชแฟนซีเฟอร์รี่แรลลี่ เทรลเลอร์จิตพิสัยโหงวโครนา ซูโม่ไฮเทคคอนแท็ค ดีกรีเอ็นทรานซ์ คอนโดมิเนียมโมเดิร์นคอนโดครัวซองไหร่ โคโยตี้อพาร์ตเมนท์</content> -->
						<div class="button_wrapper">
							<button class="btn_green" onclick="window.location.href
			  						='product_listing.php'">
								View all <i class="fas fa-play"></i>
							</button>
							<div class="icon">
								<img src="images/icon_laundry.png" class="lazy" data-src="example.jpg">
							</div>
						</div>
			      	</div>
			      	<div class="col-xl-7 col-lg-12 product_image">
			      		<img src="images/product_banner/banner1.png">
			      		<div class="mascot">
			      			<img src="images/pipper_mascot.png" class="jump animated slow">
			      		</div>
			      	</div>
			      </div>
			    </div>

			    <div class="carousel-item">
			      <div class="row">
			      	<div class="col-xl-3 col-lg-12 offset-xl-2 product_description">
			      		<h1><a href="product_listing.php">Home Care</a></h1>
			      		<content>Create a healthy, safe home 
environment by eliminating 
potentially dangerous chemical cleaners and using our natural, safe and powerful household cleaning products.</content>
						<div class="button_wrapper">
							<button class="btn_green" onclick="window.location.href
			  						='product_listing.php'">
								View all <i class="fas fa-play"></i>
							</button>
							<div class="icon">
								<img src="images/icon_home.png">
							</div>
						</div>
			      	</div>
			      	<div class="col-xl-7 col-lg-12 product_image">
			      		<img src="images/product_banner/banner2.png">
			      	</div>
			      </div>
			    </div>

			    <div class="carousel-item">
			      <div class="row">
			      	<div class="col-xl-3 col-lg-12 offset-xl-2 product_description">
			      		<h1><a href="product_listing.php">Personal Care</a></h1>
			      		<content>A difference you can touch</content>
						<div class="button_wrapper">
							<button class="btn_green" onclick="window.location.href
			  						='product_listing.php'">
								View all <i class="fas fa-play"></i>
							</button>
							<div class="icon">
								<img src="images/icon_personal.png">
							</div>
						</div>
			      	</div>
			      	<div class="col-xl-7 col-lg-12 product_image">
			      		<img src="images/product_banner/banner3.png" class="lazy" data-src="example.jpg">
			      	</div>
			      </div>
			    </div>

			  </div>

			  <a class="carousel-control-prev animatable fadeInLeft" href="#product_banner" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next animatable fadeInRight" href="#product_banner" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
		
	</section>
	<!-- end product_banner -->



	<!-- tip_trend_testimonial -->
	<section class="tip_trend_testimonial">

		<div class="half_pineapple">
			<img src="images/half_pineapple.png" alt="Pipper" class="lazy" data-src="example.jpg">
		</div>

		<div class="pipper_header animatable fadeInUp slower">
			<div class="leaf"><img src="images/header_leaf_green.png" alt="Pipper" class="lazy" data-src="example.jpg"></div>
			<header><span>Tips, Trends</span><br>&amp; Testimonials</header>
		</div>

		<div class="tip_trend_slide_wrap">
			<div id="tip_trend_slide" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner">

			    <div class="carousel-item active">
			      <p>ซักผ้าขาวให้สะอาดหมดจดกับเบกกิ้งโซดา</p>
			      <div class="tip_image">
			      	<a href="tip_detail.php"><img src="images/tip_trend/tip1.png" alt="Tip 1" class="lazy" data-src="example.jpg"></a>
			      </div>
			      <div class="readmore">
			      	<a href="tip_detail.php">Read More <i class="fas fa-play"></i></a>
			      </div>
			    </div>

			    <div class="carousel-item">
			      <p>ซักผ้าขาวให้สะอาดหมดจดกับเบกกิ้งโซดา</p>
			      <div class="tip_image">
			      	<a href="tip_detail.php"><img src="images/tip_trend/tip1.png" alt="Tip 1" class="lazy" data-src="example.jpg"></a>
			      </div>
			      <div class="readmore">
			      	<a href="tip_detail.php">Read More <i class="fas fa-play"></i></a>
			      </div>
			    </div>

			    <div class="carousel-item">
			      <p>ซักผ้าขาวให้สะอาดหมดจดกับเบกกิ้งโซดา</p>
			      <div class="tip_image">
			      	<a href="tip_detail.php"><img src="images/tip_trend/tip1.png" alt="Tip 1" class="lazy" data-src="example.jpg"></a>
			      </div>
			      <div class="readmore">
			      	<a href="tip_detail.php">Read More <i class="fas fa-play"></i></a>
			      </div>
			    </div>

			  </div>

			  <a class="carousel-control-prev animatable fadeInLeft" href="#tip_trend_slide" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next animatable fadeInRight" href="#tip_trend_slide" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>


			  <div class="pineapple_mascot">
			  	<img src="images/pineapple_mascot.png" class="jump animated slow lazy" alt="Pipper" data-src="example.jpg">
			  </div>

			  <div class="shadow">
			  	<img src="images/shadow_pineapple.png" alt="Pipper" class="lazy" data-src="example.jpg">
			  </div>

			</div>
		</div>
		
	</section>
	<!-- end tip_trend_testimonial -->




	<!-- news_section -->
	<section class="news_section">
		<div class="pipper_header animatable fadeInUp slower">
			<div class="leaf"><img src="images/header_leaf_green.png"></div>
			<header>What's<br><span>new</span></header>
		</div>


		<!-- news_wrapper Desktop -->
		<div class="news_wrapper d-none d-xl-block">
			<div class="row">

				<div class="col-xl-4 col-lg-4 news_box animatable fadeInUp slower">
					<div class="news_image">
						<a href="news_detail.php"><img src="images/news/news1.jpg"></a>
					</div>

					<div class="row news_post">
						<p class="col-xl-6 col-lg-6 col-sm-6 col-6 date">
							15 Feb 2018
						</p>
						<p class="col-xl-6 col-lg-6 col-sm-6 col-6 view">
							<strong>43</strong> Views
						</p>
					</div>

					<!-- <content>
						Pipper Standard receives 
‘All Natural Excellence 
Award’
					</content> -->
					<content class="thai">
						มิลค์ฮิปฮอปเรซินยูวีดยุก หมั่นโถว หลวงพี่ เอ็นจีโอเก๋ากี้แซ็ก เซ็กซี่สารขัณฑ์หงวน 
					</content>

					<div class="readmore">
				      	<a href="news_detail.php">Read More <i class="fas fa-play"></i></a>
				     </div>
				</div>

				<div class="col-xl-4 col-lg-4 news_box animatable fadeInUp slower delay-1s">
					<div class="news_image">
						<a href="news_detail.php"><img src="images/news/news2.jpg"></a>
					</div>
					<div class="row news_post">
						<p class="col-xl-6 col-lg-6 col-sm-6 col-6 date">
							11 Jan 2018
						</p>
						<p class="col-xl-6 col-lg-6 col-sm-6 col-6 view">
							<strong>75</strong> Views
						</p>
					</div>

					<content>
						Front page of CEO Plus 
column in Thansetthakij 
newspaper on Pipper...
					</content>

					<div class="readmore">
				      	<a href="news_detail.php">Read More <i class="fas fa-play"></i></a>
				     </div>
				</div>

				<div class="col-xl-4 col-lg-4 news_box animatable fadeInUp slower delay-2s">
					<div class="news_image">
						<a href="news_detail.php"><img src="images/news/news3.jpg"></a>
					</div>
					<div class="row news_post">
						<p class="col-xl-6 col-lg-6 col-sm-6 col-6 date">
							27 Nov 2018
						</p>
						<p class="col-xl-6 col-lg-6 col-sm-6 col-6 view">
							<strong>99</strong> Views
						</p>
					</div>

					<content>
						Exclusive interview with 
Business Plus on 
PipperStandard global ...
					</content>

					<div class="readmore">
				      	<a href="news_detail.php">Read More <i class="fas fa-play"></i></a>
				     </div>
				</div>

			</div>


			<div class="more_news">
				<a href="news_listing.php">Read More <i class="fas fa-play"></i></a>
			</div>

		</div>
		<!-- end news_wrapper -->



		<!-- news_wrapper Mobile -->
		<div class="news_wrapper d-block d-xl-none">
			<div class="row owl-carousel owl-theme" id="home_news">

				<div class="col-xl-4 col-lg-4 news_box animatable fadeInUp slower">
					<div class="news_image">
						<a href="news_detail.php"><img src="images/news/news1.jpg"></a>
					</div>

					<div class="row news_post">
						<p class="col-xl-6 col-lg-6 col-sm-6 col-6 date">
							15 Feb 2018
						</p>
						<p class="col-xl-6 col-lg-6 col-sm-6 col-6 view">
							<strong>43</strong> Views
						</p>
					</div>

					<!-- <content>
						Pipper Standard receives 
‘All Natural Excellence 
Award’
					</content> -->
					<content class="thai">
						มิลค์ฮิปฮอปเรซินยูวีดยุก หมั่นโถว หลวงพี่ เอ็นจีโอเก๋ากี้แซ็ก เซ็กซี่สารขัณฑ์หงวน 
					</content>

					<div class="readmore">
				      	<a href="news_detail.php">Read More <i class="fas fa-play"></i></a>
				     </div>
				</div>

				<div class="col-xl-4 col-lg-4 animated news_box">
					<div class="news_image">
						<a href="news_detail.php"><img src="images/news/news2.jpg"></a>
					</div>
					<div class="row news_post">
						<p class="col-xl-6 col-lg-6 col-sm-6 col-6 date">
							11 Jan 2018
						</p>
						<p class="col-xl-6 col-lg-6 col-sm-6 col-6 view">
							<strong>75</strong> Views
						</p>
					</div>

					<content>
						Front page of CEO Plus 
column in Thansetthakij 
newspaper on Pipper...
					</content>

					<div class="readmore">
				      	<a href="news_detail.php">Read More <i class="fas fa-play"></i></a>
				     </div>
				</div>

				<div class="col-xl-4 col-lg-4 animated news_box">
					<div class="news_image">
						<a href="news_detail.php"><img src="images/news/news3.jpg"></a>
					</div>
					<div class="row news_post">
						<p class="col-xl-6 col-lg-6 col-sm-6 col-6 date">
							27 Nov 2018
						</p>
						<p class="col-xl-6 col-lg-6 col-sm-6 col-6 view">
							<strong>99</strong> Views
						</p>
					</div>

					<content>
						Exclusive interview with 
Business Plus on 
PipperStandard global ...
					</content>

					<div class="readmore">
				      	<a href="news_detail.php">Read More <i class="fas fa-play"></i></a>
				     </div>
				</div>

			</div>


			<div class="more_news">
				<a href="news_listing.php">Read More <i class="fas fa-play"></i></a>
			</div>

		</div>
		<!-- end news_wrapper -->


	</section>
	<!-- end news_section -->



	<!-- btn_top -->
	<section class="btn_top animatable fadeIn">
		<a href="#top">
			<div class="icon"><i class="fas fa-chevron-up"></i></div>
			<p>Top</p>
		</a>
	</section>
	<!-- end btn_top -->



	<?php 
	  include 'footer.php';
	?>

</div>
<!-- end wrapper -->




    

