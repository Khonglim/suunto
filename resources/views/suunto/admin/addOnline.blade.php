@extends('layouts.admin')
@section('content')

            <div class="container">
                        <div class="row justify-content-center">
                                    <div class="col-md-8 bg-light p-5 rounded mt-5">
                                            
                                          
                                          <h5 class="text-center text-light bg-success mb-2 p-2 rounded lead" id="reult">เพิ่มจังหวัดอื่นๆ</h5>

                                    <form  action="{{url('/online')}}"  method="POST" id="form-data" enctype="multipart/form-data">
                                      @csrf
                                      <div class="form-row">
                                          <div class="col-md-6 mb-3">
                                               <label for="validationTooltip01">Name Online(*)</label>
                                                     <input type="text" name="name_online" id="name_online" class="form-control" required>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="validationTooltip01">Link Online(*)</label>
                                                            <textarea name="online" id="online" class="form-control" required   rows="3" placeholder="http://tsmactive.com/?route=product/isearch&search=suunto&description=true"></textarea>
                                   
                                                          </div>
                                                     
                                                      </div>
                                                      <div class="form-row">

                                                          <div class="col-md-6 mb-3">
                                                              <label for="validationTooltip02">อัพโหลดรูปภาพ(*) <br> <strong class="text-danger">(*ขนาดรูปภาพจำเป็นต้อง 2000 x 600 px)</strong></label>
                                                          <input type="file" name="image" id="image" required>
                                                             
                                                            </div>




                                                      </div>


                                                   <center><button class="btn btn-primary" type="submit" >บันทึก</button> </center>   
                                                    </form>

                                    </div>
            
            
                        </div>
                     

            </div>
     
      @endsection


