@extends('layouts.admin')
@section('content')

            <div class="container">
                        <div class="row justify-content-center">
                                    <div class="col-md-8 bg-light p-5 rounded mt-5">
                                            
                                          
                                          <h5 class="text-center text-light bg-success mb-2 p-2 rounded lead" id="reult">เพิ่มจังหวัดอื่นๆ</h5>
                                          @if (count($errors) > 0)
                                          <div class="alert alert-danger">
                                              
                                                  @foreach ($errors->all() as $error)
                                                      <li>{{ $error }}</li>
                                                  @endforeach
                                              
                                          </div>
                                          @endif
                                    <form  action="{{url('/admin')}}"  method="POST" id="form-data" enctype="multipart/form-data" files="true">
                                      @csrf
                                                      <div class="form-row">
                                                        <div class="col-md-6 mb-3">
                                                          <label for="validationTooltip01">จังหวัด</label>
                                                          
                                                          <select name="province" id="province" class="js-example-basic-single form-control" required>
                                                             <option value="">เลือก</option>
                                                            @foreach ($province as $item)
                                                              <option value="{{$item->name}}">{{$item->name}}</option>
                                                                @endforeach

                                                          </select>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                          <label for="validationTooltip02">อัพโหลดรูปภาพ <br> <strong class="text-danger">(*ขนาดรูปภาพจำเป็นต้อง 2000 x 600 px)</strong></label>
                                                      <input type="file" name="image" id="image" required>
                                                         
                                                        </div>
                                                     
                                                      </div>
                                                     
                                                   <center><button class="btn btn-primary" type="submit" >บันทึก</button> </center>   
                                                    </form>

                                    </div>
            
            
                        </div>
                     

            </div>
     
      @endsection


