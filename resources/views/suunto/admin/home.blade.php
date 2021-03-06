@extends('layouts.admin')
@section('content')
<div class="container">
    @if(Session::has('flash_message') )
   <div class="alert alert-success d-flex align-items-center"> {!! session('flash_message') !!}</div>
   @endif
            <div class="row justify-content-center">
                  <div class="col-md-12 bg-light p-5 rounded mt-2">
            <h5 class="text-center text-light bg-success mb-2 p-2 rounded lead" id="reult">ข้อมูลหน้าร้าน</h5>
            <a href="{{url('/excel')}} "  class="btn btn-success">Export Excel</a>
            <br> <br>
                   <div class="table-wrapper-scroll-y">
<table id="store" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th >จังหวัด</th>
                    <th>ชื่อร้าน</th>
                    <th>ตำแหน่ง</th>
                    <th>แก้ไข/ลบ</th>
                  
                </tr>
            </thead>
            <tbody>
                @foreach ( $dealer as  $dealers)
                <tr>
                    <td class="text-nowrap" >{{$dealers->province}}</td>
                    <td class="text-nowrap">{{$dealers->store_name}}</td>
                    <td class="text-nowrap"  align="center"><a href="{{$dealers->directions}}"><i data-feather="map-pin" width="15px"></i></a></td>
                    <td class="text-nowrap"  align="center">
                        
                         
                            <a href="{{'addstore/'.$dealers->id.'/edit'}}" ><i data-feather="edit" width="15px"></i></a>
                            <a href="" data-toggle="modal" data-target="#Dealer{{$dealers->id}}"><i data-feather="trash-2" width="15px"></i></a>
                            <!-- The Modal -->
            <div class="modal" id="Dealer{{$dealers->id}}">
                  <div class="modal-dialog">
                    <div class="modal-content">
                    
                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title">ลบข้อมูล</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      
                      <!-- Modal body -->
                      <div class="modal-body">
                        {{ Form::open(['route' => ['addstore.destroy',$dealers->id, 'method' => "DELETE"] ]) }}
                        <input type="hidden" name="_method" value="delete" />
                      
                      
                      
                        
                      <p>คุณต้องการลบร้าน {{$dealers->store_name }}ใช่หรือไม่!!!!</p>
                      </div>
                      <div class="modal-footer">
                        <button type="summit" class="btn btn-danger">ลบ</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
                        {{ Form::close() }}
                      </div>
                    </form>
                      </div>
                      
                      <!-- Modal footer -->
                      
                      
                    </div>
                  </div>
                </div>
          
                    </td>
                   
                </tr>
                @endforeach
          
            </tbody>
            <tfoot>
                <tr>
                        <th>จังหวัด</th>
                        <th>ชื่อร้าน</th>
                        <th>ตำแหน่ง</th>
                        <th>แก้ไข/ลบ</th>
                </tr>
            </tfoot>
        </table>
    
            </div>
      </div>
</div> 


<div class="row justify-content-center">
            <div class="col-md-12 bg-light p-5 rounded mt-2">
      <h5 class="text-center text-light bg-info mb-2 p-2 rounded lead" id="reult">ข้อมูลเพิ่มจังหวัดหน้าเว็บ</h5>
             <div class="table-wrapper-scroll-y">
<table id="add_locaal" class="table table-striped table-bordered" style="width:100%">
      <thead>
          <tr>
              <th>จังหวัด</th>
              <th>สถานะ</th>
              <th>แก้ไข/ลบ</th>
            
          </tr>
      </thead>
      <tbody>
            @foreach ($addLocal as $item )
          
          <tr>
              
            <td class="text-nowrap"  >{{$item->province}}</td>
            <td class="text-nowrap">{{$item->status}}  </td>
            <td class="text-nowrap"  align="center">
                  
              <a href="{{'admin/'.$item->id.'/edit'}}" ><i data-feather="edit" width="15px"></i></a>
                    <a  href="#"  data-toggle="modal" data-target="#Addlocal{{$item->id}}"><i data-feather="trash-2" width="15px"></i></a>
                  <!-- The Modal -->
  <div class="modal" id="Addlocal{{$item->id}}">
        <div class="modal-dialog">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">ลบข้อมูล</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
              {{ Form::open(['route' => ['admin.destroy',$item->id, 'method' => "DELETE"] ]) }}
              <input type="hidden" name="_method" value="delete" />
                      
                      
                      
                      
                        
                  <p>คุณต้องการลบหน้าเว็บ {{$item->province }}ใช่หรือไม่!!!!</p>
                  </div>
                  <div class="modal-footer">
                    <button type="summit" class="btn btn-danger">ลบ</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
                  </div>
                  {{ Form::close() }}
            
          </div>
        </div>
      </div>


            </td>
        
            
             
          </tr>
          @endforeach
    
      </tbody>
      <tfoot>
          <tr>
                  <th>จังหวัด</th>
                  <th>สถานะ</th>
                  <th>แก้ไข/ลบ</th>
          </tr>
      </tfoot>
  </table>
    
      </div>
</div>
</div>

<div class="row justify-content-center">
    <div class="col-md-12 bg-light p-5 rounded mt-2">
<h5 class="text-center text-light bg-secondary mb-2 p-2 rounded lead" id="reult">ข้อมูลเพิ่มหมวดขายสินค้าออนไลน์</h5>
     <div class="table-wrapper-scroll-y">
<table id="onlineTable" class="table table-striped table-bordered" style="width:100%">
<thead>
  <tr>
      <th>ชื่อ</th>
     
      <th>แก้ไข/ลบ</th>
    
  </tr>
</thead>
<tbody>
    @foreach ($online as $item )
  <tr>
      
    <td class="text-nowrap"  >{{$item->name_online}}</td>

    <td class="text-nowrap"  align="center">
          
           <a href="{{'online/'.$item->id.'/edit'}}" ><i data-feather="edit" width="15px"></i></a>
            <a  href="#"  data-toggle="modal" data-target="#Online{{$item->id}}"><i data-feather="trash-2" width="15px"></i></a>
          <!-- The Modal -->
<div class="modal" id="Online{{$item->id}}">
<div class="modal-dialog">
  <div class="modal-content">
  
    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title">ลบข้อมูล</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    
    <!-- Modal body -->
    <div class="modal-body">
      {{ Form::open(['route' => ['online.destroy',$item->id, 'method' => "DELETE"] ]) }}
      <input type="hidden" name="_method" value="delete" />
              
              
              
              
                
          <p>คุณต้องการลบหน้าเว็บ {{$item->name_online }}ใช่หรือไม่!!!!</p>
          </div>
          <div class="modal-footer">
            <button type="summit" class="btn btn-danger">ลบ</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
          </div>
          {{ Form::close() }}
    
  </div>
</div>
</div>


    </td>

    
     
  </tr>
  @endforeach

</tbody>
<tfoot>
  <tr>
      <th>ชื่อ</th>
          <th>แก้ไข/ลบ</th>
  </tr>
</tfoot>
</table>

</div>
</div>
</div>



<div class="row justify-content-center">
    <div class="col-md-12 bg-light p-5 rounded mt-2">
<h5 class="text-center text-light bg-info mb-2 p-2 rounded lead" id="reult">ข้อมูลสถานี BTS</h5>
     <div class="table-wrapper-scroll-y">
<table id="bts" class="table table-striped table-bordered" style="width:100%">
<thead>
  <tr>
      <th>ชื่อ</th>
     
      <th>แก้ไข/ลบ</th>
    
  </tr>
</thead>
<tbody>
    @foreach ($bts as $btss)
    <tr>
      <td class="text-nowrap">
        {{$btss->name_bts}}
      </td>
      <td class="text-nowrap" align="center">
          <a href="{{'addbts/'.$btss->id.'/edit'}}" ><i data-feather="edit" width="15px"></i></a>
          <a  href="#"  data-toggle="modal" data-target="#BTS{{$btss->id}}"><i data-feather="trash-2" width="15px"></i></a>
          <!-- The Modal -->
<div class="modal" id="BTS{{$btss->id}}">
<div class="modal-dialog">
  <div class="modal-content">
  
    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title">ลบข้อมูล</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    
    <!-- Modal body -->
    <div class="modal-body">
      {{ Form::open(['route' => ['addbts.destroy',$btss->id, 'method' => "DELETE"] ]) }}
      <input type="hidden" name="_method" value="delete" />    
          <p>คุณต้องการลบหน้าเว็บ {{$btss->name_bts }} ใช่หรือไม่!!!!</p>
          </div>
          <div class="modal-footer">
            <button type="summit" class="btn btn-danger">ลบ</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
          </div>
          {{ Form::close() }}
    
  </div>
</div>
</div>

      </td>
    </tr>
        
    @endforeach
  

</tbody>
<tfoot>
  <tr>
      <th>ชื่อ</th>
          <th>แก้ไข/ลบ</th>
  </tr>
</tfoot>
</table>

</div>
</div>
</div>



<div class="row justify-content-center">
    <div class="col-md-12 bg-light p-5 rounded mt-2">
<h5 class="text-center text-light bg-warning mb-2 p-2 rounded lead" id="reult">ข้อมูลสถานี MRT</h5>
     <div class="table-wrapper-scroll-y">
<table id="mrt" class="table table-striped table-bordered" style="width:100%">
<thead>
  <tr>
      <th>ชื่อ</th>
     
      <th>แก้ไข/ลบ</th>
    
  </tr>
</thead>
<tbody>
    @foreach ($mrt as $mrts)
    <tr>
      <td class="text-nowrap">
        {{$mrts->name_mrt}}
      </td>
      <td class="text-nowrap" align="center">
          <a href="{{'addmrt/'.$mrts->id.'/edit'}}" ><i data-feather="edit" width="15px"></i></a>
          <a  href="#"  data-toggle="modal" data-target="#BTS{{$mrts->id}}"><i data-feather="trash-2" width="15px"></i></a>
          <!-- The Modal -->
<div class="modal" id="BTS{{$mrts->id}}">
<div class="modal-dialog">
  <div class="modal-content">
  
    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title">ลบข้อมูล</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    
    <!-- Modal body -->
    <div class="modal-body">
      {{ Form::open(['route' => ['addmrt.destroy',$mrts->id, 'method' => "DELETE"] ]) }}
      <input type="hidden" name="_method" value="delete" />    
          <p>คุณต้องการลบหน้าเว็บ {{$mrts->name_mrt }} ใช่หรือไม่!!!!</p>
          </div>
          <div class="modal-footer">
            <button type="summit" class="btn btn-danger">ลบ</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
          </div>
          {{ Form::close() }}
    
  </div>
</div>
</div>
      </td>
    </tr>
        
    @endforeach
  

</tbody>
<tfoot>
  <tr>
      <th>ชื่อ</th>
          <th>แก้ไข/ลบ</th>
  </tr>
</tfoot>
</table>

</div>
</div>
</div>


<div class="row justify-content-center">
    <div class="col-md-12 bg-light p-5 rounded mt-2">
<h5 class="text-center text-light bg-danger mb-2 p-2 rounded lead" id="reult">ข้อมูลห้าง</h5>
     <div class="table-wrapper-scroll-y">
<table id="shop" class="table table-striped table-bordered" style="width:100%">
<thead>
  <tr>
      <th>ชื่อ</th>
     
      <th>แก้ไข/ลบ</th>
    
  </tr>
</thead>
<tbody>
    @foreach ($shoppingMallTO as $shoppingMallTOs)
    <tr>
      <td class="text-nowrap">
        {{$shoppingMallTOs->name_shop}}
      </td>
      <td class="text-nowrap" align="center">
          <a href="{{'addshopmall/'.$shoppingMallTOs->id.'/edit'}}" ><i data-feather="edit" width="15px"></i></a>
          <a  href="#"  data-toggle="modal" data-target="#SHOP{{$shoppingMallTOs->id}}"><i data-feather="trash-2" width="15px"></i></a>
          <!-- The Modal -->
<div class="modal" id="SHOP{{$shoppingMallTOs->id}}">
<div class="modal-dialog">
  <div class="modal-content">
  
    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title">ลบข้อมูล</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    
    <!-- Modal body -->
    <div class="modal-body">
      {{ Form::open(['route' => ['addshopmall.destroy',$shoppingMallTOs->id, 'method' => "DELETE"] ]) }}
      <input type="hidden" name="_method" value="delete" />    
          <p>คุณต้องการลบหน้าเว็บ {{$shoppingMallTOs->name_shop }} ใช่หรือไม่!!!!</p>
          </div>
          <div class="modal-footer">
            <button type="summit" class="btn btn-danger">ลบ</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
          </div>
          {{ Form::close() }}
    
  </div>
</div>
</div>
      </td>
    </tr>
        
    @endforeach
  

</tbody>
<tfoot>
  <tr>
      <th>ชื่อ</th>
          <th>แก้ไข/ลบ</th>
  </tr>
</tfoot>
</table>

</div>
</div>
</div>









</div> 






@endsection