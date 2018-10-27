@extends('layouts.admin')
@section('content')

            <div class="container">
                        <div class="row justify-content-center">
                                    <div class="col-md-6 bg-light p-5 rounded mt-5">
                                            
                                          
                                          <h5 class="text-center text-light bg-success mb-2 p-2 rounded lead" id="reult">เพิ่มจังหวัดอื่นๆ</h5>

                                    <form  action="/admin"  method="POST" id="form-data" enctype="multipart/form-data">
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
                                                        <div class="col-md-4 mb-3">
                                                          <label for="validationTooltip02">อัพโหลดรูปภาพ</label>
                                                      <input type="file" name="image" id="image" required>
                                                         
                                                        </div>
                                                     
                                                      </div>
                                                     
                                                   <center><button class="btn btn-primary" type="submit" >บันทึก</button> </center>   
                                                    </form>

                                    </div>
            
            
                        </div>
                     

            </div>
     
      @endsection


