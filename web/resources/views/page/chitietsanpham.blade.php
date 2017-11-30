@extends('layout.index')
@section('content')
<div class="breadcrumb">
	<div class="container">
		<ul>
			<li><a href="{{route('trangchu')}}">Trang chủ</a></li>
			<li><a href="">{{$danhmucsanpham->CategoryName}}</a></li>
			<li>{{$sanpham->Product_name}}</li>
		</ul>
	</div>
</div>
<!-- Content -->
<div id="pageContent">
	<div class="container offset-0">
		<div class="row">
			<div class="col-md-4 col-lg-3 col-xl-3 aside leftColumn">
				<p class="mtit">DANH MỤC</p>
				<ul class="danhmuc">
					@foreach($danhmuccon as $dmc)
					<li><a href="">{{$dmc->sub_name}}</a></li>
					@endforeach
				</ul>
			</div>
			<!-- center col -->
			<div class="col-md-8 col-lg-9 col-xl-9">
				<div id="pageContent">
					<div class="container offset-0">
						<div class="row col-md-12">
							<div class="col-md-4">
								<div class="product-main-image">
									<div class="product-main-image-item">
										<img class="zoom-product" src='asset/products/{{$sanpham->Product_Img}}' data-zoom-image="" alt="" />
									</div>
								</div>
							</div>
							<div class="col-md-5">
								<div class="product-info">
									<h1 class="title vendor-top">{{$sanpham->Product_name}}</h1>
									<div class="price">
										<span class="new-price">{{number_format($sanpham->Product_Price)}} VNĐ</span>
										<!--<span class="old-price">$48</span>-->
									</div>
									<div class="description">
										<div class="brand">
											<img src="images/custom/product-brand.png" alt="">
										</div>
										<div class="text">
											{!!$sanpham->Product_Derc!!}
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="tt-product-page__tabs tt-tabs col-md-8">
							    <div class="tt-tabs__head">
							        <ul class="col-md-12">
							            <li data-active="true"><span>MÔ TẢ</span></li>
							            <li><span>BÌNH LUẬN</span></li>
							        </ul>
							        <div class="tt-tabs__border"></div>
							    </div>
							    <div class="tt-tabs__body">
						            <div>
						               <span class="tt-tabs__title">CHI TIẾT</span>
						               <div class="tt-tabs__content">
							               	<h5 class="tab-title">CHI TIẾT</h5>
											{!!$sanpham->Product_Detail!!}
						               </div>
						            </div>
						            <div>
						                <span class="tt-tabs__title">ĐÁNH GIÁ</span>
						                <div class="tt-tabs__content">
						                    <h5 class="tab-title">BÌNH LUẬN</h5>
											<div class="fb-comments" data-href="san-pham/{!!$sanpham->id!!}/{!!$sanpham->Slug!!}.html" data-width="100%" data-numposts="5"></div>
						                </div>
						            </div>
							    </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection