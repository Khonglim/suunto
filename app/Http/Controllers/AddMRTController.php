<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Extensions\MongoSessionStore;
use Illuminate\Support\Facades\Session;
use App\Mrt;
use App\Mrt_search;
use DB;
class AddMRTController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suunto.admin.addMRT');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
             $mrt = new Mrt;
             $mrt->name_mrt = $request->mrt;
             $mrt->save();
             $mrt_search = new Mrt_search;
             $mrt_search->mrt_search=$request->pf;
             $mrt_search->save();
             Session::flash('flash_message','บันทึกข้อมูลสำเร็จ!! ');
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
            $mrt= Mrt::find($id); 
            $mrt_search=Mrt_search::find($id);
            $data = array(
                'mrt' => $mrt,
                'mrt_search' =>  $mrt_search
            );
            return view('suunto/admin/editMRT',$data);
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
        $mrt= Mrt::find($id); 
        $mrt->name_mrt = $request->mrt;
        $mrt->save();
        $mrt_search=Mrt_search::find($id);
        $mrt_search->mrt_search=$request->pf;
        $mrt_search->save();
        Session::flash('flash_message','แก้ไขข้อมูลสำเร็จ!! ');
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
        $operate =   DB::table('mrt')->where('id', '=',  $id)->delete();
        $operate =   DB::table('mrt_search')->where('id', '=',  $id)->delete();
        Session::flash('flash_message','ลบข้อมูลร้านสำเร็จ!! ');
        return redirect('admin');
    }
}
