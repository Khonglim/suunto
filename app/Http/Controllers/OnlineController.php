<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Online;
use App\Extensions\MongoSessionStore;
use Illuminate\Support\Facades\Session;
use DB;
class OnlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $online = Online::all();
        $data = array(
            'online' => $online
        );

        return view("suunto.shoponline.online",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view("suunto.admin.addOnline");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $online= new Online;
        $online->link_online = $request->online;
        $online->name_online = $request->name_online;
        if(Input::hasFile('image')){
            $file=Input::file('image');
            $online->image = $file->getClientOriginalName();
            $file->move(public_path(). '/', $file->getClientOriginalName());
        }
        $online->save();
        Session::flash('flash_message','บันทึก สำเร็จ!! ');
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
            $online= Online::find($id); 
           
            $data = array(
                'online' =>$online
                
            );
            return view('suunto/admin/editOnline',$data);
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
        $online= Online::find($id); 
        $online->link_online = $request->online;
        $online->name_online = $request->name_online;
        if(Input::hasFile('image')){
            $file=Input::file('image');
            $online->image = $file->getClientOriginalName();
            $file->move(public_path(). '/', $file->getClientOriginalName());
        }
        $online->save();
        Session::flash('flash_message','แก้ไขร้านออนไลน์ สำเร็จ!! ');
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
        $operate =   DB::table('_online')->where('id', '=',  $id)->delete();
        Session::flash('flash_message','ลบร้านออนไลน์สำเร็จ!! ');
        return redirect('admin');
    }
}
