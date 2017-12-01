@extends('admin.layout.index')
@section('content')
<div id="page-wrapper" >
	<div class="header"> 
		<h1 class="page-header">
		    Danh sách <small>liên hệ</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="admin/trang-chu">Trang chủ</a></li>
			<li><a href="{{route('danhsachcontact')}}">liên hệ</a></li>
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
	                </div>
	                <div class="panel-body">
	                    <div class="table-responsive">
	                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
	                            <thead>
	                                <tr>
	                                    <th>ID</th>
	                                    <th>Tên</th>
	                                    <th>Email</th>
	                                    <th>Nội dung</th>
	                                    <th>Delete</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                            	@foreach($contact as $ct)
	                                <tr class="odd gradeX">
	                                    <td>{{$ct->id}}</td>
	                                    <td>{{$ct->name}}</td>
	                                    <td>{{$ct->email}}</td>
	                                    <td>{{$ct->content}}</td>
	                                    <td><a href="admin/lienhe/xoa/{{$ct->id}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
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