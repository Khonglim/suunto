<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Province;
use App\AddLocal;
use App\Deale;
use Illuminate\Support\Facades\Input;
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
        $data = array(
            'addLocal' =>  $addLocal,
            'dealer' =>  $dealer
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
    {
        $addLocal= new AddLocal;
        $addLocal->province = $request->province;
        if(Input::hasFile('image')){
            $file=Input::file('image');
            $addLocal->imge = $file->getClientOriginalName();
            $file->move(public_path(). '/', $file->getClientOriginalName());
        }
        $addLocal->save();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
