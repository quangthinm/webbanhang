<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kienthuc;
use App\slide;

class pageController extends Controller
{
    public function getChitiet(Request $Request)
    {
    	$kienthuc = kienthuc::find($Request->id);;
    	return view('page.chitietkienthuc', compact('kienthuc'));
    }

}
