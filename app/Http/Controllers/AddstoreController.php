<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Province;
use App\Mrt;
use App\Bts;
use Illuminate\Support\Facades\Input;
use App\Deale;
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
        $bts = Bts::all();
        $mrt = Mrt::all();
        $data = array(
         'province' =>  $province,
         'mrt' =>  $mrt,
         'bts' =>  $bts
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
        $deale->directions = $request->category;
        if(Input::hasFile('image')){
            $file=Input::file('image');
            $deale->picture_1 = $file->getClientOriginalName();
            $file->move(public_path(). '/', $file->getClientOriginalName());
        }
        $deale->save();

return "save";








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
