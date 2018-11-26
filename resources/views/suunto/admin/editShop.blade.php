@extends('layouts.admin')
@section('content')

            <div class="container">
                        <div class="row justify-content-center">
                                    <div class="col-md-8 bg-light p-5 rounded mt-5">
                                            <h5 class="text-center text-light bg-success mb-2 p-2 rounded lead" id="reult">แก้ไข ห้าง</h5>
                                            {{Form::open(['route'=>['addshopmall.update',$shop->id],'method'=>'PUT','files' => true])}}
                                            @csrf
                                                        <div class="form-row">
                                                          <div class="col-md-6 mb-3">
                                                            <label for="validationTooltip01">ชื่อสถานี BTS</label>
                                                          <input type="text" name="name_shop"  class="form-control" value="{{$shop->name_shop}}" required>
                                                          </div>
                                                       
                                                          <div class="col-md-6 mb-3">
                                                                <label for="validationTooltip01">ตัวค้นหา</label>
                                                          <input type="text" name="pf" id="pf" class="form-control" placeholder="pf-exxxx" value="{{$shop_search->name_shop}}" required>
                                                              </div>
                                                        </div>
                                                       
                                                     <center><button class="btn btn-primary" type="submit" >บันทึก</button> </center>   
                                                     {{ Form::close()}}  
                                    </div>
            
            
                                </div>
                             
        
                    </div>
             
@endsection
        