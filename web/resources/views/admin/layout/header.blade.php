<nav class="navbar navbar-default top-navbar" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html"><strong><i class="icon fa fa-plane"></i> INDEX</strong></a>
		
<div id="sideNav" href="">
<i class="fa fa-bars icon"></i> 
</div>
    </div>

    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
            @if(Auth::check())
                <li><a href="#"><i class="fa fa-user fa-fw"></i> {{Auth::user()->user_name}}</a>
                </li>
                <li class="divider"></li>
                <li><a href="admin/dang-xuat"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            @endif
            </ul>
            <!-- /.dropdown-user -->
        </li>
    </ul>
</nav>
<!--/. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <a class="active-menu" href="admin/trang-chu"><i class="fa fa-dashboard"></i> Tổng quan</a>
            </li>
			<li>
                <a href="#"><i class="fa fa-sitemap"></i> Sản phẩm<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/sanpham/danh-sach">Danh sách</a>
                    </li>
                    <li>
                        <a href="{{route('themsanpham')}}">Thêm</a>
                    </li>
				</ul>
			</li>
            <li>
                <a href="#"><i class="fa fa-sitemap"></i> Danh mục sản phẩm<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('danhsachdanhmucsanpham')}}">Danh sách</a>
                    </li>
                    <li>
                        <a href="{{route('themdanhmucsanpham')}}">Thêm</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-sitemap"></i> Danh mục con<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('danhsachdanhmuccon')}}">Danh sách</a>
                    </li>
                    <li>
                        <a href="{{route('themdanhmuccon')}}">Thêm</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-sitemap"></i> Kiến thức<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('danhsachkienthuc')}}">Danh sách</a>
                    </li>
                    <li>
                        <a href="{{route('themkienthuc')}}">Thêm</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-sitemap"></i> Slide<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('danhsachslide')}}">Danh sách</a>
                    </li>
                    <li>
                        <a href="{{route('themslide')}}">Thêm</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-sitemap"></i> User<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('danhsachuser')}}">Danh sách</a>
                    </li>
                    <li>
                        <a href="{{route('themuser')}}">Thêm</a>
                    </li>
                </ul>
            </li>
            <li>
                 <a href="{{route('danhsachcontact')}}"><i class="fa fa-sitemap"></i> Liên hệ<span class="fa arrow"></span></a>
            </li>
        </ul>

    </div>

</nav>
<!-- /. NAV SIDE  -->