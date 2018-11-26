<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Province;
use App\AddLocal;
use App\Deale;
use App\Online;
use App\Mrt;
use App\Bts;
use App\ShoppingMallTO;



use DB;
use Illuminate\Support\Facades\Input;
use App\Extensions\MongoSessionStore;
use Illuminate\Support\Facades\Session;
class AddLocalController extends Controller
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
        $dealer = Deale::all();
        $addLocal = AddLocal::all();
        $online = Online::all();
        
        $mrt = mrt::all();
        $bts = bts::all();
        $shoppingMallTO = ShoppingMallTO::all();
        $data = array(
            'addLocal' =>  $addLocal,
            'dealer' =>  $dealer,
            'online' => $online,
            'mrt' => $mrt
            ,
            'bts' =>$bts
            ,
            'shoppingMallTO' => $shoppingMallTO

        );
        return view('suunto.admin.home',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           $province = Province::all();
           $data = array(
            'province' =>  $province
        );
        return view('suunto.admin.addLocal',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  $this->validate($request,[
        'image' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:9000',


        ]);

        
        $addLocal= new AddLocal;
        $addLocal->province = $request->province;
        if(Input::hasFile('image')){
            $file=Input::file('image');
            $addLocal->imge = $file->getClientOriginalName();
            $file->move(public_path(). '/', $file->getClientOriginalName());
        }
        $addLocal->save();
        Session::flash('flash_message','บันทึกข้อมูลจังหวัดสำเร็จ!! ');
        return redirect('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

     
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
            $addLocal= AddLocal::find($id); 
            $province = Province::all();
            $data = array(
                'addLocal' => $addLocal,
                'province' =>  $province
            );
            return view('suunto/admin/editProvincia',$data);
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
        $addLocal= AddLocal::find($id); 
        $addLocal->province = $request->province;
        if(Input::hasFile('image')){
            $file=Input::file('image');
            $addLocal->imge = $file->getClientOriginalName();
            $file->move(public_path(). '/', $file->getClientOriginalName());
        }
        $addLocal->save();
        Session::flash('flash_message','แก้ไขข้อมูลจังหวัดสำเร็จ!! ');
        return redirect('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $operate =   DB::table('add_local')->where('id', '=',  $id)->delete();
        Session::flash('flash_message','ลบข้อจังหวัดสำเร็จ!! ');
        return redirect('admin');
    }
}
