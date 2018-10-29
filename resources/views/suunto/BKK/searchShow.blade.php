
@extends('layouts.suunto')
@section('content')

<header id="header" class="sticky-style-2">
            <div class="container clearfix"> 
              
              <!-- Logo
                                  ============================================= -->
              <div id="logo" class="divcenter"> <a href="{{url('/')}}" class="standard-logo"><img class="divcenter" src="http://www.suuntoth.com/store/images/store/logo-agency.png?v=1001" content="Suunto Store | ค้นหาตัวแทนจำหน่าย"></a> <a href="../" class="retina-logo"><img class="divcenter" src="http://www.suuntoth.com/store/images/store/logo-agency@2x.png?v=1001" content="Suunto Store | ค้นหาตัวแทนจำหน่าย"></a> </div>
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
                  <div class="col-md-12 center"> <img class="image_fade" src="{{url('images/store/bangkok/0.jpg')}}" content="Suunto Store | ค้นหาตัวแทนจำหน่าย"> </div>
                <div class="center"> <a href="{{url('/BtsShow')}}"> <img class="image_fade" src="{{url('images/store/bangkok/1.jpg')}}" content="Suunto Store | ค้นหาตัวแทนจำหน่าย"> </a> </div>
                  <div class="center"> <a href="mrt/"> <img class="image_fade" src="{{url('images/store/bangkok/2.jpg')}}" content="Suunto Store | ค้นหาตัวแทนจำหน่าย"> </a> </div>
                  <div class="center"> <a href="shoppingmall/"> <img class="image_fade" src="{{url('images/store/bangkok/3.jpg')}}" content="Suunto Store | ค้นหาตัวแทนจำหน่าย"> </a> </div>
                  <div class="center"> <a href="another/"> <img class="image_fade" src="{{url('images/store/bangkok/4.jpg')}}" content="Suunto Store | ค้นหาตัวแทนจำหน่าย"> </a> </div>
                </div>
              </div>
            </div>
          </section>

@endsection