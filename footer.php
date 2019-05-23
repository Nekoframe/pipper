
	<footer>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-2 col-lg-2 col-4 contact">
					<a href="#!">Contact</a>
				</div>

				<div class="col-xl-3 col-lg-3 col-8 social_box">
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

				<div class="col-xl-7 col-lg-7 col-12 copyright">
					<p>COPYRIGHT © 2018 PIPPER STANDARD. ALL RIGHT RESERVED.</p>
				</div>
			</div>
		</div>
	</footer>



	

  <!-- Banner & Carousel -->
  <script type="text/javascript">
  	$('#banner').carousel({
	  interval: 5000,
	});

	$('#product_banner').carousel({
	  interval: 5000,
	});

	$('#news_detail_banner').carousel({
	  interval: false,
	});

	$('#m_news_detail_banner').carousel({
	  interval: false,
	});

	$('#product_category').carousel({
	  interval: false,
	});

	$('#product_slider').carousel({
	  interval: false,
	});
  </script>


  <script type="text/javascript">
  	// News Listing
  	$(document).ready(function(){
	  	$("#news_list").owlCarousel({
	        items: 3,
	        margin: 40,
  		});
	});
  </script>


  <!-- Product Slider Thumbnails -->
  <script type="text/javascript">
  	$('#thumbcarousel .thumb').click(function(){
		// $('#mobile_menu_wrapper').toggleClass('active');
		$('.thumb.active').removeClass('active');
		$(this).addClass('active');
	});
  </script>



<!-- Mobile & Tablet Carousel -->
<script type="text/javascript">
    // News
    $(document).ready(function () {
  
    var checkWidth = $(document).width();

    // ipad & mobile
    if(checkWidth <=768){
      // Lastest news in Club pages
      $("#home_news").owlCarousel({
        items: 1
      });


      $("#m_news_list").owlCarousel({
        items: 1
      });

    }
    
  });

</script>


<!-- Smooth Scrolling -->
<script type="text/javascript">
	// Select all links with hashes
// $('a[href*="#"]')
$('a[href="#top"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 3000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
</script>


<!-- Mobile Menu -->
<script type="text/javascript">
	$('#btn_mobile_menu').click(function(){
		$('#mobile_menu_wrapper').toggleClass('active');
	});

	$('#btn_close').click(function(){
		$('#mobile_menu_wrapper').toggleClass('active');
	});
</script>


<!-- Side Menu Tabs -->
<script type="text/javascript">
	function openMenu(evt, tabName) {
	    var i, tabcontent, tablinks;
	    tabcontent = document.getElementsByClassName("tabcontent");
	    for (i = 0; i < tabcontent.length; i++) {
	        tabcontent[i].style.display = "none";
	    }
	    tablinks = document.getElementsByClassName("tablinks");
	    for (i = 0; i < tablinks.length; i++) {
	        tablinks[i].className = tablinks[i].className.replace(" active", "");
	    }
	    document.getElementById(tabName).style.display = "block";
	    evt.currentTarget.className += " active";
	}

	// Get the element with id="defaultOpen" and click on it
	// document.getElementById("defaultOpen").click();
</script>


<!-- Side menu show/hide -->
<script type="text/javascript">
	$('button.menu_slide').click(function(){
		$('.side_menu_wrapper').addClass('active');
	});

	$('.tabcontent .btn_close').click(function(){
		$('.side_menu_wrapper').removeClass('active');
		$('.tablinks.active').removeClass('active');
	});
</script>


<!-- Read More Text Why Pipper -->
<script>
	function readmoretext() {
	  $('.read-more-target').addClass('active');
	  $('.readmore_hide').hide(0);
	}
</script>





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


<!-- Product Submenu -->
<script type="text/javascript">

	$(document).ready(function() {
	    $("#btn_submenu").on("mouseenter", function() {
	        $('.submenu').addClass('active');
	    }).on("mouseleave", function() {
	        $('.submenu').removeClass('active');
	    });
	});

</script>


</body>

    

</html>