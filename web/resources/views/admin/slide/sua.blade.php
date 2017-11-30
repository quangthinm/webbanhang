@extends('admin.layout.index')
@section('content')
<div id="page-wrapper" >
	<div class="header"> 
		<h1 class="page-header">
		    Sửa <small>slide</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="admin/trang-chu">Trang chủ</a></li>
			<li><a href="{{route('danhsachslide')}}">Slide</a></li>
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
	                    	<form class="form-horizontal" action="admin/slide/sua/{{$slide->id}}" method="post" enctype="multipart/form-data">
	                    		<input type="hidden" name="_token" value="{{csrf_token()}}"/>
								<!-- Text input-->
								<div class="form-group">
								  	<label class="col-md-4 control-label" for="slide_derc">
								  		Mô tả
								  	</label>  
								  	<div class="col-md-5">
								  		<input id="slide_derc" name="slide_derc" type="text" value="{{$slide->slide_derc}}" class="form-control input-md" >
								  	</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label" for="slide_status">
										Trạng thái
									</label>
								  	<div class="col-md-5">
									    <select id="slide_status" name="slide_status" class="form-control">									    
									      		<option 
									      			@if($slide->slide_status == 1)
									      				selected
									      			@endif
									      			 value="1">Hiện
									      		</option>
									      		<option 
									      			@if($slide->slide_status == 0)
									      				selected
									      			@endif
									      		 value="0">Ẩn</option>
									    </select>
								  	</div>
								</div>
								<div class="form-group">
								  	<label class="col-md-4 control-label" for="slide_img">
								  		Hình
								  	</label>  
								  	<div class="col-md-5">								  	
								  		<img src="asset/slide/{{$slide->slide_img}}"/>
								  	</div>
								</div>
								<div class="form-group">
								  	<label class="col-md-4 control-label" for="slide_img">
								  		Hình ảnh
								  	</label>  
								  	<div class="col-md-5">								  	
								  		<input type="file" id="slide_img" name="slide_img" class="form-control input-md">
								  	</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label" for="MaxLoanAmount">
								  	</label> 
									<div class="col-md-5" >
									  	<button type="submit" class="btn btn-success">Sửa</button>
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