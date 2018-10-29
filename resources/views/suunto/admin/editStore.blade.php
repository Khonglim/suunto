@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
                  <div class="col-md-6 bg-light p-5 rounded mt-5">
                                          <h5 class="text-center text-light bg-success mb-5 p-2 rounded lead" id="reult">EDID STORE {{$deale->store_name}}</h5>

                                    <form  action="/addstore"  method="POST" id="form-data" enctype="multipart/form-data">
                                      @csrf

                                      <div class="form-row">
                                          <div class="col-md-12 mb-3">
                                                <label for="validationTooltip01">Name(*)</label>
                                            <input type="text" name="name" id="name" class="form-control" value="{{$deale->store_name}}" required>
                                                </div>
                                      </div>
                                      <div class="form-row">
                                                <div class="col-md-12 mb-3">
                                                      <label for="validationTooltip01">Category(*)</label>
                                                      <select name="category" id="category" class="js-example-basic-single form-control"   required>
                                                                  <option value="{{$deale->category}}">{{$deale->category}}</option>
                                                                  <option value="กรุงเทพมหานครและปริมณฑล">กรุงเทพมหานครและปริมณฑล</option>
                                                                   <option value="ต่างจังหวัด">ต่างจังหวัด</option>
                                                                    
     
                                                               </select>
                                                 
                                                      </div>
                                            </div>

                                                      <div class="form-row">
                                                        <div class="col-md-12 mb-3">
                                                          <label for="validationTooltip01">Province(*)</label>
                                                          
                                                          <select name="province" id="province" class="js-example-basic-single form-control"   required>
                                                             <option value="{{$deale->province}}">{{$deale->province}}</option>
                                                            @foreach ($province as $item)
                                                              <option value="{{$item->name}}">{{$item->name}}</option>
                                                                @endforeach

                                                          </select>
                                                        </div>
                                                      </div>

                                                      <div class="form-row">
                                                                  <div class="col-md-12 mb-3">
                                                                    <label for="validationTooltip01">Near BTS</label>
                                                                    
                                                                    <select name="bts" id="bts" class="js-example-basic-single form-control" >
                                                                         <option value="{{$deale->bts}}">{{$deale->bts}}</option>
                                                                      @foreach ($bts as $item)
                                                                        <option value="{{$item->name_bts}}">{{$item->name_bts}}</option>
                                                                          @endforeach
          
                                                                    </select>
                                                                  </div>
                                                                 
                                                               
                                                                </div>

                                                                <div class="form-row">
                                                                        <div class="col-md-12 mb-3">
                                                                          <label for="validationTooltip01">Near MRT</label>
                                                                          
                                                                          <select name="mrt" id="mrt" class="js-example-basic-single form-control" >
                                                                              <option value="{{$deale->mrt}}">{{$deale->mrt}}</option>
                                                                            @foreach ($mrt as $item)
                                                                              <option value="{{$item->name_mrt}}">{{$item->name_mrt}}</option>
                                                                                @endforeach
                
                                                                          </select>
                                                                        </div>
                                                                  </div>
                                                                  <div class="form-row">
                                                                              <div class="col-md-12 mb-3">
                                                                                    <label for="validationTooltip01">Near Shopping Mall</label>
                                                                                <input type="text" name="shopping_mall" id="shopping_mall" class="form-control" value="{{$deale->shopping_mall}}" >
                                                                                    </div>
                                                                          </div>

                                                                          <div class="form-row">
                                                                                    <div class="col-md-12 mb-3">
                                                                                          <label for="validationTooltip01">Road</label>
                                                                                      <input type="text" name="road" id="road" class="form-control" value="{{$deale->road}}" >
                                                                                          </div>
                                                                                </div>
                                                                                <div class="form-row">
                                                                                          <div class="col-md-12 mb-3">
                                                                                                <label for="validationTooltip01">Address(*)</label>
                                                                                            <input type="text" name="address" id="address" class="form-control" value="{{$deale->address}}" required>
                                                                                                </div>
                                                                                          </div>
                                                                                          <div class="form-row">
                                                                                                      <div class="col-md-12 mb-3">
                                                                                                            <label for="validationTooltip01">Store Hours(*)</label>
                                                                                                        <input type="text" name="store_hours" id="store_hours" class="form-control" value="{{$deale->store_hours}}" required>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                      <div class="form-row">
                                                                                                                  <div class="col-md-12 mb-3">
                                                                                                                        <label for="validationTooltip01">Facebook</label>
                                                                                                                    <input type="text" name="facebook" id="facebook" class="form-control" value="{{$deale->facebook}}">
                                                                                                                        </div>
                                                                                                                  </div>
                                                                                                                  <div class="form-row">
                                                                                                                              <div class="col-md-12 mb-3">
                                                                                                                                    <label for="validationTooltip01">Contact Number(*)</label>
                                                                                                                                <input type="text" name="contact_number" id="contact_number" class="form-control" value="{{$deale->contact_number}}" required>
                                                                                                                                    </div>
                                                                                                                              </div>
                                                                                                                              <div class="form-row">
                                                                                                                                          <div class="col-md-12 mb-3">
                                                                                                                                                <label for="validationTooltip01">Map(*)</label>
                                                                                                                                            <input type="text" name="map" id="map" class="form-control" value="{{$deale->map}}" required>
                                                                                                                                                </div>
                                                                                                                                          </div>
                                                                                                                                          <div class="form-row">
                                                                                                                                                      <div class="col-md-12 mb-3">
                                                                                                                                                            <label for="validationTooltip01">Direction(*)</label>
                                                                                                                                                        <input type="text" name="direction" id="direction" class="form-control"  value="{{ $deale->directions }}" required>
                                                                                                                                                            </div>
                                                                                                                                                      </div>
                                                      <div class="col-md-4 mb-3">
                                                                  <label for="validationTooltip02">อัพโหลดรูปภาพ(*)</label>
                                                              <input type="file" name="image" id="image" required value="{{ old('image') }}">
                                                                 
                                                                </div>
                                                   <center><button class="btn btn-primary" type="submit" >บันทึก</button> </center>   
                                                    </form>

                                    </div>
            
            
                        </div>
                     

            </div>
     
      @endsection