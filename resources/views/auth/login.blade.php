@extends('layouts.login')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header bg-dark"> <center><img src="https://res.cloudinary.com/nio/image/upload/v1540626285/logo-agency.png" alt=""> </center></div>

                <div class="card-body bg-dark">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        @csrf
                          @if(session()->has('login_error'))
                            <div class="alert alert-warning">
                              {{ session()->get('login_error') }}
                            </div>
                          @endif
                          <div class="form-group{{ $errors->has('identity') ? ' has-error' : '' }}">
                            <label for="identity" class="col-md-4 control-label text-light">Username:</label>
                  
                            <div class="col-md-12 ">
                              <input id="identity" type="identity" class="form-control " name="identity"
                                     value="{{ old('identity') }}" autofocus>
                  
                              @if ($errors->has('identity'))
                                <span class="help-block">
                                                    <strong>{{ $errors->first('identity') }}</strong>
                                                </span>
                              @endif
                            </div>
                          </div>
                          
                          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-3 control-label text-light">Password:</label>
                           
                            <div class="col-md-12">
                              <input id="password" type="password" class="form-control" name="password">
                  
                              @if ($errors->has('password'))
                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                              @endif
                            </div>
                          </div>
                  
                        <center>
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-5">
                                  <button type="submit" class="btn btn-primary">
                                    Login
                                  </button>
                      
                                  
                                </div>
                              </div>

                        </center>
                       
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
