<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Suunto Store | ค้นหาตัวแทนจำหน่าย</title>
	<link rel="apple-touch-icon" href="images/logo.png">
<link rel="shortcut icon" href="images/favicon.ico">
  <link rel="stylesheet" href="{{ asset('css/css_old/bootstrap.css') }}" type="text/css"  />
  <link rel="stylesheet" href="{{ asset('css/css_old/style.css') }}" type="text/css"  />
<link rel="stylesheet" href="{{ asset('css/css_old/dark.css') }}" type="text/css" />

<!-- Agency Demo Specific Stylesheet -->
<link rel="stylesheet" href="{{ asset('css/css_old/agency.css') }}" type="text/css" />
<!-- / -->

<link rel="stylesheet" href="{{ asset('css/css_old/font-icons.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('css/css_old/animate.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('css/css_old/magnific-popup.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('css/css_old/responsive.css') }}" type="text/css" />

<link rel="stylesheet" href="{{ asset('css/css_old/colors.php') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('css/css_old/pricing-table.css') }}" type="text/css" />

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110078473-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-110078473-1');
</script>
<style>
.gallery-title
{
    font-size: 12px;
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
    font-size: 12px;
    text-align: center;
    color: #BEBEBE;
    margin-bottom: 12px;

}
.filter-button:hover
{
    font-size: 12px;
    
    text-align: center;
    color: #BEBEBE;
    

}
.btn-default:active .filter-button:active
{
    background-color: #FF0000;
	font-size: 12px;
    color: white;
}





</style>
</head>
<body class="stretched">

    <!-- Document Wrapper
      ============================================= -->
    <div id="wrapper" class="clearfix">
			

		<main >
                        @yield('content')
                    </main>


 <!-- Footer
        ============================================= -->
	  <footer id="footer"> 
      
			<!-- Copyrights
			    ============================================= -->
			<div id="copyrights">
			  <div class="container clearfix">
			    <div class="col-md-12" align="center"><font color="#FFFFFF"> For more information. Contact Authorized Suunto Sole Distributor. </font> </div>
			    <div class="col-md-12" align="center"> <div"> <a href="https://www.facebook.com/SuuntoTH">
				<img class="image_fade" src="{{url('images/facebook.png')}}" content="Suunto Store | ค้นหาตัวแทนจำหน่าย"></a>
        &nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.instagram.com/suuntoth/">
          <img class="image_fade" src="{{url('images/instagram.png')}}" content="Suunto Store | ค้นหาตัวแทนจำหน่าย"></a>
          &nbsp;&nbsp;&nbsp;&nbsp;<a href="https://line.me/R/ti/p/%40vgp7927v">
        <img class="image_fade" src="{{url('images/line.png')}}" content="Suunto Store | ค้นหาตัวแทนจำหน่าย"></a> </div>
			    <div class="clear"></div>
			  </div>
			</div>
			</div>
			<!-- #copyrights end --> 
			
		    </footer>
		    <!-- #footer end -->
		    
		    </div>
		    <!-- #wrapper end --> 
		    
		    <!-- Go To Top
			============================================= -->
		    <div id="gotoTop" class="icon-angle-up"></div>
		    
		    <!-- External JavaScripts
			============================================= --> 
			<script type="text/javascript" src="{{asset('js/js_old/plugins.js' )}}" defer></script> 
				
			<!-- Footer Scripts
			  ============================================= --> 
			<script type="text/javascript" src="{{asset('js/js_old/functions.js' )}}" defer></script>
		    </body>
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
		</html>
	