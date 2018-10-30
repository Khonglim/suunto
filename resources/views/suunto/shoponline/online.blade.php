@extends('layouts.bkk')
@section('content')

<header id="header" class="sticky-style-2">
      <div class="container clearfix"> 
        
        <!-- Logo
                            ============================================= -->
        <div id="logo" class="divcenter"> <a href="../" class="standard-logo"><img class="divcenter" src="../images/store/logo-agency.png?v=1001" content="Suunto Store | ค้นหาตัวแทนจำหน่าย"></a> <a href="../" class="retina-logo"><img class="divcenter" src="../images/store/logo-agency@2x.png?v=1001" content="Suunto Store | ค้นหาตัวแทนจำหน่าย"></a> </div>
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
            <div class="col-md-12 center"> <img class="image_fade" src="../images/store/online/0.jpg?v=1001" content="Suunto Store | ค้นหาตัวแทนจำหน่าย"> </div>

           @foreach ($online as $item)
           <div class="center"> <a href="{{$item->link_online}}"> <img class="image_fade" src="{{$item->image}}" content="Suunto Store | ค้นหาตัวแทนจำหน่าย"> </a> </div> 
           @endforeach

            
          
          </div>
        </div>
      </div>
    </section>
    <!-- #content end --> 



@endsection