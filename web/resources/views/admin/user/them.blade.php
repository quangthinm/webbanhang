@extends('admin.layout.index')
@section('content')
<div id="page-wrapper" >
	<div class="header"> 
		<h1 class="page-header">
		    Thêm <small>User</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="admin/trang-chu">Trang chủ</a></li>
			<li><a href="{{route('danhsachuser')}}">User</a></li>
			<li class="active">Thêm</li>
		</ol>			
	</div>

	<div id="page-inner">       
	    <div class="row">
	        <div class="col-md-12">
	            <!-- Advanced Tables -->
	            <div class="panel panel-default">
	                <div class="panel-heading">
	                    Thêm
	                </div>
	                <div class="panel-body">
	                    <div class="table-responsive">
		                    @if(count($errors) > 0)
		                    	<div class="alert alert-danger">
			                    	@foreach($errors->all() as $err)
			                    		{{$err}}<br/>
			                    	@endforeach
		                    	</div>
		                    @endif
		                    @if(session('thongbao'))
		                    	<div class="alert alert-success">
			                    	{{session('thongbao')}}
		                    	</div>
		                    @endif
	                    	<form class="form-horizontal" action="admin/user/them" method="post" enctype="multipart/form-data">
	                    		<input type="hidden" name="_token" value="{{csrf_token()}}"/>
								<!-- Text input-->
								<div class="form-group">
								  	<label class="col-md-4 control-label" for="username">
								  		Tên đăng nhập
								  	</label>  
								  	<div class="col-md-5">
								  		<input id="username" name="username" type="text" placeholder="Tên đăng nhập" class="form-control input-md">
								  	</div>
								</div>
								<div class="form-group">
								  	<label class="col-md-4 control-label" for="email">
								  		Email
								  	</label>  
								  	<div class="col-md-5">
								  		<input id="email" name="email" type="text" placeholder="Email" class="form-control input-md">
								  	</div>
								</div>
								<div class="form-group">
								  	<label class="col-md-4 control-label" for="userpass">
								  		Mật khẩu
								  	</label>  
								  	<div class="col-md-5">
								  		<input id="userpass" name="userpass" type="password" placeholder="Mật khẩu" class="form-control input-md">
								  	</div>
								</div>
								<div class="form-group">
								  	<label class="col-md-4 control-label" for="userrepass">
								  		Nhập lại mật khẩu
								  	</label>  
								  	<div class="col-md-5">
								  		<input id="userrepass" name="userrepass" type="password" placeholder="Nhập lại mật khẩu" class="form-control input-md">
								  	</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label" for="userrole">
										Quyền
									</label>
								  	<div class="col-md-5">
									    <select id="userrole" name="userrole" class="form-control">									    
								      		<option value="1">User</option>
								      		<option value="0">Admin</option>
									    </select>
								  	</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label" for="MaxLoanAmount">
								  	</label> 
									<div class="col-md-5" >
									  	<button type="submit" class="btn btn-success">Thêm</button>
	  									<button type="reset" class="btn btn-danger">Tải lại</button>
	  								</div>
								</div>
							</form>
	                    </div>	                    
	                </div>
	            </div>
	            <!--End Advanced Tables -->
	        </div>
	    </div>
	</div>
</div>
@endsection