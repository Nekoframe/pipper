<?php 
  $page = 'news';
  $title = 'Pipper - News Listing';
  include 'meta.php';
  include 'header.php';
?>


<!-- wrapper -->
<div class="wrapper" data-role="page" id="index">

	<!-- slider_section -->
	<section class="slider_section">
		<!-- <div class="banner_image">
			<img src="images/news/news_listing_banner.jpg">
		</div> -->

		<?php 
		  include 'side_menu.php';
		?>
	</section>
	<!-- end slider_section -->



	<!-- news_listing_section -->
	<section class="news_listing_section">

		
		<div class="pipper_header center_leaf">
			<div class="animatable fadeInUp slower">
				<div class="leaf"><img src="images/header_leaf_white.png" alt="Pipper" class="lazy" data-src="example.jpg"></div>
				<header><span>What's</span><br>News</header>
			</div>
		</div>


		
		<div class="pipper_breadcrumb">
			<div class="inside_wrapper">
				<a href="home.php">Home</a>
				<span>/</span>
				<a href="#!" class="active">What's New</a>
			</div>
		</div>


		<div class="news_listing inside_wrapper">
			<div class="container-fluid">
				<div class="row animatable fadeInUp slower" id="blockContainer">
					<div class="col-xl-9 col-lg-9 year">
						<img src="images/decor_green_leaf.png" alt="Pipper" class="lazy" data-src="example.jpg">
						<span>2018</span>
					</div>

					<div class="col-xl-2 col-lg-2 offset-xl-1 offset-lg-1 filter">
						<select>
							<option>View by Year</option>
							<option>View by ....</option>
						</select>
					</div>
				</div>




				<!-- news_wrapper -->
				<div class="news_wrapper">

						<!-- Desktop news_list -->
						<div class="owl-carousel owl-theme d-none d-xl-block" id="news_list">

							<!-- 1 -->
							<div class="news_box_wrapper">
								<div class="news_box animatable fadeInUp slower">
									<div class="news_image">
										<a href="news_detail.php"><img src="images/news/news1.jpg" alt="News 1" class="lazy" data-src="example.jpg"></a>
									</div>

									<div class="row news_post">
										<p class="col-xl-6 col-lg-6 col-sm-6 col-6 date">
											15 Feb 2018
										</p>
										<p class="col-xl-6 col-lg-6 col-sm-6 col-6 view">
											<strong>43</strong> Views
										</p>
									</div>

									<content>
										Pipper Standard receives 
			‘All Natural Excellence 
			Award’
									</content>

									<div class="readmore">
								      	<a href="news_detail.php">Read More <i class="fas fa-play"></i></a>
								     </div>
								</div>

								<div class="news_box animatable fadeInUp slower">
									<div class="news_image">
										<a href="news_detail.php"><img src="images/news/news1.jpg" alt="News 1" class="lazy" data-src="example.jpg"></a>
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
							</div>




							<div class="news_box_wrapper">
								<div class="news_box animatable fadeInUp slower delay-1s">
									<div class="news_image">
										<a href="news_detail.php"><img src="images/news/news2.jpg" alt="News 2" class="lazy" data-src="example.jpg"></a>
									</div>

									<div class="row news_post">
										<p class="col-xl-6 col-lg-6 col-sm-6 col-6 date">
											15 Feb 2018
										</p>
										<p class="col-xl-6 col-lg-6 col-sm-6 col-6 view">
											<strong>43</strong> Views
										</p>
									</div>

									<content>
										Pipper Standard receives 
			‘All Natural Excellence 
			Award’
									</content>

									<div class="readmore">
								      	<a href="news_detail.php">Read More <i class="fas fa-play"></i></a>
								     </div>
								</div>

								<div class="news_box animatable fadeInUp slower delay-1s">
									<div class="news_image">
										<a href="news_detail.php"><img src="images/news/news2.jpg" alt="News 2" class="lazy" data-src="example.jpg"></a>
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
							</div>
							

							

							<div class="news_box_wrapper">
								<div class="news_box animatable fadeInUp slower delay-2s">
									<div class="news_image">
										<a href="news_detail.php"><img src="images/news/news3.jpg" alt="News 3" class="lazy" data-src="example.jpg"></a>
									</div>

									<div class="row news_post">
										<p class="col-xl-6 col-lg-6 col-sm-6 col-6 date">
											15 Feb 2018
										</p>
										<p class="col-xl-6 col-lg-6 col-sm-6 col-6 view">
											<strong>43</strong> Views
										</p>
									</div>

									<content>
										Pipper Standard receives 
			‘All Natural Excellence 
			Award’
									</content>

									<div class="readmore">
								      	<a href="news_detail.php">Read More <i class="fas fa-play"></i></a>
								     </div>
								</div>

								<div class="news_box animatable fadeInUp slower delay-2s">
									<div class="news_image">
										<a href="news_detail.php"><img src="images/news/news3.jpg" alt="News 3" class="lazy" data-src="example.jpg"></a>
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
							</div>



							<!-- 2 -->
							<div class="news_box_wrapper">
								<div class="news_box animated">
									<div class="news_image">
										<a href="news_detail.php"><img src="images/news/news1.jpg" alt="News 1" class="lazy" data-src="example.jpg"></a>
									</div>

									<div class="row news_post">
										<p class="col-xl-6 col-lg-6 col-sm-6 col-6 date">
											15 Feb 2018
										</p>
										<p class="col-xl-6 col-lg-6 col-sm-6 col-6 view">
											<strong>43</strong> Views
										</p>
									</div>

									<content>
										Pipper Standard receives 
			‘All Natural Excellence 
			Award’
									</content>

									<div class="readmore">
								      	<a href="news_detail.php">Read More <i class="fas fa-play"></i></a>
								     </div>
								</div>

								<div class="news_box animated">
									<div class="news_image">
										<a href="news_detail.php"><img src="images/news/news1.jpg" alt="News 1" class="lazy" data-src="example.jpg"></a>
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
							</div>




							<div class="news_box_wrapper">
								<div class="news_box animated">
									<div class="news_image">
										<a href="news_detail.php"><img src="images/news/news2.jpg" alt="News 2" class="lazy" data-src="example.jpg"></a>
									</div>

									<div class="row news_post">
										<p class="col-xl-6 col-lg-6 col-sm-6 col-6 date">
											15 Feb 2018
										</p>
										<p class="col-xl-6 col-lg-6 col-sm-6 col-6 view">
											<strong>43</strong> Views
										</p>
									</div>

									<content>
										Pipper Standard receives 
			‘All Natural Excellence 
			Award’
									</content>

									<div class="readmore">
								      	<a href="news_detail.php">Read More <i class="fas fa-play"></i></a>
								     </div>
								</div>

								<div class="news_box animated">
									<div class="news_image">
										<a href="news_detail.php"><img src="images/news/news2.jpg" alt="News 2" class="lazy" data-src="example.jpg"></a>
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
							</div>
							

							

							<div class="news_box_wrapper">
								<div class="news_box animated">
									<div class="news_image">
										<a href="news_detail.php"><img src="images/news/news3.jpg" alt="News 3" class="lazy" data-src="example.jpg"></a>
									</div>

									<div class="row news_post">
										<p class="col-xl-6 col-lg-6 col-sm-6 col-6 date">
											15 Feb 2018
										</p>
										<p class="col-xl-6 col-lg-6 col-sm-6 col-6 view">
											<strong>43</strong> Views
										</p>
									</div>

									<content>
										Pipper Standard receives 
			‘All Natural Excellence 
			Award’
									</content>

									<div class="readmore">
								      	<a href="news_detail.php">Read More <i class="fas fa-play"></i></a>
								     </div>
								</div>

								<div class="news_box animated">
									<div class="news_image">
										<a href="news_detail.php"><img src="images/news/news3.jpg" alt="News 3" class="lazy" data-src="example.jpg"></a>
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
							</div>


							<!-- 3 -->
							<div class="news_box_wrapper">
								<div class="news_box animated">
									<div class="news_image">
										<a href="news_detail.php"><img src="images/news/news1.jpg" alt="News 1" class="lazy" data-src="example.jpg"></a>
									</div>

									<div class="row news_post">
										<p class="col-xl-6 col-lg-6 col-sm-6 col-6 date">
											15 Feb 2018
										</p>
										<p class="col-xl-6 col-lg-6 col-sm-6 col-6 view">
											<strong>43</strong> Views
										</p>
									</div>

									<content>
										Pipper Standard receives 
			‘All Natural Excellence 
			Award’
									</content>

									<div class="readmore">
								      	<a href="news_detail.php">Read More <i class="fas fa-play"></i></a>
								     </div>
								</div>

								<div class="news_box animated">
									<div class="news_image">
										<a href="news_detail.php"><img src="images/news/news1.jpg" alt="News 1" class="lazy" data-src="example.jpg"></a>
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
							</div>




							<div class="news_box_wrapper">
								<div class="news_box animated">
									<div class="news_image">
										<a href="news_detail.php"><img src="images/news/news2.jpg" alt="News 2" class="lazy" data-src="example.jpg"></a>
									</div>

									<div class="row news_post">
										<p class="col-xl-6 col-lg-6 col-sm-6 col-6 date">
											15 Feb 2018
										</p>
										<p class="col-xl-6 col-lg-6 col-sm-6 col-6 view">
											<strong>43</strong> Views
										</p>
									</div>

									<content>
										Pipper Standard receives 
			‘All Natural Excellence 
			Award’
									</content>

									<div class="readmore">
								      	<a href="news_detail.php">Read More <i class="fas fa-play"></i></a>
								     </div>
								</div>

								<div class="news_box animated">
									<div class="news_image">
										<a href="news_detail.php"><img src="images/news/news2.jpg" alt="News 2" class="lazy" data-src="example.jpg"></a>
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
							</div>
							

							

							<div class="news_box_wrapper">
								<div class="news_box animated">
									<div class="news_image">
										<a href="news_detail.php"><img src="images/news/news3.jpg" alt="News 3" class="lazy" data-src="example.jpg"></a>
									</div>

									<div class="row news_post">
										<p class="col-xl-6 col-lg-6 col-sm-6 col-6 date">
											15 Feb 2018
										</p>
										<p class="col-xl-6 col-lg-6 col-sm-6 col-6 view">
											<strong>43</strong> Views
										</p>
									</div>

									<content>
										Pipper Standard receives 
			‘All Natural Excellence 
			Award’
									</content>

									<div class="readmore">
								      	<a href="news_detail.php">Read More <i class="fas fa-play"></i></a>
								     </div>
								</div>

								<div class="news_box animated">
									<div class="news_image">
										<a href="news_detail.php"><img src="images/news/news3.jpg" alt="News 3" class="lazy" data-src="example.jpg"></a>
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
							</div>

						</div>
						<!-- end Desktop news_list -->




						<!-- Mobile news_list -->
						<div class="owl-carousel owl-theme d-block d-xl-none" id="m_news_list">

							<!-- 1 -->
							<div class="news_box_wrapper">
								<div class="news_box animatable fadeInUp slower">
									<div class="news_image">
										<a href="news_detail.php"><img src="images/news/news1.jpg" alt="News 1" class="lazy" data-src="example.jpg"></a>
									</div>

									<div class="row news_post">
										<p class="col-xl-6 col-lg-6 col-sm-6 col-6 date">
											15 Feb 2018
										</p>
										<p class="col-xl-6 col-lg-6 col-sm-6 col-6 view">
											<strong>43</strong> Views
										</p>
									</div>

									<content>
										Pipper Standard receives 
			‘All Natural Excellence 
			Award’
									</content>

									<div class="readmore">
								      	<a href="news_detail.php">Read More <i class="fas fa-play"></i></a>
								     </div>
								</div>

								<div class="news_box animatable fadeInUp slower">
									<div class="news_image">
										<a href="news_detail.php"><img src="images/news/news1.jpg" alt="News 1" class="lazy" data-src="example.jpg"></a>
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


								<div class="news_box animatable fadeInUp slower">
									<div class="news_image">
										<a href="news_detail.php"><img src="images/news/news3.jpg" alt="News 3" class="lazy" data-src="example.jpg"></a>
									</div>

									<div class="row news_post">
										<p class="col-xl-6 col-lg-6 col-sm-6 col-6 date">
											15 Feb 2018
										</p>
										<p class="col-xl-6 col-lg-6 col-sm-6 col-6 view">
											<strong>43</strong> Views
										</p>
									</div>

									<content>
										Pipper Standard receives 
			‘All Natural Excellence 
			Award’
									</content>

									<div class="readmore">
								      	<a href="news_detail.php">Read More <i class="fas fa-play"></i></a>
								     </div>
								</div>

							</div>



							<!-- 2 -->
							<div class="news_box_wrapper">
								<div class="news_box animated">
									<div class="news_image">
										<a href="news_detail.php"><img src="images/news/news1.jpg" alt="News 1" class="lazy" data-src="example.jpg"></a>
									</div>

									<div class="row news_post">
										<p class="col-xl-6 col-lg-6 col-sm-6 col-6 date">
											15 Feb 2018
										</p>
										<p class="col-xl-6 col-lg-6 col-sm-6 col-6 view">
											<strong>43</strong> Views
										</p>
									</div>

									<content>
										Pipper Standard receives 
			‘All Natural Excellence 
			Award’
									</content>

									<div class="readmore">
								      	<a href="news_detail.php">Read More <i class="fas fa-play"></i></a>
								     </div>
								</div>

								<div class="news_box animated">
									<div class="news_image">
										<a href="news_detail.php"><img src="images/news/news1.jpg" alt="News 1" class="lazy" data-src="example.jpg"></a>
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


								<div class="news_box animated">
									<div class="news_image">
										<a href="news_detail.php"><img src="images/news/news3.jpg" alt="News 3" class="lazy" data-src="example.jpg"></a>
									</div>

									<div class="row news_post">
										<p class="col-xl-6 col-lg-6 col-sm-6 col-6 date">
											15 Feb 2018
										</p>
										<p class="col-xl-6 col-lg-6 col-sm-6 col-6 view">
											<strong>43</strong> Views
										</p>
									</div>

									<content>
										Pipper Standard receives 
			‘All Natural Excellence 
			Award’
									</content>

									<div class="readmore">
								      	<a href="news_detail.php">Read More <i class="fas fa-play"></i></a>
								     </div>
								</div>

							</div>




							<!-- 3 -->
							<div class="news_box_wrapper">
								<div class="news_box animated">
									<div class="news_image">
										<a href="news_detail.php"><img src="images/news/news1.jpg" alt="News 1" class="lazy" data-src="example.jpg"></a>
									</div>

									<div class="row news_post">
										<p class="col-xl-6 col-lg-6 col-sm-6 col-6 date">
											15 Feb 2018
										</p>
										<p class="col-xl-6 col-lg-6 col-sm-6 col-6 view">
											<strong>43</strong> Views
										</p>
									</div>

									<content>
										Pipper Standard receives 
			‘All Natural Excellence 
			Award’
									</content>

									<div class="readmore">
								      	<a href="news_detail.php">Read More <i class="fas fa-play"></i></a>
								     </div>
								</div>

								<div class="news_box animated">
									<div class="news_image">
										<a href="news_detail.php"><img src="images/news/news1.jpg" alt="News 1" class="lazy" data-src="example.jpg"></a>
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


								<div class="news_box animated">
									<div class="news_image">
										<a href="news_detail.php"><img src="images/news/news3.jpg" alt="News 3" class="lazy" data-src="example.jpg"></a>
									</div>

									<div class="row news_post">
										<p class="col-xl-6 col-lg-6 col-sm-6 col-6 date">
											15 Feb 2018
										</p>
										<p class="col-xl-6 col-lg-6 col-sm-6 col-6 view">
											<strong>43</strong> Views
										</p>
									</div>

									<content>
										Pipper Standard receives 
			‘All Natural Excellence 
			Award’
									</content>

									<div class="readmore">
								      	<a href="news_detail.php">Read More <i class="fas fa-play"></i></a>
								     </div>
								</div>

							</div>











						</div>
						<!-- end Mobile news_list -->


				</div>
				<!-- end news_wrapper -->


			</div>
		</div>


		
	</section>
	<!-- end news_listing_section -->




	





	



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




    

