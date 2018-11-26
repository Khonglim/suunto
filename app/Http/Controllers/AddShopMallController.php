<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Extensions\MongoSessionStore;
use Illuminate\Support\Facades\Session;
use App\ShoppingMall;
use App\ShoppingMallTO;
use DB;
class AddShopMallController extends Controller
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
        return view('suunto.admin.addShopMall');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shop = new ShoppingMallTO;
             $shop->name_shop = $request->shop;
             $shop->save();
             $shop_search = new ShoppingMall;
             $shop_search->name_shop=$request->pf;
             $shop_search->save();
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
            $shop= ShoppingMallTO::find($id); 
            $shop_search=ShoppingMall::find($id);
            $data = array(
                'shop' => $shop,
                'shop_search' =>  $shop_search
            );
            return view('suunto/admin/editShop',$data);
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
        $shop= ShoppingMallTO::find($id); 
             $shop->name_shop = $request->name_shop;
             $shop->save();
            $shop_search=ShoppingMall::find($id);
             $shop_search->name_shop=$request->pf;
             $shop_search->save();
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
        $operate =   DB::table('shoppingmall')->where('id', '=',  $id)->delete();
        $operate =   DB::table('shoppingmall_search')->where('id', '=',  $id)->delete();
        Session::flash('flash_message','ลบข้อมูลร้านสำเร็จ!! ');
        return redirect('admin');
    }
}
