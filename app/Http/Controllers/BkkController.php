<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class BkkController extends Controller
{
    public function BtsShow()
    {
        $dealer = DB::table('dealer')
                ->where('bts', '!=', ' ')
                ->where('category', '=', 'กรุงเทพมหานครและปริมณฑล')
                ->where('status', '=', 'T')
                ->get();
                $bts_search = DB::table('bts_search')->get();
                $bts = DB::table('bts')->get();
                $data = array(
                    'dealer' =>   $dealer,
                    'bts_search' =>   $bts_search,
                    'bts' =>   $bts,
                );

        return view('suunto/BKK/bts',$data);
    }

    public function MrtShow()
    {
        $dealer = DB::table('dealer')
                ->where('mrt', '!=', ' ')
                ->where('category', '=', 'กรุงเทพมหานครและปริมณฑล')
                ->where('status', '=', 'T')
                ->get();
                $mrt_search = DB::table('mrt_search')->get();
                $mrt = DB::table('mrt')->get();
                $data = array(
                    'dealer' =>   $dealer,
                    'mrt_search' =>   $mrt_search,
                    'mrt' =>   $mrt,
                );
               
        return view('suunto/BKK/mrt',$data);
    }

    
    public function ShopShow()
    { $shop = DB::table('shoppingmall')->get();
      $shop_search = DB::table('shoppingmall_search')->get();
      $dealer = DB::table('dealer')
                ->where('shopping_mall', '!=', ' ')
                ->where('category', '=', 'กรุงเทพมหานครและปริมณฑล')
                ->where('status', '=', 'T')
                ->get();
                $data = array(
                    'dealer' =>   $dealer,
                    'shop'  =>$shop 
                    ,
                    'shop_search' => $shop_search
                );

        return view('suunto/BKK/shopping_mall',$data);
    }

    public function OtherShow()
    {
        $dealer = DB::table('dealer')
                ->where('shopping_mall', '=', ' ')
                ->where('category', '=', 'กรุงเทพมหานครและปริมณฑล')
                ->where('status', '=', 'T')
                ->where('mrt', '=', ' ')
                ->where('bts', '=', ' ')
                ->get();
                $data = array(
                    'dealer' =>   $dealer
                );

        return view('suunto/BKK/other',$data);
    }
}
