@extends('layouts.suunto')
@section('content')
<!-- banner -->
	<div class="banner" id="home">
		<nav class="navbar navbar-default">
			<div class="navbar-header navbar-left">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="{{url('/')}}" ><img src="{{url('images/logo-agency.png')}}" width="100px"></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<nav class="link-effect-2" id="link-effect-2">
					<ul class="nav navbar-nav">
					<li class="active"><a href="{{url('/')}}" ><span data-hover="หน้าแรก">หน้าแรก</span></a></li>
						<li><a href="#about" class="scroll"><span data-hover="เกี่ยวกับ">เกี่ยวกับ</span></a></li>
						<li><a href="#team" class="scroll"><span data-hover="ค้นหาร้านออนไลน์">ค้นหาร้านออนไลน์</span></a></li>
						<li><a href="#events" class="scroll"><span data-hover="ค้นหาตัวแทนจำหน่าย">ค้นหาตัวแทนจำหน่าย</span></a></li>
						<li><a href="#contact" class="scroll"><span data-hover="USER GUIDE">USER GUIDE</span></a></li>
					</ul>
				</nav>
			
			</div>
		<!--	<div class="w3_agile_search">
				<form action="#" method="post">
					<input type="search" name="Search" placeholder="Search Keywords..." required="" />
					<input type="submit" value="Search">
				</form>

			</div> -->
		</nav>
		</div>
<!-- /banner -->	
    <div id="exampleSlider">
		
        <div>
			
		
		</div>
        <div>
	</div>
         <div>
	</div>
    </div>
	<!-- //banner -->
	<!-- about -->
<div class="w3layouts-about" id="about">
	<div class="container">
		<div class="w3-about-grids">
			<div class="col-md-6 w3-about-left">
				  <section class="slider">
					<div id="slider" class="flexslider">
					  <ul class="slides">
						<li>
							<img src="images/ab1.jpg" alt="" />
						</li>
						<li>
							<img src="images/ab2.jpg" alt="" />
						</li>
						<li>
							<img src="images/ab3.jpg" alt="" />
						</li>
						<li>
							<img src="images/ab4.jpg" alt="" />
						</li>
						<li>
							<img src="images/ab5.jpg" alt="" />
						</li>
						<li>
							<img src="images/ab6.jpg" alt="" />
						</li>
						<li>
							<img src="images/ab7.jpg" alt="" />
						</li>
						<li>
							<img src="images/ab8.jpg" alt="" />
						</li>
						<li>
							<img src="images/ab9.jpg" alt="" />
						</li>
						<li>
							<img src="images/ab10.jpg" alt="" />
						</li>
					  </ul>
					</div>
					<div id="carousel" class="flexslider">
					  <ul class="slides">
						<li>
							<img src="images/ab1.jpg" alt="" />
						</li>
						<li>
							<img src="images/ab2.jpg" alt="" />
						</li>
						<li>
							<img src="images/ab3.jpg" alt="" />
						</li>
						<li>
							<img src="images/ab4.jpg" alt="" />
						</li>
						<li>
							<img src="images/ab5.jpg" alt="" />
						</li>
						<li>
							<img src="images/ab6.jpg" alt="" />
						</li>
						<li>
							<img src="images/ab7.jpg" alt="" />
						</li>
						<li>
							<img src="images/ab8.jpg" alt="" />
						</li>
						<li>
							<img src="images/ab9.jpg" alt="" />
						</li>
						<li>
							<img src="images/ab10.jpg" alt="" />
						</li>
					  </ul>
					</div>
				  </section>
			</div>
			<div class="col-md-6 w3-about-right">
				<h1>SUUNTO คือ</h1>
				
				<p>นาฬิกาจีพีเอส มัลติสปอร์ต(GPS Watch) ที่ทำให้การเล่นกีฬา มีประสิทธิภาพมากขึ้นด้วยวัสดุคุณภาพ การออกแบบพรีเมีียม รองรับกีฬาได้มากถึง 80 ชนิดกีฬา พร้อมบอกข้อมูลแต่ละชนิดกีฬาได้อย่างละเอียด สามารถติดตามความคืบหน้าส่วนบุคคลได้ เช่น สามารถวัดอัตราการเผาผลาญแคลอรี่(Calories burned) คอยติดตามการฟื้นฟูของร่างกาย(Recovery Mode) วัดอัตราการเต้นของหัวใจ(Heart Rate Monitoring) รวมทั้งยังมีแอฟพลิเคชั่น Suunto Movescount ที่คอยเก็บข้อมูลและบันทึกประวัติการออกกำลังกายของคุณได้อย่างครบถ้วนและสมบูรณ์
					
				
				
				
				</span></p>
				<div class="w3l-button">
					<a href="#" data-toggle="modal" data-target="#myModal">More</a>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //about -->
<!-- modal -->
	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						<h4 class="modal-title">Fashion</h4>
				</div> 
				<div class="modal-body">
					<div class="agileits-w3layouts-info">
						<img src="images/a2.jpg" alt="" />
						<p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis porttitor quis. Suspendisse ultrices hendrerit massa. Nam id metus id tellus ultrices ullamcorper.  Cras tempor massa luctus, varius lacus sit amet, blandit lorem. Duis auctor in tortor sed tristique. Proin sed finibus sem.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->
	<!-- what -->
	<div class="w3-team banner-bottom " id="team">
		<div class="container">
		  	<h3 class="w3ls_head" > ค้นหาร้านออนไลน์ </h3>
			<!--<p class="w3agile"></p>-->
				<div class="about-info-grids">
				<div class="col-md-4 col-sm-4 ">
					<br><br>
					<a href="http://www.11street.co.th/store/MiniMallAction/getMiniMallHome.do?sellerHmpgUrl=suunto"><img src="{{url('images/s1.jpg')}}" class="img-responsive" /></a>
				</div>

				<div class="col-md-4 col-sm-4">
					<br><br>
					<a href="http://www.bananarun.com/catalogsearch/result/?cat=&q=suunto"> <img src="{{url('images/s2.jpg')}}" class="img-responsive" alt=""/></a>
				</div>

				<div class="col-md-4 col-sm-4">
					<br><br>
					<a href="http://www.wemall.com/shop/suunto">	<img src="{{url('images/s3.jpg')}}" class="img-responsive" alt=""/> </a>
				</div>
					
				<div class="col-md-4 col-sm-4">
				       <br><br>
					 <a href="http://tsmactive.com/?route=product/isearch&search=suunto&description=true"> 	<img src="{{url('images/s4.jpg')}}" class="img-responsive" alt=""/></a>
				</div>

				<div class="col-md-4 col-sm-4">
					<br><br>
					<a href="https://www.looksi.com/catalog/suunto/">	<img src="{{url('images/s6.jpg')}}" class="img-responsive" alt=""/> </a>
				</div>

				<div class="col-md-4 col-sm-4">
					<br><br>
					<a href="http://www.avarinshop.com/?s=suunto&product_cat=0&post_type=product">		<img src="{{url('images/s7.jpg')}}" class="img-responsive" alt=""/></a>
				</div>

				<div class="col-md-4 col-sm-4">
					<br><br>
					<a href="http://www.lazada.co.th/catalog/?q=suunto">	<img src="{{url('images/s8.jpg')}}" class="img-responsive" alt=""/> </a>
				</div>

				<div class="col-md-4 col-sm-4">
					<br><br>
					<a href="https://www.thepuffinhouse.com/landing">	<img src="{{url('images/s9.jpg')}}" class="img-responsive" alt=""/> </a>
				</div>

				<div class="col-md-4 col-sm-4">
				<br><br>
				<a href="http://shoponline.bananastore.com/loadmore/?producttype=gadget&catename=smartwatch&productcat=activity-tracker">	<img src="{{url('images/s10.jpg')}}" class="img-responsive" alt=""/> </a>
				</div>

					<div class="clearfix"></div>
		</div>
	</div>
	</div>
<!-- //what -->	


<!-- /fashion events -->
<div class="w3-Events" id="events">
	<div class="w3-head-all">
		<h3 class="w3ls_head">ค้นหาตัวแทนจำหน่าย</h3>
		</div>
		<div class="w3-Events-grids">
			<div class="col-md-3 w3-Events-bg1  w3-Events-heading">
			   <h3>01<span>ใกล้ BTS</span></h3>
			    <p>BTS</p>
				<a href="{{url('/bts')}}"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
			</div>
			<div class="col-md-3 w3-Events-bg2  w3-Events-heading">
			   <h3>02<span>ใกล้ MRT</span></h3>
			    <p>MRT</p>
				<a href="{{url('/mrt')}}" ><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
			</div>
			<div class="col-md-3 w3-Events-bg3  w3-Events-heading">
			   <h3>03<span>ใกล้ ห้าง</span></h3>
			    <p>SHOPPINGMALL</p>
				<a href="{{url('/shopping_mall')}}" ><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
			</div> 
			<div class="col-md-3 w3-Events-bg4  w3-Events-heading">
			   <h3>04<span>อื่นๆ</span></h3>
			    <p>OTHER</p>
				<a href="{{url('/otherBKK')}}" ><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
			</div>
		
			<div class="clearfix"></div>
		</div>
</div>

	
	




<!-- /form -->
<div class="w3-contact-form" id="contact">
	<div class="container">
	<div class="w3-head-all">
		         <h3 class="w3ls_head"> Contact us </h3>
		       </div>
<div class="left">
			<form action="#" method="post" data-toggle="validator">
				<div class="form-group">
					<label for="firstname" class="control-label">First Name:</label>
					<input type="text" class="form-control" id="firstname" placeholder="First Name" data-error="Enter Your First Name" required>
					<div class="help-block with-errors"></div>
				</div>
				<div class="form-group">
					<label for="lastname" class="control-label">Last Name:</label>
					<input type="text" class="form-control" id="lastname" placeholder="Last Name" data-error="Enter Your Last Name" required>
					<div class="help-block with-errors"></div>
				</div>
				<div class="form-group">
					<label for="inputEmail" class="control-label">Email:</label>
					<input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="This email address is invalid" required>
					<div class="help-block with-errors"></div>
				</div>
				<div class="form-group">
					<label for="Phone" class="control-label">Phone:</label>
					<input type="text" class="form-control" id="Phone" placeholder="Phone" data-error="Enter Your Phone Number" required>
					<div class="help-block with-errors"></div>
				</div>
				<div class="form-group">
					<label for="inputPassword" class="control-label">Password:</label>
					<div class="form-inline row">
						<div class="form-group col-sm-6 agileits-w3layouts">
							<input type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required>
							<div class="help-block">Minimum of 6 characters</div>
						</div>
						<div class="form-group col-sm-6 w3-agile">
							<input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match"
							    placeholder="Confirm Password" required>
							<div class="help-block with-errors"></div>
						</div>
					</div>
				</div>
				<div class="form-group w3ls-opt">
					<label for="Phone" class="control-label">Gender</label>

					<label class="w3layouts">
						<input type="radio" name="work" id="hire" value="male" checked>Male
					</label>
					<label class="w3layouts label2">
						<input type="radio" name="work" id="work" value="female">Female
					</label>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-lg">submit</button>
				</div>
			</form>
		</div>
		<div class="right">
			<img src="images/cf2.png" alt="images">
		</div>
		<div class="clearfix"></div>
	</div>
	</div>
<!-- /form -->
<!-- subscribe -->
	<div class="subscribe jarallax">
		<div class="container">
			<div class="agileits-title title2">
				<h3 class="agileits-title sub">Subscribe</h3>
			</div>   
			<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur adipisci velit sed quia non numquam eius.</p>
			<form action="#" method="post">
				<input type="email" name="email" placeholder="Email Address" class="user" required="">
				<input type="submit" value="Subscribe">
			</form>
			<div class="footer-agileinfo-social">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
							<li><a href="#"><i class="fa fa-vk"></i></a></li>
						</ul>
					</div>

		</div>
	</div>
	<!-- //subscribe -->
	@endsection