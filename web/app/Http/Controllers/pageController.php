<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kienthuc;
use App\slide;
use App\sanpham;
use App\danhmuccon;
use App\danhmucsanpham;
use App\contact;
use App\lienhe;

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
    public function postContact(Request $Request){
        $this -> validate($Request,
            [
                'inputName' => 'required',
                'inputEmail' => 'required',
                'inputContent'=>'required',
            ],
            [
                'inputName.required'=>'Chưa nhập tên',
                'inputEmail.required'=>'Chưa nhập Email',
                'inputContent.required'=>'Chưa nhập nội dung',
            ]
        );

        $contact = new lienhe;
        $contact->name = $Request->inputName;
        $contact->email = $Request->inputEmail;
        $contact->content = $Request->inputContent;

        $contact->save();
        return redirect('lien-he')->with('thongbao', 'Gửi thành công');
    }
    public function getContact()
    {
        $contact = lienhe::all();
        return view('admin/lienhe/danhsach', compact('contact'));
    }
    public function xoalienhe($id){
        $lienhe = lienhe::find($id);
        $lienhe->delete($id);
        return redirect('admin/lienhe/danhsach')->with('thongbao', 'Xóa thành công');
    }
}
