<body>


	<!-- navbar -->
    <nav class="navbar navbar-expand-xl navbar-light" id="top">
      <div class="logo_wrapper">
	  	<a class="navbar-brand animatable fadeInUp slower" href="home.php"><img src="images/pipper_logo.png" alt="Pipper Logo"></a>
	  </div>

	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" id="btn_mobile_menu">
	    <!-- <span class="navbar-toggler-icon"></span> -->
	    <i class="fas fa-align-right"></i>
	  </button>


	<div class="collapse navbar-collapse flex-column ml-lg-0 ml-3" id="navbarCollapse">

	    <div class="navbar-nav header_top">
	    	<div class="btn_header_about">
	    		<span><a href="aboutus.php" <?php if($page == 'about'){ echo ' class="active"';}?>>About Us</a></span>
	    	</div>

	    	<ul class="ml-auto">
	            <li class="nav-item search_box">
	                <form class="form-inline ml-auto">
			            <input type="text" name="search" class="search">
			            <div class="search_icon">
			            	<a href="#!"><i class="fas fa-search"></i></a>
			            </div>
			        </form>
	            </li>
	            <li class="nav-item social_box">
	                <a class="social" href="#!">
	                	<i class="fab fa-facebook-f"></i>
	                </a>
	                <a class="social" href="#!">
	                	<i class="fab fa-twitter"></i>
	                </a>
	                <a class="social" href="#!">
	                	<i class="fab fa-instagram"></i>
	                </a>
	                <a class="social" href="#!">
	                	<i class="fab fa-line"></i>
	                </a>
	                <a class="social" href="#!">
	                	<i class="fab fa-youtube"></i>
	                </a>
	            </li>
	            <li class="nav-item shopping_button">
	                <a href="#!">
	                	<!-- <img src="images/icon_cart.png"> -->
	                	<div class="shopping_icon"></div>
	                	<span>Shop Now!</span>
	                </a>
	            </li>
	            <li class="nav-item language_section">
	                <select data-role="none">
	                	<option>EN</option>
	                	<option>TH</option>
	                </select>
	            </li>
            </ul>
        </div>


        <ul class="navbar-nav flex-row mb-2 ml-auto header_bottom">
            <li class="nav-item">
                <a class="nav-link <?php if($page == 'pipper'){ echo 'active';}?>" href="whypipper.php">Why Pipper</a>
            </li>
            <li class="nav-item" id="btn_submenu">
                <a class="nav-link <?php if($page == 'products'){ echo 'active';}?>" href="#!">Products</a>

                <div class="submenu">
                	<div class="icon"><i class="fas fa-caret-down"></i></div>
                	<ul>
                		<li><a href="product_listing.php">Laundry Care</a></li>
                		<li><a href="product_listing.php">Home Care</a></li>
                		<li><a href="product_listing.php">Personal Care</a></li>
                	</ul>
                </div>

            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($page == 'news'){ echo 'active';}?>" href="news_listing.php" >What's new</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($page == 'tips'){ echo 'active';}?>" href="tip_listing.php">Tips &amp; Trends</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($page == 'contact'){ echo 'active';}?>" href="contact.php">Contact</a>
            </li>
        </ul>



	  </div>

	  
	</nav>
	<!-- end navbar -->




	<!-- mobile_menu_wrapper -->
	<div class="mobile_menu_wrapper" id="mobile_menu_wrapper">

		<div class="btn_close">
			<a href="#!" id="btn_close"><i class="fas fa-times"></i></a>
		</div>

		<div class="container">
			<div class="menu_wrapper">
				<ul>
					<li><a href="home.php">Home</a></li>
					<li><a href="aboutus.php">About Us</a></li>
					<li><a href="whypipper.php">Why Pipper</a></li>
					<li class="product_menu">
						<a href="product_listing.php" class="product_head">Products <i class="fas fa-sort-down"></i></a>
						<ul class="submenu">
							<li><a href="product_listing.php">Laundry Care</a></li>
							<li><a href="product_listing.php">Home Care</a></li>
							<li><a href="product_listing.php">Personal Care</a></li>
						</ul>
					</li>
					<li><a href="news_listing.php">What's New</a></li>
					<li><a href="tip_listing.php">Tips &amp; Trends</a></li>
					<li><a href="#!">Where to buy</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li>
						<img src="images/m_cart.png" class="m_cart">
						<strong><a href="#!">Shop Now!</a></strong>
					</li>
					<li class="m_language_section">
						<a href="#!">
							<select>
								<option>EN</option>
								<option>TH</option>
							</select>
						</a>
					</li>
				</ul>


			</div>
		</div>


		<hr>
			<div class="m_social">
				<a class="social" href="#!">
                	<i class="fab fa-facebook-f"></i>
                </a>
                <a class="social" href="#!">
                	<i class="fab fa-twitter"></i>
                </a>
                <a class="social" href="#!">
                	<i class="fab fa-instagram"></i>
                </a>
                <a class="social" href="#!">
                	<i class="fab fa-line"></i>
                </a>
                <a class="social" href="#!">
                	<i class="fab fa-youtube"></i>
                </a>
			</div>
		<hr>


		<div class="m_search_box">
			<form class="form-inline ml-auto">
	            <input type="text" name="search" class="search">
	            <div class="search_icon">
	            	<a href="#!"><i class="fas fa-search"></i></a>
	            </div>
	        </form>
		</div>


		<div class="m_pineapple">
			<img src="images/m_pineapple.png" class="jump animated slow
">
		</div>


	</div>
	<!-- end mobile_menu_wrapper -->

	<!-- <script type="text/javascript">
		$(".m_search_box .search").after("add your smiley here");
	</script> -->