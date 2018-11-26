<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>addLocal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" >
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Prompt">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <style>
          body{
            font-family: 'Kanit', sans-serif;

          }
          .table-wrapper-scroll-y {
  display: block;
  max-height: 1000px;
  overflow-y: auto;
  -ms-overflow-style: -ms-autohiding-scrollbar;
}
    </style>
    
</head>
<body class="bg-dark">
    <div class="loader"></div>
    <nav class="navbar navbar-expand-sm bg-info navbar-dark">
        <a class="navbar-brand" href="{{url("/admin")}}"><img src="https://res.cloudinary.com/nio/image/upload/v1540626285/logo-agency.png" width="80px" ></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{url("/admin")}}">หน้าแรก</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url("/addstore/create")}}">เพิ่มข้อมูลร้าน</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url("/admin/create")}}">เพิ่มหน้าเว็บ(จังหวัดอื่นๆ)</a>
            </li>    
            <li class="nav-item">
                <a class="nav-link" href="{{url('/online/create')}}">เพิ่มหมวดขายสินค้าออนไลน์</a>
            </li>   
            <li class="nav-item">
                    <a class="nav-link" href="{{url('/addbts/create')}}">เพิ่มสถานี BTS</a>
            </li>    
           <li class="nav-item">
                        <a class="nav-link" href="{{url('/addmrt/create')}}">เพิ่มสถานี MRT</a>
            </li>    
            <li class="nav-item">
                            <a class="nav-link" href="{{url('/addshopmall/create')}}">เพิ่มห้าง</a>
            </li>    
                       
           
          </ul>
          <ul class="navbar-nav ml-auto">
              @guest
              <li >
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              <li >
                <!--  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a> -->
              </li>
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
            </ul>
        </div>  
      </nav>
      <br>

            <main class="py-4">
                        @yield('content')
                    </main>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script  src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
 <script>
 $(document).ready(function() {
    $('#store').DataTable();
    $('#add_locaal').DataTable();
    $('#onlineTable').DataTable();
    $('#bts').DataTable();
    $('#mrt').DataTable();
    $('#shop').DataTable();
} );
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
feather.replace()
 </script>


</body>
 </html>     