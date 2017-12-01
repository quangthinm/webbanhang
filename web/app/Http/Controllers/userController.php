<?php

namespace App\Http\Controllers;
use Hash;
use Illuminate\Http\Request;
use Auth;
use App\User;

class userController extends Controller
{
	public function getDanhsach(){
		$user = User::all();
		return view('admin/user/danhsach',compact('user'));
	}
    public function getThem(){
    	return view('admin/user/them');
    }
    public function postThem(Request $Request){
    	$this -> validate($Request,
    		[
   		 		'username'=>'required|min:3|unique:users,user_name',
   		 		'email'=>'required|email|unique:users,user_email',
   		 		'userpass'=>'required|min:6',
   		 		'userrepass'=>'required|same:userpass',
    		],
    		[
    			'username.required'=>'Chưa upload hình',
    			'username.min'=>'Tên đăng nhập tối thiểu 3 ký tự',
    			'username.unique'=>'Tên đăng nhập đã tồn tại',
    			'email.required'=>'Chưa nhập email',
    			'email.email'=>'Chưa nhâp đúng định dạng Email',
    			'email.unique'=>'Email đã tồn tại',
    			'userpass.required'=>'Chưa nhập mật khẩu',
    			'userpass.min'=>'Mật khẩu tối thiểu 6 ký tự',
    			'userrepass.required'=>'Chưa nhập lại mật khẩu',
    			'userrepass.same'=>'Mật khẩu không trùng khớp',
    		]
		);

    	$user = new User;
    	$user->user_name = $Request->username;
    	$user->user_email = $Request->email;
    	$user->password = Hash::make($Request->userpass);
    	$user->user_role = $Request->userrole;

    	$user->save();
    	return redirect('admin/user/them')->with('thongbao', 'Thêm thành công');
    }
    public function getSua($id){
    	$user = User::find($id);
    	return view('admin/user/sua',compact('user'));
    }
    public function postSua(Request $Request, $id){
    	$this -> validate($Request,
    		[
   		 		'username'=>'required|min:3',
   		 		'email'=>'required|email',
   		 		'userpass'=>'required|min:6',
   		 		'userrepass'=>'required|same:userpass',
    		],
    		[
    			'username.required'=>'Chưa upload hình',
    			'username.min'=>'Tên đăng nhập tối thiểu 3 ký tự',
    			'email.required'=>'Chưa nhập email',
    			'email.email'=>'Chưa nhâp đúng định dạng Email',
    			'userpass.required'=>'Chưa nhập mật khẩu',
    			'userpass.min'=>'Mật khẩu tối thiểu 6 ký tự',
    			'userrepass.required'=>'Chưa nhập lại mật khẩu',
    			'userrepass.same'=>'Mật khẩu không trùng khớp',
    		]
		);

    	$user = User::find($id);
    	$user->user_name = $Request->username;
    	$user->user_email = $Request->email;
    	$user->password = bcrypt($Request->userpass);
    	$user->user_role = $Request->userrole;

    	$user->save();
    	return redirect('admin/user/sua/'.$id)->with('thongbao', 'Sửa thành công');
    }
    public function getXoa($id){
    	$user = User::find($id);
    	$user -> delete($id);
    	return redirect('admin/user/danh-sach')->with('thongbao','Đã xóa '.$user->user_name);
    }

    public function getLogin()
    {
        return view('admin/adminlogin');
    }

    public function postLogin(Request $Request)
    {
        $this -> validate($Request,
            [
                'username'=>'required',
                'userpass'=>'required',
            ],
            [
                'username.required'=>'Chưa nhập tên đăng nhập',
                'userpass.required'=>'Chưa nhập mật khẩu',
            ]
        );

        $loginfo = array(
            'user_name'=>$Request->username,
            'password'=>$Request->userpass,
        );
        var_dump($loginfo);

        if(Auth::attempt($loginfo))
        {
            return redirect('admin/trang-chu');
        }else
        {
            return redirect('admin/dang-nhap')->with('thongbao', 'Sai thông tin đăng nhập'); 
        }
    }

    public function getLogout(){
        Auth::logout();
        return redirect('admin/dang-nhap');
    }
}
