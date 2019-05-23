<?php 
  $page = 'products';
  $title = 'Pipper - Products Listing';
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
				<div class="animatable fadeInUp slower
">
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
					<a href="#!" class="active">Laundry Care</a>
					<!-- <span>/</span>
					<p><a href="#!" class="active">Natural Laundry Detergent</a></p> -->
				</div>
			</div>


			<div class="m_product_banner_top d-block d-xl-none animatable fadeInUp slow">
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
				<div class="row animatable fadeInUp slower delay-1s">
					<div class="col-xl-12 col-lg-12 pro_category_header">
						<img src="images/decor_green_leaf.png" alt="Pipper" class="lazy" data-src="example.jpg">
						<span>Natural Laundry Detergent</span>
					</div>
				</div>


				<!-- product_show -->
				<div class="row product_show">
					<div class="col-xl-4 col-lg-4 product_box animatable fadeInUp slower">
						<div class="product_image">
							<a href="product_detail.php"><img src="images/products/product1.png" alt="Product 1" class="lazy" data-src="example.jpg"></a>
						</div>
						<div class="product_desc">
							<content>Natural Laundry Detergent, 
Lemongrass Scent</content>
							<p>900 ml</p>
							<a href="product_detail.php">
								More
								<i class="fas fa-play"></i>
							</a>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 offset-xl-4 offset-lg-4 product_box animatable fadeInUp slower">
						<div class="product_image">
							<a href="product_detail.php"><img src="images/products/product2.png" alt="Product 2" class="lazy" data-src="example.jpg"></a>
						</div>
						<div class="product_desc">
							<content>Natural Laundry Detergent, 
Lemongrass Scent</content>
							<p>900 ml</p>
							<a href="product_detail.php">
								More
								<i class="fas fa-play"></i>
							</a>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 product_box animatable fadeInUp slower">
						<div class="product_image">
							<a href="product_detail.php"><img src="images/products/product3.png" alt="Product 3" class="lazy" data-src="example.jpg"></a>
						</div>
						<div class="product_desc">
							<content>Natural Laundry Detergent, 
Lemongrass Scent</content>
							<p>750 ml</p>
							<a href="product_detail.php">
								More
								<i class="fas fa-play"></i>
							</a>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 offset-xl-4 offset-lg-4 product_box animatable fadeInUp slower">
						<div class="product_image">
							<a href="product_detail.php"><img src="images/products/product4.png" alt="Product 4" class="lazy" data-src="example.jpg"></a>
						</div>
						<div class="product_desc">
							<content>Natural Laundry Detergent, 
Lemongrass Scent</content>
							<p>750 ml</p>
							<a href="product_detail.php">
								More
								<i class="fas fa-play"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- end product_show -->


				<hr class="product_line">



				<!-- Natural Fabric Softener -->
				<div class="row animatable fadeInUp slower">
					<div class="col-xl-12 col-lg-12 pro_category_header">
						<img src="images/decor_green_leaf.png" alt="Pipper" class="lazy" data-src="example.jpg">
						<span>Natural Fabric Softener</span>
					</div>
				</div>


				<!-- product_show -->
				<div class="row product_show">
					<div class="col-xl-4 col-lg-4 product_box animatable fadeInUp slower">
						<div class="product_image">
							<a href="product_detail.php"><img src="images/products/product5.png" alt="Product 5" class="lazy" data-src="example.jpg"></a>
						</div>
						<div class="product_desc">
							<content>Natural Fabric Softener, 
Floral Scent</content>
							<p>900 ml</p>
							<a href="product_detail.php">
								More
								<i class="fas fa-play"></i>
							</a>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 offset-xl-4 offset-lg-4 product_box animatable fadeInUp slower">
						<div class="product_image">
							<a href="product_detail.php"><img src="images/products/product6.png" alt="Product 6" class="lazy" data-src="example.jpg"></a>
						</div>
						<div class="product_desc">
							<content>Natural Fabric Softener, 
Natural Scent</content>
							<p>900 ml</p>
							<a href="product_detail.php">
								More
								<i class="fas fa-play"></i>
							</a>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 product_box animatable fadeInUp slower">
						<div class="product_image">
							<a href="product_detail.php"><img src="images/products/product7.png" alt="Product 7" class="lazy" data-src="example.jpg"></a>
						</div>
						<div class="product_desc">
							<content>Natural Fabric Softener, 
Floral Scent</content>
							<p>750 ml</p>
							<a href="product_detail.php">
								More
								<i class="fas fa-play"></i>
							</a>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 offset-xl-4 offset-lg-4 product_box animatable fadeInUp slower">
						<div class="product_image">
							<a href="product_detail.php"><img src="images/products/product8.png" alt="Product 8" class="lazy" data-src="example.jpg"></a>
						</div>
						<div class="product_desc">
							<content>Natural Fabric Softener, 
Natural Scent</content>
							<p>750 ml</p>
							<a href="product_detail.php">
								More
								<i class="fas fa-play"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- end product_show -->





				<hr class="product_line">



				<!-- Natural Stain Remover -->
				<div class="row animatable fadeInUp slower">
					<div class="col-xl-12 col-lg-12 pro_category_header">
						<img src="images/decor_green_leaf.png" alt="Pipper" class="lazy" data-src="example.jpg">
						<span>Natural Stain Remover</span>
					</div>
				</div>


				<!-- product_show -->
				<div class="row product_show" style="margin-bottom: 100px;">
					<div class="col-xl-4 col-lg-4 product_box animatable fadeInUp slower">
						<div class="product_image">
							<a href="product_detail.php"><img src="images/products/product9.png" alt="Product 9" class="lazy" data-src="example.jpg"></a>
						</div>
						<div class="product_desc">
							<content>Natural Stain Remover, 
Lemongrass Scent</content>
							<p>400 ml</p>
							<a href="product_detail.php">
								More
								<i class="fas fa-play"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- end product_show -->
				


			</div>
			<!-- end container-fluid -->
		</div>
		<!-- end news_listing -->


		
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




    

