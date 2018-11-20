@extends('layouts.admin')
@section('content')

            <div class="container">
                        <div class="row justify-content-center">
                                    <div class="col-md-8 bg-light p-5 rounded mt-5">
                                            
                                          
                                          <h5 class="text-center text-light bg-success mb-2 p-2 rounded lead" id="reult">แก้ไขร้านออนไลน์</h5>

                                          {{Form::open(['route'=>['online.update',$online->id],'method'=>'PUT','files' => true])}}
                                      @csrf
                                      <div class="form-row">
                                          <div class="col-md-6 mb-3">
                                               <label for="validationTooltip01">Name Online(*)</label>
                                          <input type="text" name="name_online" id="name_online" class="form-control" required value="{{$online->name_online}}">
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="validationTooltip01">Link Online(*)</label>
                                                        <textarea name="online" id="online" class="form-control" required   rows="3"   >{{$online->link_online}}</textarea>
                                   
                                                          </div>
                                                     
                                                      </div>
                                                      <div class="form-row">

                                                          <div class="col-md-6 mb-3">
                                                              <label for="validationTooltip02">อัพโหลดรูปภาพ(*) <br> <strong class="text-danger">(*ขนาดรูปภาพจำเป็นต้อง 2000 x 600 px)</strong></label>
                                                          <input type="file" name="image" id="image" >
                                                             <label for="">รูปเดิม {{$online->image}}  </label>
                                                            </div>




                                                      </div>


                                                   <center><button class="btn btn-primary" type="submit" >บันทึก</button> </center>   
                                                   {{ Form::close()}}  

                                    </div>
            
            
                        </div>
                     

            </div>
     
      @endsection


