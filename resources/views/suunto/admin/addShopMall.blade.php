@extends('layouts.admin')
@section('content')

            <div class="container">
                        <div class="row justify-content-center">
                                    <div class="col-md-8 bg-light p-5 rounded mt-5">
                                           
                                                    <h5 class="text-center text-light bg-success mb-2 p-2 rounded lead" id="reult">เพิ่มห้าง</h5>
                                              <form  action="{{url('/addshopmall')}}"  method="POST" id="form-data" enctype="multipart/form-data" files="true">
                                                @csrf
                                                                <div class="form-row">
                                                                  <div class="col-md-6 mb-3">
                                                                    <label for="validationTooltip01">ชื่อห้าง</label>
                                                                    <input type="text" name="shop" id="mrt" class="form-control" required>
                                                                  </div>
                                                               
                                                                  <div class="col-md-6 mb-3">
                                                                        <label for="validationTooltip01">ตัวค้นหา</label>
                                                                        <input type="text" name="pf" id="pf" class="form-control" placeholder="pf-exxxx">
                                                                      </div>
                                                                </div>
                                                               
                                                             <center><button class="btn btn-primary" type="submit" >บันทึก</button> </center>   
                                                              </form>
                                        
                                    </div>
            
            
                                </div>
                             
        
                    </div>
             
@endsection
        