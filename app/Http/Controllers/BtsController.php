<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class BtsController extends Controller
{
    public function BtsShow()
    {
        $dealer = DB::table('dealer')
                ->where('bts', '!=', ' ')
                ->where('category', '=', 'กรุงเทพมหานครและปริมณฑล')
                ->get();
                $data = array(
                    'dealer' =>   $dealer
                );

        return view('suunto/Bts',$data);
    }
}
