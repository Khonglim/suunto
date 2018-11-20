<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Province;
use App\Mrt;
use App\Bts;
use Illuminate\Support\Facades\Input;
use App\Deale;
use App\Bts_search;
use App\Mrt_search;
use App\ShoppingMall;//ตัวค้นหา ฟิวเตอร์
use App\ShoppingMallTO; //ชื่อห้างร้าน
use App\Extensions\MongoSessionStore;
use Illuminate\Support\Facades\Session;
use DB;

class AddstoreController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $province = Province::all();
        $bts_search = Bts_search::all();
        $mrt_search = Mrt_search::all();
        $shoppingMall =  ShoppingMall::all();
        $shoppingMallto =  ShoppingMallTO::all();
        $bts = Bts::all();
        $mrt = Mrt::all();
        $data = array(
         'province' =>  $province,
         'mrt' =>  $mrt,
         'bts' =>  $bts,
         'bts_search' => $bts_search,
         'mrt_search' => $mrt_search,
         'shoppingMall'        =>  $shoppingMall,
         'shoppingMallto'        =>  $shoppingMallto,

     );
        return view("suunto.admin.addStore",$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $deale = new Deale;
        $deale->store_name = $request->store_name;
        $deale->category = $request->category;
        $deale->province = $request->province;
        $deale->bts = $request->bts;
        $deale->mrt = $request->mrt;
        $deale->mrt_search = $request->mrt_search;
        $deale->bts_search = $request->bts_search;
        $deale->shopping_mall = $request->shopping_mall;
        $deale->shopping_mall_search = $request->shopping_mall_search;
        $deale->road = $request->road;
        $deale->store_name = $request->store_name;
        $deale->address = $request->address;
        $deale->store_hours = $request->store_hours;
        $deale->facebook = $request->facebook;
        $deale->contact_number = $request->contact_number;
        $deale->map = $request->map;
        $deale->directions = $request->directions;
       
        if(Input::hasFile('image')){
            $file=Input::file('image');
            $deale->picture_1 = $file->getClientOriginalName();
            $file->move(public_path(). '/', $file->getClientOriginalName());
        }
        $deale->save();
        Session::flash('flash_message','บันทึกข้อมูลร้านสำเร็จ สำเร็จ!!  ');
return redirect("admin");








    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        if($id !== '') {
            $deale = Deale::find($id); 
            $province = Province::all();
            $bts = Bts::all();
            $mrt = Mrt::all();
            $bts_search = Bts_search::all();
            $mrt_search = Mrt_search::all();
            $shoppingMall =  ShoppingMall::all();
            $shoppingMallto =  ShoppingMallTO::all();
            $data = array(
                'deale' => $deale,
                'province' =>  $province,
                'mrt' =>  $mrt,
                'bts' =>  $bts,
                'bts_search' => $bts_search,
                'mrt_search' => $mrt_search,
                'shoppingMall'        =>  $shoppingMall,
                'shoppingMallto'        =>  $shoppingMallto,
            );
            return view('suunto/admin/editStore',$data);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $deale = Deale::find($id); 
        $deale->store_name = $request->store_name;
        $deale->category = $request->category;
        $deale->province = $request->province;
        $deale->bts = $request->bts;
        $deale->mrt = $request->mrt;
        $deale->mrt_search = $request->mrt_search;
        $deale->bts_search = $request->bts_search;
        $deale->shopping_mall = $request->shopping_mall;
        $deale->shopping_mall_search  = $request->shopping_mall_search;
        $deale->road = $request->road;
        $deale->store_name = $request->store_name;
        $deale->address = $request->address;
        $deale->store_hours = $request->store_hours;
        $deale->facebook = $request->facebook;
        $deale->contact_number = $request->contact_number;
        $deale->map = $request->map;
        $deale->directions = $request->directions;
       
        if(Input::hasFile('image')){
            $file=Input::file('image');
            $deale->picture_1 = $file->getClientOriginalName();
            $file->move(public_path(). '/', $file->getClientOriginalName());
        }
        $deale->save();
        Session::flash('flash_message','แก้ไขข้อมูลร้านสำเร็จ!! ');
return redirect("admin");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $operate =   DB::table('dealer')->where('id', '=',  $id)->delete();
        Session::flash('flash_message','ลบข้อมูลร้านสำเร็จ!! ');
        return redirect('admin');
    }
}
