<?php 
  $page = 'products';
  $title = 'Pipper - Products Detail';
  include 'meta.php';
  include 'header.php';
?>


<!-- wrapper -->
<div class="wrapper" data-role="page" id="index">



	<!-- news_listing_section -->
	<section class="news_listing_section">

		<?php 
		  include 'side_menu.php';
		?>

		<div class="product_banner_top">
			<div class="pipper_header center_leaf">
				<div class="animatable fadeInUp slower">
					<div class="leaf"><img src="images/header_leaf_white.png" alt="Pipper" class="lazy" data-src="example.jpg"></div>
					<header><span>Pipper</span><br>Products</header>
				</div>
			</div>
			<div class="pipper_breadcrumb">
				<div class="inside_wrapper">
					<a href="home.php">Home</a>
					<span>/</span>
					<a href="#!">Products</a>
					<span>/</span>
					<a href="#!">Laundry Care</a>
					<span>/</span>
					<p><a href="#!">Natural Laundry Detergent</a>
					<span>/</span></p>
					<p><a href="#!" class="active">LEMONGRASS SCENT</a></p>
				</div>
			</div>


			<div class="m_product_banner_top d-block d-xl-none fadeInUp slow animated">
				<img src="images/products/m_product_list_banner.jpg" alt="Pipper" class="lazy" data-src="example.jpg">
			</div>

		</div>



		<!-- pro_category_wrapper -->
		<div class="pro_category_wrapper">
			<div id="product_category" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner animatable fadeInUp slower">

			    <div class="carousel-item active category_box">
			    	<h1>Laundry Care</h1>
			    	<div class="description">
			    		<content>
			    			Pipper Standard Laundry Detergent, Fabric Softener, and Stain Remover can clean your clothes safely without using toxic chemicals! 
			    		</content>
			    	</div>
			    	<div class="category_filter">
			    		<select>
			    			<option class="option_style">All Laundry Care</option>
			    			<option class="option_style">Natural Laundry Detergent</option>
			    			<option class="option_style">Natural Fabric Softener</option>
			    			<option class="option_style">Natural Stain Remover</option>
			    		</select>
			    	</div>
			    </div>

			    <div class="carousel-item category_box">
			    	<h1>Home Care</h1>
			    	<div class="description">
			    		<content>
			    			Pipper Standard Laundry Detergent, Fabric Softener, and Stain Remover can clean your clothes safely without using toxic chemicals! 
			    		</content>
			    	</div>
			    	<div class="category_filter">
			    		<select>
			    			<option class="option_style">1</option>
			    			<option class="option_style">2</option>
			    			<option class="option_style">3</option>
			    			<option class="option_style">4</option>
			    		</select>
			    	</div>
			    </div>

			    <div class="carousel-item category_box">
			    	<h1>Personal Care</h1>
			    	<div class="description">
			    		<content>
			    			Pipper Standard Laundry Detergent, Fabric Softener, and Stain Remover can clean your clothes safely without using toxic chemicals! 
			    		</content>
			    	</div>
			    	<div class="category_filter">
			    		<select>
			    			<option class="option_style">1</option>
			    			<option class="option_style">2</option>
			    			<option class="option_style">3</option>
			    			<option class="option_style">4</option>
			    		</select>
			    	</div>
			    </div>

			  </div>

			  <a class="carousel-control-prev fadeInLeft animated" href="#product_category" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next fadeInRight animated" href="#product_category" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
		<!-- end pro_category_wrapper -->


		<div class="btn_blue_wrapper animatable fadeInDown slow delay-1s">
			<p><i class="fas fa-chevron-down"></i></p>
		</div>



		<!-- news_listing -->
		<div class="news_listing inside_wrapper">

			<!-- container-fluid -->
			<div class="container-fluid">

				<!-- Natural Laundry Detergent -->
				<div class="row animatable fadeInUp slower">
					<div class="col-xl-12 col-lg-12 pro_category_header">
						<img src="images/decor_green_leaf.png" alt="Pipper" class="lazy" data-src="example.jpg">
						<span>Natural Laundry Detergent</span>
					</div>
				</div>


				<!-- product_detail_wrapper -->
				<div class="product_detail_wrapper">
					<div class="product_detail_header animatable fadeInUp slower">
						<div class="row">
							<div class="col-xl-10 col-lg-10 topic">
								<h1>Natural Laundry Detergent, Lemongrass Scent<span>900 ml</span></h1>
							</div>
							<!-- <div class="col-xl-2 col-lg-2 shopnow">
								<a class="btn_shopnow" href="#!"><span>Shop now</span></a>
							</div> -->
						</div>
					</div>


					<!-- product_detail_slider -->
					<div class="product_detail_slider animatable fadeInUp slower">
						<!-- product_slider -->
						<div id="product_slider" class="carousel slide" data-ride="carousel">

							<div class="row">

								<div class="col-xl-6 col-lg-6 offset-xl-1 offset-lg-1">
									<div class="carousel-inner">
						                <div class="carousel-item active">
						                    <img src="images/products/product1_large.png" alt="Product 1 Large" class="lazy" data-src="example.jpg">
						                </div>
						                <div class="carousel-item">
						                    <img src="images/products/product1_large.png" alt="Product 1 Large" class="lazy" data-src="example.jpg">
						                </div>         
						            </div>
								</div>

								<div class="col-xl-4 col-lg-4">
									<div class="clearfix">
								        <div id="thumbcarousel" class="carousel slide" data-interval="false">
								            <div class="carousel-inner">
								                <div class="item active">
								                    <div data-target="#product_slider" data-slide-to="0" class="thumb active">
								                    	<img src="images/products/product1.png" alt="Product 1" class="lazy" data-src="example.jpg">
								                    </div>
								                    <div data-target="#product_slider" data-slide-to="1" class="thumb">
								                    	<img src="images/products/product1.png" alt="Product 1" class="lazy" data-src="example.jpg">
								                    </div>
								                </div><!-- /item -->
								            </div><!-- /carousel-inner -->

								        </div> <!-- /thumbcarousel -->
								    </div><!-- /clearfix -->
								</div>

							</div>
						</div>
						<!-- end product_slider -->
					</div>
					<!-- end product_detail_slider -->

					<div class="btn_shopnow_wrapper animatable fadeInUp slower">
						<div class="shopnow">
							<a class="btn_shopnow" href="#!"><span>Shop now</span></a>
						</div>
					</div>


					<div class="product_detail_share animatable fadeInRight slower">
						<span>Print</span>
						<a href="#!"><i class="fas fa-print"></i></a>
						<span>Share :</span>
						<a href="#!"><i class="fab fa-facebook-f"></i></a>
						<a href="#!"><i class="fab fa-twitter"></i></a>
						<a href="#!"><i class="fab fa-line"></i></a>
					</div>

					<div class="general_description animatable fadeInUp slower">
						<h3>General Description</h3>
						<p><strong>1 bottle of our signature Lemongrass laundry detergent</strong></p>
						
						<ul>
							<li>Hypoallergenic Certified</li>
							<li>Free of Known Allergens</li>
							<li>Fights tough stains, rinses off easily, less foam</li>
							<li>Effectively removes bad odors</li>
							<li>Gentle for all fabric types</li>
							<li>Eco-friendly from start to finish</li>
						</ul>

						<p><strong>How to Use</strong></p>
						<p><strong>Pretreat:</strong> Pour onto stained fabric, rub gently and soak.</p>
						<p>For front loading machines, fill to line 1, or 30 ml. For top loading machines, fill to line 2, or 40ml.</p>
						<p>For hand washing, use 30 ml per 10 liters of water.</p>


						<div class="icon d-block d-xl-none">
							<p><i class="fas fa-chevron-up"></i></p>
						</div>

					</div>

				</div>
				<!-- end product_detail_wrapper -->



				<div class="button_wrapper animatable fadeInUp slower">
					<div class="button_wrapper_inside">
						<a class="disabled" href="#!">
							<i class="fas fa-chevron-left"></i>
							Previous
						</a>
						<div class="line"></div>
						<a href="#!">
							Next
							<i class="fas fa-chevron-right"></i>
						</a>
					</div>
				</div>



			</div>
			<!-- end container-fluid -->
		</div>
		<!-- end news_listing -->


		<div class="back_to_news_wrapper animatable fadeInUp slower">
			<div class="btn_prev">
				<a href="news_listing.php">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				</a>
			</div>
			<div class="btn_text">
				<p>
					<a href="product_listing.php">Back to Natural Laundry Detergent</a>
				</p>
			</div>
		</div>


		
	</section>
	<!-- end news_listing_section -->




	





	



	<!-- btn_top -->
	<section class="btn_top animatable fadeIn" style="margin-top: 50px;">
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




    

