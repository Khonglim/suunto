<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Extensions\MongoSessionStore;
use Illuminate\Support\Facades\Session;
use App\Bts;
use App\Bts_search;
use DB;
class AddBTSController extends Controller
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
        return view('suunto.admin.addBTS');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
             $bts = new Bts;
             $bts->name_bts = $request->bts;
             $bts->save();
             $bts_search = new Bts_search;
             $bts_search->bts_search=$request->pf;
             $bts_search->save();
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
            $bts= Bts::find($id); 
            $bts_search=Bts_search::find($id);
            $data = array(
                'bts' => $bts,
                'bts_search' =>  $bts_search
            );
            return view('suunto/admin/editBTS',$data);
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
        $bts= Bts::find($id); 
        $bts->name_bts = $request->bts;
        $bts->save();
        $bts_search=Bts_search::find($id);
        $bts_search->bts_search=$request->pf;
        $bts_search->save();
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
        $operate =   DB::table('bts')->where('id', '=',  $id)->delete();
        $operate =   DB::table('bts_search')->where('id', '=',  $id)->delete();
        Session::flash('flash_message','ลบข้อมูลร้านสำเร็จ!! ');
        return redirect('admin');
    }
}
