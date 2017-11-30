@extends('layout.index')
@section('content')
<div class="breadcrumb">
	<div class="container">
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="listing-left-column.html">Women’s</a></li>
			<li>Dresses</li>
		</ul>
	</div>
</div>
<!-- Content -->
<div id="pageContent">
	<div class="container offset-0">
		<div class="row">
			<div class="col-md-5">
				<div class="product-main-image">
					<div class="product-main-image-item">
						<img class="zoom-product" src='http://stylist.my-style.in/demo/images/product/product-big-1.jpg' data-zoom-image="images/product/product-big-1-zoom.jpg" alt="" />
					</div>
				</div>
			</div>
			<div class="col-md-7">
				<div class="product-info">
					<h1 class="title vendor-top">Daisy Street 3/4 Sleeve Panelled Casual Shirt</h1>
					<div class="price">
						<span class="new-price">$45</span><span class="old-price">$48</span>
					</div>
					<div class="description">
						<div class="brand">
							<img src="images/custom/product-brand.png" alt="">
						</div>
						<div class="text">
							Silver, metallic-blue and metallic-lavender silk-blend jacquard, graphic pattern, pleated ruffle along collar, long sleeves with button-fastening cuffs, buckle-fastening silver skinny belt, large pleated rosettes at hips. Dry clean. Zip and hook fastening at back. 100% silk. Specialist clean
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container offset-80">
		<div class="tt-product-page__tabs tt-tabs">
		    <div class="tt-tabs__head">
		        <ul>
		            <li data-active="true"><span>DESCRIPTION</span></li>
		            <li><span>CUSTOM TAB</span></li>
		        </ul>
		        <div class="tt-tabs__border"></div>
		    </div>
		    <div class="tt-tabs__body">
	            <div>
	               <span class="tt-tabs__title">CHI TIẾT</span>
	               <div class="tt-tabs__content">
		               	<h5 class="tab-title">CHI TIẾT</h5>
						13321
	               </div>
	            </div>
	            <div>
	                <span class="tt-tabs__title">ĐÁNH GIÁ</span>
	                <div class="tt-tabs__content">
	                    <h5 class="tab-title">BÌNH LUẬN</h5>
						<div class="fb-comments" data-href="" data-width="100%" data-numposts="5"></div>
	                </div>
	            </div>
		    </div>
		</div>
	</div>
</div>
@endsection