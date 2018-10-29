<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SearchController extends Controller
{
    public function index($province)
    {

        $dealer = DB::table('dealer')
                ->where('province','=',$province)
                ->where('status', '=', 'T')
                ->get();
                $data = array(
                    'dealer' =>   $dealer
                );

        return view('suunto/Provincia/searchShow',$data);
    }

   
}
