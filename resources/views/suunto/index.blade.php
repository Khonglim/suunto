@extends('layouts.suunto')
@section('content')

<!-- Header
		============================================= -->
<header id="header" class="sticky-style-2">
  <div class="container clearfix"> 
    
    <!-- Logo
				============================================= -->
    <div id="logo" class="divcenter"> <a href="{{url("/")}}" class="standard-logo"><img class="divcenter" src="images/store/logo-agency.png" content="Suunto Store | ค้นหาตัวแทนจำหน่าย"></a> <a href="" class="retina-logo"><img class="divcenter" src="images/store/logo-agency@2x.png" content="Suunto Store | ค้นหาตัวแทนจำหน่าย"></a> </div>
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
        <div class="col-md-12 center"> <img class="image_fade" src="images/store/location/0.jpg" content="Suunto Store | ค้นหาตัวแทนจำหน่าย"> </div>
        <div class="col-md-12 center"> <a href="{{url("/BkkShow")}}"> <img class="image_fade" src="images/store/location/1.jpg" content="Suunto Store | ค้นหาตัวแทนจำหน่าย"> </a> </div>
        <div class="col-md-12 center"> <a href="{{url("/ProvinceShow")}}"> <img class="image_fade" src="images/store/location/2.jpg" content="Suunto Store | ค้นหาตัวแทนจำหน่าย"> </a> </div>
        <div class="col-md-12 center"> <a href="online/"> <img class="image_fade" src="images/store/location/3.jpg" content="Suunto Store | ค้นหาตัวแทนจำหน่าย"> </a> </div>
      </div>
    </div>
  </div>
</section>
<section id="content">
  <div class="content-wrap">
    <div class="clearfix"> <br>
      <br>
    </div>
  </div>
</section>
<section id="content">
  <div class="content-wrap">
    <div class="clearfix">
      <div class="row clearfix">
        <div class="col-md-12 center">
          <table width="100%">
            <tr>
              <td width="30%"></td>
              <td width="10%"><a href="http://www.suuntoth.com/userguide/"> <img class="image_fade" src="images/guide.png" content="Suunto Store | ค้นหาตัวแทนจำหน่าย">
                <div align="center"><font color="#FFFFFF" style="font-size:16px;"><strong> USER GUIDE </strong></font></div>
                </a></td>
              <td width="5%"></td>
              <td width="10%"><a href="http://www.suuntoth.com/catalog/"> <img class="image_fade" src="images/catalog.png" content="Suunto Store | ค้นหาตัวแทนจำหน่าย">
                <div align="center"><font color="#FFFFFF" style="font-size:16px;"><strong> CATALOG </strong></font></div>
                </a></td>
              <td width="5%"></td>
              <td width="10%"><a href="http://www.suuntoth.com/store/"> <img class="image_fade" src="images/store.png" content="Suunto Store | ค้นหาตัวแทนจำหน่าย">
                <div align="center"><font color="#FFFFFF" style="font-size:16px;"><strong> STORE </strong></font></div>
                </a></td>
              <td width="30%"></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection