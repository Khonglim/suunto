@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
                  <div class="col-md-9 bg-light p-5 rounded mt-5">
                                          <h5 class="text-center text-light bg-success mb-5 p-2 rounded lead" id="reult">ADD STORE</h5>

                                    <form  action="{{url('/addstore')}}"  method="POST" id="form-data" enctype="multipart/form-data" files="true">
                                      @csrf

                                      <div class="form-row">
                                          <div class="col-md-6 mb-3">
                                                <label for="validationTooltip01">Name(*)</label>
                                            <input type="text" name="store_name" id="store_name" class="form-control" value="{{ old('name') }}" required>
                                                </div>
                                                <div class="col-md-5 mb-3">
                                                  <label for="validationTooltip02">อัพโหลดรูปภาพ(*)<small class="text-danger"><strong>ขนาดรูปต้อง 600 x 450 px </strong></small> </label>
                                              <input type="file" name="image" id="image" required >
                                                 
                                                </div>
                                      </div>
                                      <div class="form-row">
                                                <div class="col-md-6 mb-3">
                                                      <label for="validationTooltip01">Category(*)</label>
                                                      <select name="category" id="category" class="js-example-basic-single form-control"   required>
                                                                  <option value="">เลือก</option>
                                                                 
                                                                   <option value="กรุงเทพมหานครและปริมณฑล">กรุงเทพมหานครและปริมณฑล</option>
                                                                   <option value="ต่างจังหวัด">ต่างจังหวัด</option>
                                                                    
     
                                                               </select>
                                                 
                                                      </div>
                                                      <div class="col-md-6 mb-3">
                                                        <label for="validationTooltip01">Province(*)</label>
                                                        
                                                        <select name="province" id="province" class="js-example-basic-single form-control"   required>
                                                           <option value="">เลือก</option>
                                                          @foreach ($province as $item)
                                                            <option value="{{$item->name}}">{{$item->name}}</option>
                                                              @endforeach

                                                        </select>
                                                      </div>
                                            </div>

                                                      

                                                      <div class="form-row">
                                                                  <div class="col-md-6 mb-3">
                                                                    <label for="validationTooltip01">Near BTS</label>
                                                                    
                                                                    <select name="bts" id="bts" class="js-example-basic-single form-control" >
                                                                       <option value="">เลือก</option>
                                                                      @foreach ($bts as $item)
                                                                        <option value="{{$item->name_bts}}">{{$item->name_bts}}</option>
                                                                          @endforeach
          
                                                                    </select>
                                                                  </div>
                                                                  <div class="col-md-6 mb-3">
                                                                    <label for="validationTooltip01"> BTS search <small><strong class="text-danger"> (ระบุชื่อเดียวกับ Near BTS)</strong>  </small> </label>
                                                                    <select name="bts_search" id="bts_search" class="js-example-basic-single form-control" >
                                                                  <option value="">เลือก</option>
                                                                  @foreach ($bts_search as $item)
                                                                    <option value="{{$item->bts_search}}">{{$item->bts_search}}</option>
                                                                      @endforeach
      
                                                                </select>
                                                                  </div>
                                                               
                                                                </div>
                                                                
                                                                <div class="form-row">
                                                                        <div class="col-md-6 mb-3">
                                                                          <label for="validationTooltip01">Near MRT</label>
                                                                          
                                                                          <select name="mrt" id="mrt" class="js-example-basic-single form-control" >
                                                                             <option value="">เลือก</option>
                                                                            @foreach ($mrt as $item)
                                                                              <option value="{{$item->name_mrt}}">{{$item->name_mrt}}</option>
                                                                                @endforeach
                
                                                                          </select>
                                                                        </div>
                                                                        <div class="col-md-6 mb-3">
                                                                          <label for="validationTooltip01"> MRT search <small><strong class="text-danger">(ระบุชื่อเดียวกับ Near MRT)</strong> </small> </label>
                                                                          <select name="mrt_search" id="mrt_search" class="js-example-basic-single form-control" >
                                                                                    <option value="">เลือก</option>
                                                                              @foreach ($mrt_search as $item)
                                                                          <option value="{{$item->mrt_search}}">{{$item->mrt_search}}</option>
                                                                            @endforeach
                                                                          </select>
                                                                        </div>
                                                                  </div>
                                                                 
                                                                  <div class="form-row">
                                                                            <div class="col-md-6 mb-3">
                                                                            <label for="validationTooltip01">Near Shopping Mall</label>
                                                                              
                                                                                <select name="shopping_mall" id="shopping_mall" class="js-example-basic-single form-control" >
                                                                        <option value="">เลือก</option>
                                                                            @foreach ($shoppingMallto as $item)
                                                                        <option value="{{$item->name_shop}}">{{$item->name_shop}}</option>
                                                                          @endforeach
                                                                        </select>
                                                                              
                                                                              </div>

                                                                              <div class="col-md-6 mb-3">
                                                                                <label for="validationTooltip01">Shopping search <small><strong class="text-danger">(ระบุชื่อเดียวกับ Near Shopping Mall)</strong></small></label>
                                                                                  
                                                                                    <select name="shopping_mall_search" id="search" class="js-example-basic-single form-control" >
                                                                                      <option value="">เลือก</option>
                                                                                       @foreach ($shoppingMall as $i)
                                                                                     <option value="{{$i->name_shop}}">{{$i->name_shop}}</option>
                                                                                        @endforeach
                                                                                   </select>
                                                                                    </div>
                                                                          </div>

                                                                         
                                                                            <div class="form-row">
                                                                                          <div class="col-md-12 mb-3">
                                                                                              <label for="validationTooltip01">Address(*)</label>
                                                                                         
                                                                                               <textarea name="address" id="address"  rows="2" class="form-control" value="{{ old('address') }}" required></textarea>
                                                                                          
                                                                                          </div>
                                                                                          </div>
                                                          <div class="form-row">
                                                               <div class="col-md-6 mb-3">
                                                                    <label for="validationTooltip01">Store Hours(*)</label>
                                                                             <input type="text" name="store_hours" id="store_hours" class="form-control" value="{{ old('store_hours') }}" required>
                                                                                         </div>
                                                             <div class="col-md-6 mb-3">
                                                                          <label for="validationTooltip01">Facebook</label>
                                                                                 <input type="text" name="facebook" id="facebook" class="form-control" value="{{ old('facebook') }}">
                                                                                    </div>
                                                                            </div>
                                                                     <div class="form-row">
                                                                            <div class="col-md-6 mb-3">
                                                                              <label for="validationTooltip01">Contact Number(*)</label>
                                                                            <input type="text" name="contact_number" id="contact_number" class="form-control" value="{{ old('contact_number') }}" required>
                                                               </div>
                                                               <div class="col-md-6 mb-3">
                                                                <label for="validationTooltip01">Road</label>
                                                            <input type="text" name="road" id="road" class="form-control" value="{{ old('road') }}" >
                                                                </div>
                                                                          
                                                               </div>
                                                                                                                              
                                                              <div class="form-row">
                                                                <div class="col-md-6 mb-3">
                                                                      <label for="validationTooltip01">Direction(*)</label>
                                                                               
                                                                       <textarea name="directions" id="directions" class="form-control" rows="2" required placeholder="https://goo.gl/maps/m2Nac3EjneS2"></textarea>
                                                                       
                                                                        </div>
                                                                       <div class="col-md-6 mb-5">
                                                                        <label for="validationTooltip01">Map(*)</label>
                                                                                      
                                                                                             <textarea name="map" id="map" rows="2" class="form-control"  required placeholder="https://www.google.com/maps/embed?pb=!1m18!1m12!1m..."></textarea>  
                                                                                     
                                                                                     
                                                                                         </div>
                                                            </div>
                                                      
                                                   <center>
                                                     <button class="btn btn-primary" type="submit" >บันทึก</button> 
                                                     <a href="{{url('/admin')}}"  class="btn btn-danger">ยกเลิก</a>
                                                  </center>   
                                                    </form>

                                    </div>
            
            
                        </div>
                     

            </div>
     
      @endsection