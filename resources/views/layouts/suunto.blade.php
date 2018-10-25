<!DOCTYPE html>
<html lang="th">
<head>
<title>SUUNTO | bts </title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashion Models Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->

<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

<link href="{{ asset('css/style.css') }}" rel="stylesheet">

<link href="{{ asset('css/mainStyles.css') }}" rel="stylesheet">
<!-- flexslider -->

<link href="{{ asset('css/flexslider.css') }}" rel="stylesheet">
<!-- //flexslider -->
<!-- gallery-Swipe-box -->
<link href="{{ asset('css/swipebox.css') }}" rel="stylesheet">
<!-- //gallery-Swipe-box -->

<!-- font-awesome-icons -->

<link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Pacifico&amp;subset=cyrillic,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
</head>	
<body>
	
		<div class="loader"></div>
		
            <main class="py-4">
                        @yield('content')
                    </main>
                    
                    

                    <div class="footer w3-w3layouts">
		<div class="container">
			<div class="footer-agiletop">
				<ul>   
					<li><i class="fa fa-phone"></i> +01 222 111 444 </li> 
					<li><a href="mailto:example@mail.com"><i class="fa fa-envelope-o"></i>  mail@example.com</a></li>
					<li><i class="fa fa-map-marker"></i> 123 Sebastian, New York City, USA.</li>
				</ul> 
			</div>
			<div class="footer-agileinfo">
				<div class="col-md-6 col-sm-6 footer-wthreegrid">
					<h3>About Modeling</h3>
					<div class="col-xs-4 footer-wthreegridimg"> 
						<img src="images/f1.jpg" class="img-responsive" alt=""/>
					</div>
					<div class="col-xs-8 footerabt-w3text"> 
						<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames. </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-3 col-sm-3 footer-wthreegrid">
					<h3>Recent Posts</h3>
					<ul>
						<li><a href="#myModal" data-toggle="modal"><i class="fa fa-angle-right"></i>Vestibulum felis</a></li>
						<li><a href="#myModal" data-toggle="modal"><i class="fa fa-angle-right"></i>Mauris at tellus</a></li>
						<li><a href="#myModal" data-toggle="modal"><i class="fa fa-angle-right"></i>Donec ut lectus</a></li>
						<li><a href="#myModal" data-toggle="modal"><i class="fa fa-angle-right"></i>Vitae interdum</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-3 footer-wthreegrid footer-tags">
					<h3>Tag Cloud</h3>
					<ul>
						<li><a href="#home" class="scroll">Home</a></li>
						<li><a href="#about" class="scroll">About</a></li>
						<li><a href="#team" class="scroll">Team</a></li>
						<li><a href="#gallery" class="scroll">Gallery</a></li>
						<li><a href="#contact" class="scroll">Contact Us</a></li>
					</ul>
				</div> 
				<div class="clearfix"> </div>
			</div>  
		</div>
	</div>
	<div class="copy-right"> 
		<div class="container">
                        <p>© 2018 Suunto . All rights reserved | Design by <a> Intership.</a></p>
		</div> 
	</div> 
	<!-- //footer -->   


<!-- js -->

<script src="{{ asset('js/jquery-2.1.4.min.js') }}" ></script>
<!-- //js -->
<script src="{{ asset('js/mainScript.js') }}"></script>
<script src="{{ asset('js/rgbSlide.min.js') }}" ></script>

<!-- FlexSlider -->
<script src="{{ asset('js/jquery.flexslider.js') }}" ></script>
  
	<script type="text/javascript">
    $(window).load(function(){
      $('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: true,
        slideshow: false,
        itemWidth: 102,
        itemMargin: 5,
        asNavFor: '#slider'
      });

      $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: true,
        slideshow: true,
        sync: "#carousel",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
<!-- //FlexSlider -->

<!-- script-for-swipebox -->
   
      <script src="{{ asset('js/jquery.swipebox.min.js') }}" ></script>
	<script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
	</script>
<!-- //script-for-swipebox -->

<!-- start-smooth-scrolling -->

<script src="{{ asset('js/SmoothScroll.min.js') }}" ></script>
<!-- start-smooth-scrolling -->

<script src="{{ asset('js/move-top.js') }}"></script>

<script src="{{ asset('js/easing.js') }}" ></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>


<script src="{{ asset('js/bootstrap.js') }}" ></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->


<script type="text/javascript">
	$(window).load(function() {
		$(".loader").fadeOut("slow");
	})
	</script>









<style>
	.loader {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url('images/loade.gif') 50% 50% no-repeat rgb(249,249,249);
}
.gallery-title
{
    font-size: 36px;
    color: #42B32F;
    text-align: center;
    font-weight: 500;
    margin-bottom: 70px;
}
.gallery-title:after {
    content: "";
    position: absolute;
    width: 7.5%;
    left: 46.5%;
    height: 45px;
    border-bottom: 1px solid #5e5e5e;
}
.filter-button
{
    font-size: 18px;
    border: 1px solid #42B32F;
    border-radius: 5px;
    text-align: center;
    color: #42B32F;
    margin-bottom: 30px;

}
.filter-button:hover
{
    font-size: 18px;
    border: 1px solid #42B32F;
    border-radius: 5px;
    text-align: center;
    color: #ffffff;
    background-color: #42B32F;

}
.btn-default:active .filter-button:active
{
    background-color: #42B32F;
    color: white;
}

.port-image
{
    width: 100%;
}

.gallery_product
{
    margin-bottom: 30px;
}


</style>

<script>
$(document).ready(function(){

$(".filter-button").click(function(){
    var value = $(this).attr('data-filter');
    
    if(value == "all")
    {
        //$('.filter').removeClass('hidden');
        $('.filter').show('1000');
    }
    else
    {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
        $(".filter").not('.'+value).hide('3000');
        $('.filter').filter('.'+value).show('3000');
        
    }
});

if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});
</script>









</body>
</html>