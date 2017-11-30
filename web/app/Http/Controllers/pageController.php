<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kienthuc;
use App\slide;
use App\sanpham;
use App\danhmuccon;
use App\danhmucsanpham;

class pageController extends Controller
{
    public function getChitiet(Request $Request)
    {
    	$kienthuc = kienthuc::find($Request->id);
    	return view('page.chitietkienthuc', compact('kienthuc'));
    }

    public function getChitietsanpham(Request $Request)
    {
    	$sanpham = sanpham::find($Request->id);
    	$danhmuccon = danhmuccon::where('CategoryId', $sanpham->Product_Cate)->get();
        $danhmucsanpham = danhmucsanpham::where('id', $sanpham->Product_Cate)->first();
    	return view('page.chitietsanpham', compact('sanpham', 'danhmuccon', 'danhmucsanpham'));
    }
}
