<!-- <div class="spacer s2"></div>
<div id="trigger2" class="spacer s0"></div> -->

<div class="side_menu_wrapper animatable bounceInRight slow" id="followed_menu">


	<div class="tab">
	  <button class="tablinks menu_slide btn_cart" onclick="openMenu(event, 'list_menu')">
	  	<!-- <i class="fas fa-align-right menu"></i> -->
	  	Menu

	  	<div class="icon_cart">
	  	</div>
	  </button>
	  <!-- <button class="tablinks menu_slide" onclick="openMenu(event, 'language_menu')">
	  		EN <i class="fas fa-caret-down language"></i>
	  </button>
	  <button class="tablinks btn_cart">
	  	<div class="icon_cart">
	  	</div>
	  <p>shop<br>now!</p>
	  </button> -->
	</div>

	<div id="list_menu" class="tabcontent">
		<div class="btn_close">
			<a href="#!" id="btn_close"><i class="fas fa-times"></i></a>
		</div>


	  <ul class="list_menu">
	  	<li>
	  		<a href="home.php">Home</a>
	  	</li>
	  	<li>
	  		<a href="aboutus.php">about us</a>
	  	</li>
	  	<li>
	  		<a href="whypipper.php">Why Pipper</a>
	  	</li>
	  	<li class="product">
	  		<a href="product_listing.php">Products <i class="fas fa-caret-down language"></i></a>
	  		<ul class="list_submenu">
	  			<li><a href="product_listing.php">Laundry Care</a></li>
	  			<li><a href="product_listing.php">Home Care</a></li>
	  			<li><a href="product_listing.php">Personal Care</a></li>
	  		</ul>
	  	</li>
	  	<li>
	  		<a href="news_listing.php">What's new</a>
	  	</li>
	  	<li>
	  		<a href="tip_listing.php">Tips &amp; Trends</a>
	  	</li>
	  	<li>
	  		<a href="https://www.pipperstandard.com/th-laundry-care?___store=th" target="_blank">Where to buy</a>
	  	</li>
	  	<li>
	  		<a href="contact.php">Contact</a>
	  	</li>

	  	<li class="language_section">
	  		<select data-role="none">
            	<option>EN</option>
            	<option>TH</option>
            	<option>CN</option>
            </select>
	  	</li>

	  	<li class="shopnow">
			
			<strong>
				<a href="#!">
					<!-- <img src="images/m_cart.png" class="m_cart"> -->
					<div class="icon_cart"></div>
					Shop Now!
				</a>
			</strong>
		</li>
	  </ul>
	</div>

	<div id="language_menu" class="tabcontent">
		<div class="btn_close">
			<a href="#!" id="btn_close"><i class="fas fa-times"></i></a>
		</div>

		<ul class="list_menu">
		  	<li>
		  		<a href="#!" class="active">English</a>
		  	</li>
		  	<li>
		  		<a href="#!">Thai</a>
		  	</li>
		  	<li>
		  		<a href="#!">Chinese</a>
		  	</li>
		</ul>
	</div>

</div>