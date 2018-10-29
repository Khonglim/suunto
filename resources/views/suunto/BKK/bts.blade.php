@extends('layouts.bkk')
@section('content')
<header id="header" class="sticky-style-2">
    <div class="container clearfix"> 
      
      <!-- Logo
          ============================================= -->
      <div id="logo" class="divcenter"> <a href="{{url('/')}}" class="standard-logo"><img class="divcenter" src="http://www.suuntoth.com/store/images/store/logo-agency.png?v=1001" content="Suunto Store | ค้นหาตัวแทนจำหน่าย"></a> <a href="../../" class="retina-logo"><img class="divcenter" src="http://www.suuntoth.com/store/images/store/logo-agency@2x.png?v=1001" content="Suunto Store | ค้นหาตัวแทนจำหน่าย"></a> </div>
      <!-- #logo end --> 
      
    </div>
  </header>
  <!-- #header end --> 
  
  <!-- Content
      ============================================= -->
  <section id="content">
    <div class="content-wrap">
      <div class="clearfix">
        <div class="row clearfix">
          <div class="col-md-12 center"> <img class="image_fade" src="http://www.suuntoth.com/store/images/store/bangkok/bts.jpg?v=1001" content="Suunto Store | ค้นหาตัวแทนจำหน่าย"> </div>
        </div>
      </div>
    </div>
  </section>
  <section id="content">
    <div class="content-wrap">
      <div class="container clearfix"> 
        
        <!-- Portfolio Filter
            ============================================= -->
        <ul class="portfolio-filter clearfix" data-container="#portfolio">
          <li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>
          <li><a href="#" data-filter=".pf-asoke">BTS Asoke Station</a></li>
          <li><a href="#" data-filter=".pf-chidlom">BTS Chidlom Station</a></li>
          <li><a href="#" data-filter=".pf-phrom">BTS Phrom Phong Station</a></li>
          <li><a href="#" data-filter=".pf-phoenimit">BTS Phoenimit Station</a></li>
          <li><a href="#" data-filter=".pf-siam">BTS Siam Station</a></li>
          <br><br>
          <li><a href="#" data-filter=".pf-saladaeng">BTS Saladaeng Station</a></li>
          <li><a href="#" data-filter=".pf-victory">BTS Victory Monument Station</a></li>
        </ul>
        <!-- #portfolio-filter end -->
      
        <div class="clear"></div>
        
        <!-- Portfolio Items
            ============================================= -->
        <div id="portfolio" class="portfolio grid-container portfolio-3 clearfix">
            @foreach ($dealer as $item)
                                      
            <article class="pricing--sonam portfolio-item  <?php  echo $item->bts_search; ?>">                 
            <div class="pricing--item">
              <h3 class="pricing--title">
                        {{$item->store_name}}
              </h3>
              <br>
            <div align="center"><a href="tel: {{$item->contact_number}}"> <i class="icon-phone3" style="width:20px;"></i> <font color="#FFFFFF">
                        {{$item->contact_number}}
                        </font></a> </div>
              
              <div align="center"><br>
                  @if($item->facebook != '')
                                <a href="{{$item->facebook}}"><img src="{{url('images/facebook.png')}}" alt=""></a>
                                @endif
               
              </div>
             
              <div align="center"><br>
               
              </div>
            
            <button class="pricing--action" data-toggle="modal" data-target=".detail_{{$item->id}}">Detail</button>
              <div class="modal fade detail_{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-body">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h3 class="modal-title" id="myModalLabel" style="color:#333333;">
                                 
                                </h3>
                              </div>
                              <div class="modal-body">
                                <div align="left" style="font-size:18px; color:#333333;"><strong>
                                  {{$item->shopping_mall}}
                                  </strong> 
                                </div>
                                <br>
                                <div align="left" style="font-size:16px; color:#333333;"><strong>Address</strong> :&nbsp;
                                    {{$item->address}}
                                </div>
                                <br>
                                <div align="left" style="font-size:16px; color:#333333;"><strong>Phone</strong> :&nbsp; 
                                    {{$item->contact_number}}
                                     </div>
                                <div align="left" style="font-size:16px; color:#333333;"><strong>Store Hours</strong> :&nbsp;
                                    {{$item->store_hours}}
                                </div>
                                <br>
                                <div align="left" style="font-size:16px; color:#333333;">
                                    <br>
                                    @if($item->facebook != '')
                                    <a href="{{$item->facebook}}"><img src="{{url('images/facebook.png')}}" alt=""></a>
                                    @endif
                                  
                                  </div>
                                  <br>
                                  <div align="left" style="font-size:16px; color:#333333;"><a href="{{$item->directions}}"><font color="#333333"><u>Get directions</u></font></a></div>
                                  <br>
                                <div align="left" style="font-size:16px; color:#333333;">
                                    <iframe src="{{$item->map}}" width="10px" height="10px"   frameborder="0" style="border:0" allowfullscreen></iframe>
                                    <br>
                                  </div>
                                  <div  align="left" style="font-size:16px; color:#333333;">
                                     <!-- <img src="{{$item->picture_1}}" content="Suunto Store | ค้นหาตัวแทนจำหน่าย">-->
                                  
                                  </div>
                             
                                
                          
                              
                               
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
       </article>
            @endforeach
        </div>
        <!-- #portfolio end --> 
        
      </div>
    </div>
  </section>
  <section>


   



@endsection