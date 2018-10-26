<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ProvincialController extends Controller
{
    public function ChonShow()
    {
        $dealer = DB::table('dealer')
                ->where('province','=','ชลบุรี')
                ->where('category', '=', 'ต่างจังหวัด')
                ->where('status', '=', 'T')
                ->get();
                $data = array(
                    'dealer' =>   $dealer
                );

        return view('suunto/Provincia/chon',$data);
    }

    public function ChiangraiShow()
    {
        $dealer = DB::table('dealer')
                ->where('province','=','เชียงราย')
                ->where('category', '=', 'ต่างจังหวัด')
                ->where('status', '=', 'T')
                ->get();
                $data = array(
                    'dealer' =>   $dealer
                );

        return view('suunto/Provincia/chiangrai',$data);
    }

    public function ChiangmaiShow()
    {
        $dealer = DB::table('dealer')
                ->where('province','=','เชียงใหม่')
                ->where('category', '=', 'ต่างจังหวัด')
                ->where('status', '=', 'T')
                ->get();
                $data = array(
                    'dealer' =>   $dealer
                );

        return view('suunto/Provincia/chiangmai',$data);
    }


    public function LampangShow()
    {
        $dealer = DB::table('dealer')
                ->where('province','=','ลำปาง')
                ->where('category', '=', 'ต่างจังหวัด')
                ->where('status', '=', 'T')
                ->get();
                $data = array(
                    'dealer' =>   $dealer
                );

        return view('suunto/Provincia/lampang',$data);
    }

    public function NakhonratchasimaShow()
    {
        $dealer = DB::table('dealer')
                ->where('province','=','นครราชสีมา')
                ->where('category', '=', 'ต่างจังหวัด')
                ->where('status', '=', 'T')
                ->get();
                $data = array(
                    'dealer' =>   $dealer
                );

        return view('suunto/Provincia/nakhonratchasima',$data);
    }

    public function NonthaburiShow()
    {
        $dealer = DB::table('dealer')
                ->where('province','=','นนทบุรี')
                ->where('category', '=', 'ต่างจังหวัด')
                ->where('status', '=', 'T')
                ->get();
                $data = array(
                    'dealer' =>   $dealer
                );

        return view('suunto/Provincia/nonthaburi',$data);
    }

    public function PathumthaniShow()
    {
        $dealer = DB::table('dealer')
                ->where('province','=','ปทุมธานี')
                ->where('category', '=', 'ต่างจังหวัด')
                ->where('status', '=', 'T')
                ->get();
                $data = array(
                    'dealer' =>   $dealer
                );

        return view('suunto/Provincia/pathumthani',$data);
    }

    public function PrachuapkhirikhanShow()
    {
        $dealer = DB::table('dealer')
                ->where('province','=','ประจวบคีรีขันธ์')
                ->where('category', '=', 'ต่างจังหวัด')
                ->where('status', '=', 'T')
                ->get();
                $data = array(
                    'dealer' =>   $dealer
                );

        return view('suunto/Provincia/prachuapkhirikhan',$data);
    }

    public function PhuketShow()
    {
        $dealer = DB::table('dealer')
                ->where('province','=','ภูเก็ต')
                ->where('category', '=', 'ต่างจังหวัด')
                ->where('status', '=', 'T')
                ->get();
                $data = array(
                    'dealer' =>   $dealer
                );

        return view('suunto/Provincia/phuket',$data);
    }

    public function RayongShow()
    {
        $dealer = DB::table('dealer')
                ->where('province','=','ระยอง')
                ->where('category', '=', 'ต่างจังหวัด')
                ->where('status', '=', 'T')
                ->get();
                $data = array(
                    'dealer' =>   $dealer
                );

        return view('suunto/Provincia/rayong',$data);
    }
    
    public function SongkhlaShow()
    {
        $dealer = DB::table('dealer')
                ->where('province','=','สงขลา')
                ->where('category', '=', 'ต่างจังหวัด')
                ->where('status', '=', 'T')
                ->get();
                $data = array(
                    'dealer' =>   $dealer
                );

        return view('suunto/Provincia/songkhla',$data);
    }

    public function SamutsakhonShow()
    {
        $dealer = DB::table('dealer')
                ->where('province','=','สมุทรสาคร')
                ->where('category', '=', 'ต่างจังหวัด')
                ->where('status', '=', 'T')
                ->get();
                $data = array(
                    'dealer' =>   $dealer
                );

        return view('suunto/Provincia/samutsakhon',$data);
    }

    public function SamutprakanShow()
    {
        $dealer = DB::table('dealer')
                ->where('province','=','สมุทรปราการ')
                ->where('category', '=', 'ต่างจังหวัด')
                ->where('status', '=', 'T')
                ->get();
                $data = array(
                    'dealer' =>   $dealer
                );

        return view('suunto/Provincia/samutprakan',$data);
    }

}
