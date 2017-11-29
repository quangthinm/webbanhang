<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slide;

class slideController extends Controller
{
    public function getDanhsach()
    {
    	$danhsachslide = slide::all();
    	return view('admin/slide/danhsach', compact('danhsachslide'));
    }
    public function getThem()
    {
    	return view('admin/slide/them');
    }
    public function postThem(Request $Request)
    {
    	$this -> validate($Request,
    		[
   		 		'slide_img'=>'required',
    		],
    		[
    			'slide_img.required'=>'Chưa upload hình',
    		]
		);

    	$slide = new slide;
    	$slide->slide_derc = $Request->slide_derc;
    	$slide->slide_status = $Request->slide_status;

    	//upload hình
    	if($Request->hasFile('slide_img'))
    	{
    		$file = $Request->file('slide_img');
    		$duoi = $file->getClientOriginalExtension();
    		if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg')
    		{
    			return redirect('admin/slide/them')->with('thongbao', 'không đúng định dạng ảnh');
    		}
    		$name = $file->getClientOriginalName();
    		$hinh = str_random(6)."-".$name;
    		while(file_exists('asset/slide/'.$hinh))
    		{
    			$hinh = str_random(6)."-".$name;
    		}
    		$file->move('asset/slide',$hinh);
    		$slide->slide_img = $hinh;
    	}else
    	{
    		$slide->slide_img = "";
    	}

    	$slide->save();
    	return redirect('admin/slide/them')->with('thongbao', 'Thêm thành công');
    }

    public function getSua($id){

    	$slide = slide::find($id);
    	return view('admin.slide.sua', compact('slide'));
    }

    public function postSua(Request $Request, $id)
    {
    	$slide = slide::find($id);
    	$slide->slide_derc = $Request->slide_derc;
    	$slide->slide_status = $Request->slide_status;

    	//upload hình
    	if($Request->hasFile('slide_img'))
    	{
    		$file = $Request->file('slide_img');
    		$duoi = $file->getClientOriginalExtension();
    		if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg')
    		{
    			return redirect('admin/slide/them')->with('thongbao', 'không đúng định dạng ảnh');
    		}
    		$name = $file->getClientOriginalName();
    		$hinh = str_random(6)."-".$name;
    		while(file_exists('asset/slide/'.$hinh))
    		{
    			$hinh = str_random(6)."-".$name;
    		}
    		$file->move('asset/slide',$hinh);
    		$slide->slide_img = $hinh;
    	}else
    	{
    		$slide->slide_img = $slide->slide_img;
    	}

    	$slide->save();
    	return redirect('admin/slide/sua/'.$id)->with('thongbao', 'Sửa thành công');
    }

    public function getXoa($id){
    	$slide = slide::find($id);
    	$slide -> delete($id);
    	return redirect('admin/slide/danh-sach')->with('thongbao','Đã xóa sản phẩm '.$slide->Product_name);
    }
}
