@extends('admin.layout.index')
@section('content')
<div id="page-wrapper" >
	<div class="header"> 
		<h1 class="page-header">
		    Danh sách <small>user</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="admin/trang-chu">Trang chủ</a></li>
			<li><a href="{{route('danhsachuser')}}">User</a></li>
			<li class="active">Danh sách</li>
		</ol>			
	</div>

	<div id="page-inner">       
	    <div class="row">
	        <div class="col-md-12">
	            <!-- Advanced Tables -->
	            <div class="panel panel-default">
	                <div class="panel-heading">
	                    Danh sách
	                    @if(session('thongbao'))
	                    	<div class="alert alert-success">
		                    	{{session('thongbao')}}
	                    	</div>
	                    @endif
	                </div>
	                <div class="panel-body">
	                    <div class="table-responsive">
	                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
	                            <thead>
	                                <tr>
	                                    <th>ID</th>
	                                    <th>Tên</th>
	                                    <th>Mật khẩu</th>
	                                    <th>Quyền</th>
	                                    <th>Edit</th>
	                                    <th>Delete</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                            	@foreach($user as $u)
	                                <tr>
	                                    <td>{{$u->id}}</td>
	                                    <td>{{$u->user_name}}</td>
	                                    <td>{{$u->password}}</td>
	                                    <td>
	                                    	@if($u->user_role == 0)
	                                    		{{'Admin'}}
	                                    	@else
	                                    		{{'User'}}
	                                    	@endif
	                                    </td>
	                                    <td><a href="admin/user/sua/{{$u->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
	                                    <td><a href="admin/user/xoa/{{$u->id}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
	                                </tr>
	                                @endforeach
	                            </tbody>
	                        </table>
	                    </div>
	                    
	                </div>
	            </div>
	            <!--End Advanced Tables -->
	        </div>
	    </div>
	</div>
</div>
@endsection