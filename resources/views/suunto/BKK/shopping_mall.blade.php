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
                        <a href="{{url('/')}}" >	<img src="{{url('images/logo-agency.png')}}" width="100px"></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<nav class="link-effect-2" id="link-effect-2">
					<ul class="nav navbar-nav">
						<li class="active"><a href="{{url('/')}}" ><span data-hover="หน้าแรก">หน้าแรก</span></a></li>
						
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

<!-- /fashion events -->
<div class="w3-team banner-bottom " id="team">
            <div class="container-fluid">
                <h3 class="w3ls_head" >SHOPPINGMALL</h3>
                <div class="container">
                    <div class="row">
                    
            
                    <div align="center" class=" col-md-12  ">
                        <button class="btn btn-default filter-button" data-filter="all">Show  All</button>
                        <button class="btn btn-default filter-button" data-filter="pf-center">Center One Shopping Plaza</button>
                        <button class="btn btn-default filter-button" data-filter="pf-chaengwattana">Central Chaengwattana</button>
                        <button class="btn btn-default filter-button" data-filter="pf-chidlom">Central Chidlom</button>
                        <button class="btn btn-default filter-button" data-filter="pf-eastville">Central Festival EastVille</button>
                        <button class="btn btn-default filter-button" data-filter="pf-plazabangna">Central Plaza Bangna</button>
                        <button class="btn btn-default filter-button" data-filter="pf-ladprao">Central Plaza Ladprao</button>
                        <button class="btn btn-default filter-button" data-filter="pf-pinklao">Central Plaza Pinklao</button>
                        <button class="btn btn-default filter-button" data-filter="pf-plazarama2">Central Plaza Rama 2</button>
                        <button class="btn btn-default filter-button" data-filter="pf-plazarama3">Central Plaza Rama 3</button>
                        <button class="btn btn-default filter-button" data-filter="pf-centralworld">Central World</button>
                        <button class="btn btn-default filter-button" data-filter="pf-veranda">Crystal Veranda</button>
                        <button class="btn btn-default filter-button" data-filter="pf-future">Future Park Rangsit</button>
                        <button class="btn btn-default filter-button" data-filter="pf-avenueladprao">Happy Avenue Ladprao</button>
                        <button class="btn btn-default filter-button" data-filter="pf-mega">Mega Bangna</button>
                        <button class="btn btn-default filter-button" data-filter="pf-porto">Porto Chino Shopping Mall</button>
                        <button class="btn btn-default filter-button" data-filter="pf-discovery">Siam Discovery</button>
                        <button class="btn btn-default filter-button" data-filter="pf-paragon">Siam Paragon</button>
                        <button class="btn btn-default filter-button" data-filter="pf-silom">Silom Complex</button>
                        <button class="btn btn-default filter-button" data-filter="pf-terminal">Terminal 21</button>
                        <button class="btn btn-default filter-button" data-filter="pf-thanya">Thanya Park</button>
                        <button class="btn btn-default filter-button" data-filter="pf-rama">The Bright Rama 2</button>
                        <button class="btn btn-default filter-button" data-filter="pf-ratchapruek">The Crystal Ratchapruek</button>
                        <button class="btn btn-default filter-button" data-filter="pf-emporium">The Emporium</button>
                        <button class="btn btn-default filter-button" data-filter="pf-emquartier">The Emquartier</button>
                        <button class="btn btn-default filter-button" data-filter="pf-bangkapi">The Mall Bangkapi</button>
          
                        
                      </div>
                    <br/>
            
            
            
                       


                          @foreach ($dealer as $d )
                          <div class="gallery_product  col-md-4  filter {{$d->shopping_mall_search}}">
                          <div class="panel panel-danger" >
                          <div class="panel-heading" align="center">{{$d->store_name}}</div>
                              <div class="panel-body">
                                 <p  align="center" class="text-danger"> {{$d->shopping_mall}}</p><hr>
                               
                              <p align="center"><i class="glyphicon glyphicon-earphone"></i> {{$d->contact_number}}</p><br>
                           <p align="center">  <a href="{{$d->facebook}}" ><img src="{{url("images/facebook.png")}}" width="30px" ></a></p>  <br>
                         <p align="center">  <button type="button" class="btn btn-danger " data-toggle="modal" data-target="#myModal{{$d->id}}">Detail</button></p>
                          </div>
                        </div>
                      </div>


                    <div id="myModal{{$d->id}}" class="modal fade" role="dialog">
                          <div class="modal-dialog modal-lg">
                        
                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">{{$d->store_name}}</h4>
                              </div>
                              <div class="modal-body">
                                <p><strong>Address</strong> :&nbsp; {{$d->address}} </p> 
                                <p><strong>Phone</strong> :&nbsp; {{$d->contact_number}}</p>
                                <p><strong>Store Hours</strong> :&nbsp; {{$d->store_hours}}</p>
                                <p >  <a href="{{$d->facebook}}" ><img src="{{url("images/facebook.png")}}" width="30px" ></a></p>
                              <a href="{{$d->directions}}"><strong>Get directions</strong></a>
                              
                              <p><iframe src="{{$d->map}}" width="420px" height="320px"   frameborder="0" style="border:0" allowfullscreen></iframe></p>
                         
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                        
                          </div>
                        </div>
                          @endforeach
                        
                        
            
                       
                    </div>
                </div>
                       
			<div class="clearfix"></div>
                
</div>
</div>

<!-- /form -->

<!-- footer -->
@endsection