@extends('layouts.admin')
@section('content')
<div class="container">
            <div class="row justify-content-center">
                  <div class="col-md-12 bg-light p-5 rounded mt-2">
            <h5 class="text-center text-light bg-success mb-2 p-2 rounded lead" id="reult">ข้อมูลหน้าร้าน</h5>
                   <div class="table-wrapper-scroll-y">
<table id="store" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>จังหวัด</th>
                    <th>ชื่อร้าน</th>
                    <th>ตำแหน่ง</th>
                    <th>เพิ่มเติม</th>
                  
                </tr>
            </thead>
            <tbody>
                <tr>
                   
                        
                   
                    <td class="text-nowrap">Tiger Nixon</td>
                    <td class="text-nowrap">System Architect</td>
                    <td class="text-nowrap">Edinburgh</td>
                    <td class="text-nowrap">61</td>
                   
                </tr>
              
          
            </tbody>
            <tfoot>
                <tr>
                        <th>จังหวัด</th>
                        <th>ชื่อร้าน</th>
                        <th>ตำแหน่ง</th>
                        <th>เพิ่มเติม</th>
                </tr>
            </tfoot>
        </table>
          
            </div>
      </div>
</div> 


<div class="row justify-content-center">
            <div class="col-md-12 bg-light p-5 rounded mt-2">
      <h5 class="text-center text-light bg-success mb-2 p-2 rounded lead" id="reult">ข้อมูลเพิ่มจังหวัดหน้าเว็บ</h5>
             <div class="table-wrapper-scroll-y">
<table id="add_locaal" class="table table-striped table-bordered" style="width:100%">
      <thead>
          <tr>
              <th>จังหวัด</th>
              <th>สถานะ</th>
              <th>เพิ่มเติม</th>
            
          </tr>
      </thead>
      <tbody>
            @foreach ($addLocal as $item )
          <tr>
              
            <td class="text-nowrap"  >{{$item->province}}</td>
            <td class="text-nowrap">{{$item->status}}  </td>
            <td class="text-nowrap">
                    <a href="" class="btn btn-primary btn-sm"><i data-feather="eye" width="15px"></i></a>
                    <a href="" class="btn btn-warning btn-sm "><i data-feather="edit" width="15px"></i></a>
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal{{$item->id}}"><i data-feather="trash-2" width="15px"></i></button>
                  <!-- The Modal -->
  <div class="modal" id="myModal{{$item->id}}">
        <div class="modal-dialog">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">ลบข้อมูล</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
            คุณต้องการลบจังหวัด <strong>{{$item->province}}</strong> ใช่หรือไม่
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="summit" class="btn btn-primary" data-dismiss="modal">ตกลง</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
            </div>
            
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
                  <th>เพิ่มเติม</th>
          </tr>
      </tfoot>
  </table>
    
      </div>
</div>
</div>

</div> 






@endsection