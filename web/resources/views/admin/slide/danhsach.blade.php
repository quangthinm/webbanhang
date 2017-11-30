@extends('admin.layout.index')
@section('content')
<div id="page-wrapper" >
	<div class="header"> 
		<h1 class="page-header">
		    Danh sách <small>Slide</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="admin/trang-chu">Trang chủ</a></li>
			<li><a href="{{route('danhsachslide')}}">Slide</a></li>
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
	                </div>
	                <div class="panel-body">
	                    <div class="table-responsive">
	                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
	                            <thead>
	                                <tr>
	                                    <th>ID</th>
	                                    <th>Mô tả</th>
	                                    <th>Hình</th>
	                                    <th>Trạng thái</th>
	                                    <th>Edit</th>
	                                    <th>Delete</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                            	@foreach($danhsachslide as $slide)
	                                <tr class="odd gradeX">
	                                    <td>{{$slide->id}}</td>
	                                    <td>{{$slide->slide_derc}}</td>
	                                    <td>{{$slide->slide_img}}</td>
	                                    <td>{{$slide->slide_status}}</td>
	                                    <td><a href="admin/slide/sua/{{$slide->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
	                                    <td><a href="admin/slide/xoa/{{$slide->id}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
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