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
                $data = array(
                    'dealer' =>   $dealer
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
                $data = array(
                    'dealer' =>   $dealer
                );

        return view('suunto/BKK/mrt',$data);
    }

    
    public function ShopShow()
    {
        $dealer = DB::table('dealer')
                ->where('shopping_mall', '!=', ' ')
                ->where('category', '=', 'กรุงเทพมหานครและปริมณฑล')
                ->where('status', '=', 'T')
                ->get();
                $data = array(
                    'dealer' =>   $dealer
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
