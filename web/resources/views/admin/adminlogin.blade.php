<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <!-- Latest compiled and minified CSS & JS -->
      <base href="{{ asset('') }}"></base>
    <!-- Bootstrap Core CSS -->
    <link href="admin_asset/css/bootstrap.css" rel="stylesheet">
    <link href="admin_asset/css/login.css" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="form-signin">
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}}<br/>
                        @endforeach
                    </div>
                @endif
                @if(session('thongbao'))
                    <div class="alert alert-danger">
                        {{session('thongbao')}}
                    </div>
                @endif
                <form action="admin/dang-nhap" method="POST" role="form">
                    <input type="hidden" name="_token" value="{{csrf_token('')}}">
                    <legend>Đăng nhập</legend>
                    <div class="form-group">
                        <label for="">Tên đăng nhập</label>
                        <input type="text" class="form-control" name="username" value="{{ old('username')}}">
                    </div>
                    <div class="form-group">
                        <label for="">Mật khẩu</label>
                        <input type="password" class="form-control" name="userpass">
                    </div>
                    <!--
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Remember me
                        </label>
                    </div>
                    -->
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Đăng nhập</button> 
                </form>
            </div>
        </div>
    </div>
</body>
</html>