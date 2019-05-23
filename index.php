<?php 
  $page = 'landing';
  $title = 'Pipper - Landing';
  include 'meta.php';
  // include 'header.php';
?>


<body>

	<!-- landing_banner -->
	<section class="landing_banner">

		<div class="landing_leaf animatable bounceInLeft slower delay-1s">
			<div class="logo_wrapper">
				<a href="index.php"><img src="images/pipper_logo.png" alt="Pipper Logo" class="lazy" data-src="example.jpg"></a>
			</div>
		</div>

	</section>
	<!-- end landing_banner -->


	<!-- region_section -->
	<section class="region_section">
		
		<div class="container">
			<div class="region_wrapper">
				<p>Please select your region</p>
				<p class="jump animated slow"><i class="fas fa-chevron-down"></i></p>
				<ul class="country_list">
					<li><a href="home.php">Thailand</a></li>
					<li><a href="home.php">China</a></li>
					<li><a href="home.php">Vietnam</a></li>
					<li><a href="home.php">Singapore</a></li>
					<li><a href="home.php">Taiwan</a></li>
				</ul>

				<div class="copyright">
					<span>COPYRIGHT © 2018 PIPPER STANDARD. ALL RIGHT RESERVED.</span>
				</div>
			</div>
		</div>

	</section>
	<!-- end region_section -->

</body>
    

<!-- Animation -->
<script type="text/javascript">
// Trigger CSS animations on scroll.
// Detailed explanation can be found at http://www.bram.us/2013/11/20/scroll-animations/

// Looking for a version that also reverses the animation when
// elements scroll below the fold again?
// --> Check https://codepen.io/bramus/pen/vKpjNP

jQuery(function($) {
  
  // Function which adds the 'animated' class to any '.animatable' in view
  var doAnimations = function() {
    
    // Calc current offset and get all animatables
    // var offset = $(window).scrollTop() + $(window).height(),
    var offset = $(window).scrollTop() + $(window).height(),
        $animatables = $('.animatable');

    
    // Unbind scroll handler if we have no animatables
    if ($animatables.size() == 0) {
      $(window).off('scroll', doAnimations);
    }
    
    // Check all animatables and animate them if necessary
    $animatables.each(function(i) {
       var $animatable = $(this);
      // if (($animatable.offset().top + $animatable.height() - 20) < offset) {
        if (($animatable.offset().top + 100) < offset) {
        $animatable.removeClass('animatable').addClass('animated');
      }
    });

  };
  
  // Hook doAnimations on scroll, and trigger a scroll
  $(window).on('scroll', doAnimations);
  $(window).trigger('scroll');

});
</script>


<!-- Fade in Page on Load -->
<script type="text/javascript">
	$(document).ready(function(){

	/*! Fades in page on load */
	$('body').css('display', 'none');
	$('body').fadeIn(1000);

	});
</script>

