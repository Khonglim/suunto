<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AddLocal;
class ShowController extends Controller
{
    public function province()
    {

        $province = AddLocal::all();

        $data =array(
            "province" => $province

        
          
        );
           
        return view("suunto.Provincia.showProvince",$data);
    }

    public function bkk()
    {
        
       

        return view('suunto/BKK/searchShow');
    }



}
