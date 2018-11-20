@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
                  <div class="col-md-9 bg-light p-5 rounded mt-5">
                  <h5 class="text-center text-light bg-success mb-5 p-2 rounded lead" id="reult">EDIT PROVINCE</h5>
                  {{Form::open(['route'=>['admin.update',$addLocal->id],'method'=>'PUT','files' => true])}}
                                      @csrf
                                     
                        
                                      <div class="form-row">
                                          <div class="col-md-6 mb-3">
                                                <label for="validationTooltip01">Name(*)</label>
                                                <select name="province" id="province" class="js-example-basic-single form-control"   required>
                                                <option value="{{$addLocal->province}}">{{$addLocal->province}}</option>
                                                   @foreach ($province as $item)
                                                     <option value="{{$item->name}}">{{$item->name}}</option>
                                                       @endforeach

                                                 </select>
                                                </div>
                                                <div class="col-md-5 mb-3">
                                                  <label for="validationTooltip02">อัพโหลดรูปภาพ(*) <small class="text-danger"><strong>ขนาดรูปต้อง 600 x 450 px </strong></small>   </label>
                                              <input type="file" name="image" id="image" >
                                                 <label for="" >(รูปภาพเดิม){{$addLocal->imge}}</label>
                                                </div>
                                      </div>
                                    
                                                   <center>
                                                     <button class="btn btn-primary" type="submit" >บันทึก</button> 
                                                   <a href="{{url('/admin')}}"  class="btn btn-danger">ยกเลิก</a>
                                                   
                                                  
                                                  </center>   
                                                   {{ Form::close()}}  

                                    </div>
            
            
                        </div>
                     

            </div>
     
      @endsection