<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Elemen header halaman yang mungkin dibutuhkan
		================================================== -->
		<meta charset="utf-8" />
		<!-- Pastikan halaman bisa diakses melalui IE dan Chrome walaupun kalian tidak menggunakan keduanya -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>
		@section('title')
			Administrator
		@show
		</title>

		<meta name="keywords" content="@yield('keywords')" />
		<meta name="author" content="@yield('author')" />
		<!-- Biasanya pencarian Google berdasarkan ini -->
		<meta name="description" content="@yield('description')" />

		<!-- Berbicara tentang Google, jangan lupa daftarkan web Anda ke http://google.com/webmasters -->
		<meta name="google-site-verification" content="">

		<!--  Mobile Viewport Fix -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

		<!-- CSS
		================================================== -->
		{{ HTML::style('assets/css/bootstrap.css') }}
		{{ HTML::style('assets/css/bootstrap-responsive.css') }}

		<style>
			body {
				padding: 60px 0;
			}
		</style>

		@yield('styles')

		<!-- Favicons
		================================================== -->
		<link rel="shortcut icon" href="{{ asset('assets/ico/favicon.png') }}">
	

	<style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>

</head>
<body>

@yield('content')

<center>Copyright &copy; {{ date('Y') }} JunkSpot CMS | Develop by <a href='http://www.facebook.com/novaymawbowo' target='_blank'>Novay</a></center> 
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>


