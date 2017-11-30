<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>StyList - Responsive HTML5 Template</title>
		<base href="{{asset('')}}"
		<meta name="keywords" content="HTML5 Template">
		<meta name="description" content="StyList - Responsive HTML5 Template">
		<meta name="author" content="etheme.com">
		<link rel="shortcut icon" href="asset/images/favicon.ico">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="asset/css/bootstrap.min.css">
		<link rel="stylesheet" href="asset/css/slick.min.css">
		<link rel="stylesheet" type="text/css" href="asset/css/settings.min.css" media="screen" />
		<link rel="stylesheet" href="asset/css/template.css">
		<link rel="stylesheet" href="http://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css">
	</head>
	<body>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.11&appId=2066965863528687';
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		
		@include('layout.header')
		<!-- Content -->
			@yield('content')
		<!-- Content -->
		@include('layout.footer')
		
		<script src="asset/js/jquery-2.1.4.min.js"></script>
		<script src="asset/js/bootstrap.min.js"></script>
		<script src="asset/js/jquery.plugin.min.js"></script>
		<script src="asset/js/1slick.min.js"></script>
		<script src="asset/js/1jquery.themepunch.tools.min.js"></script>
		<script src="asset/js/1jquery.themepunch.revolution.min.js"></script>
		<script src="asset/js/panelmenu.js"></script>
		<script src="asset/js/1quick-view.js"></script>
		<script src="asset/js/main.js"></script>
		
	</body>
</html>