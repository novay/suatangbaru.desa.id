<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>@yield('title')</title>

		<link rel="stylesheet" type="text/css" href="{{ asset('packages/web/css/mainstyle-CDN.min.060911.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('packages/web/css/BlueHeader.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('packages/web/css/BluePages.css') }}">

		<script type="text/javascript" src="{{ asset('packages/web/js/jquery-1.7.2.min.js') }}"></script>
		
		<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
		
		<link rel="stylesheet" href="{{ asset('packages/web/css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('packages/web/css/bootstrap.css') }}">
		
		@yield('styles')
		<link rel="shortcut icon" href="{{ asset('assets/ico/favicon.png') }}">

    
    <body>
		<!-- Header Carousel -->
        <style type="text/css">		
			.showHand { cursor:pointer; }
			#blue-body #hp-boxes { top:-56px; }
			#header-hero .banner { float:left; height: 245px; width: 960px; padding-top:30px}
			#header-hero .banner #slide1 { background-image: url('{{ asset('packages/web/img/hero-home.jpg') }}'); }
			#header-hero .banner #slide2 { background-image: url('{{ asset('packages/web/img/hero-forums.jpg') }}'); }
			#header-hero .banner #slide3 { background-image: url('{{ asset('packages/web/img/hero-furyk.jpg') }}'); }
			#header-hero .banner .slide { background-repeat:no-repeat; display:none; height:240px; }
			#header-hero .banner .slide .radio { float: right; padding-top: 10px;}
			#header-hero .banner .slide .learnmore { clear: right; font-style:italic; padding-left:85px; padding-top: 90px;}
			#header-hero #banner-wrap { margin-left:-40px; width:1050px; }
			#header-hero #banner-wrap .page-arrow { cursor:pointer; margin-top:100px; width:40px;}
			#header-hero #banner-wrap .page-arrow-left { float:left; }
			#header-hero #banner-wrap .page-arrow-right { float:right; text-align:right; width:40px; }
	/*
			#header-hero .nav { position:relative; top:-138px;  }
			#header-hero .nav .page-arrow { cursor:pointer; width:70px;}
			#header-hero .nav .page-arrow-left{ float:left; margin-left: -40px; }
			#header-hero .nav .page-arrow-right{ float:right; background-position:right 0px; margin-right:-40px; text-align:right; }
	*/
			#header-hero .paging { top:-62px; padding-left:50px; position:relative; }
			#header-hero .paging .page-nob { background-image:url('{{ asset('packages/web/img/bg-rotator-page.png') }}'); background-repeat:no-repeat; background-color:Transparent;
				 cursor:pointer; float:left; height:10px; padding:0px; padding-right:8px; width:10px;  }
			#header-hero .paging .page-nob-current { background-position:0px -15px;}

			.checkoutPathBslWb-alternate { display:none; }
		</style>
  
             <!-- header -->
        <div id="blue-header" style="padding-top:5px">
	        <div class="section-wrapper">
				
				<div id="header-site-nav">
					<ul id="nav-main">
						<li class="show-more">
							<a><img src="{{ asset('packages/web/img/nav-profil.png') }}" alt="Profil"></a>
							<div class="flyout">
								<ul>
									<li><a href="{{ route('view-article', Article::find(2)->alias) }}">Sejarah</a></li>
									<li><a href="{{ route('view-article', Article::find(3)->alias) }}">Batas Wilayah</a></li>
									<li><a href="#">Galeri Foto</a></li>
								</ul>
							</div>
						</li>
						<li class="show-more">
							<a><img src="{{ asset('packages/web/img/nav-potensi.png') }}" alt="Potensi"></a>
							<div class="flyout">
								<ul>
									<li><a href="{{ route('view-article', Article::find(4)->alias) }}">Sumber Daya Alam</a></li>
									<li><a href="{{ route('view-article', Article::find(5)->alias) }}">Sumber Daya Manusia</a></li>
									<li><a href="{{ route('view-article', Article::find(6)->alias) }}">Sarana & Prasarana</a></li>
									<li><a href="{{ route('view-article', Article::find(7)->alias) }}">Prestasi</a></li>
								</ul>			
							</div>
						</li>
						<li class="show-more">
							<a><img src="{{ asset('packages/web/img/nav-lembaga.png') }}" alt="Lembaga"></a>
							<div class="flyout">
								<ul>
									<li><a href="{{ route('pemerintahan-desa') }}">Pemerintahan Desa</a></li>
									<li><a href="{{ route('badan-pemusyawaratan-desa') }}">Badan Pemusyawaratan Desa</a></li>
									<li><a href="{{ route('lembaga-pengabdian-masyarakat') }}">Lembaga Pengabdian Masyarakat</a></li>
								</ul>
							</div>
						</li>
						<li class="show-more">
						    <a href="{{ route('statistik') }}"><img src="{{ asset('packages/web/img/nav-suara.png') }}" alt="Statistik"></a>
						</li>
					</ul>
					<span class="corners tl"></span><span class="corners tr"></span><span class="corners bl"></span><span class="corners br"></span>
				</div>
				
				<!-- Dropdown -->
				<script type="text/javascript">
				$(function(){
				var timer;
					$("#nav-main li.show-more").hover(function(){
						var dropdown = $(this);
						if(timer) {
							clearTimeout(timer);
							timer = null;
						}
						timer = setTimeout(function() {
							dropdown.addClass("open");
						}, 300)
					},function(){
						$("ul#nav-main li").removeClass("open");
						clearTimeout(timer);
					});
				});
				</script>
				
				<!-- logo -->
				<div id="header-logo">
					<a href="{{ route('home') }}">
						<img src="{{ asset('packages/web/img/logo.png') }}" class="logo">
					</a>
				</div>
                <div class="clr"></div>
				
            <!-- body -->
			<div id="header-hero" class="">
					<div id="banner-wrap">
						<div class="page-arrow page-arrow-left" rel="-" style="display: none;">
							<img src="{{ asset('packages/web/img/bg-rotator-arrow-left.png') }}">
						</div>
					<div class="banner">
						<div id="slide1" rel="#overlay1" class="slide" style="display: block;"></div>
						<div id="slide2" rel="#overlay1" class="slide " style="display: none;"></div>
						<div id="slide3" rel="#overlay1_ignore" class="slide" style="display: none;"></div>
					</div>
						<div class="page-arrow page-arrow-right" rel="+" style="display: block;">
							<img src="{{ asset('packages/web/img/bg-rotator-arrow-right.png') }}">
						</div>		
					<div class="clr"></div>
					</div>
						<div id="slide-nav" class="paging">
							<div class="page-nob page-nob-current" rel="1"></div>
							<div class="page-nob" rel="2"></div>
							<div class="page-nob" rel="3"></div>
						</div>
					<div class="clr"></div>
				</div>
            

				@yield('statistik')

				@yield('konten')
            
			<script type="text/javascript" language="javascript">

				// start the rotator
				var rotator = {};
				$(document).ready(function() {
					//return;
					$('#banner-wrap .page-arrow-left').toggle(false);
					$('#slide-nav div').click(function(obj) {
						var nextSlide = parseInt(this.attributes["rel"].value) - 1;
						rotator.goTo(nextSlide);
					});

					$('#banner-wrap .page-arrow').click(function(obj) {
						if (this.attributes["rel"].value == "+")
							rotator.goNext();
						else
							rotator.goPrevious();
					});

					function Rotator() {
						var INTERVAL = 6000; // 6 seconds
						var _intervalId;


						var _active = 0;
						var _slides = [
						$("#slide1"),
						$("#slide2"),                $("#slide3")
					];

						function _hook() {
							_intervalId = setTimeout("rotator.rotate()", INTERVAL);
						}

						function arrowNavSet(index) {
							var current = index;
							if (current == 0)
								$('#banner-wrap .page-arrow-left').toggle(false);
							else {
								$('#banner-wrap .page-arrow-left').toggle(true);
							}

							if (current == _slides.length - 1)
								$('#banner-wrap .page-arrow-right').toggle(false);
							else
								$('#banner-wrap .page-arrow-right').toggle(true);
						}

						this.goTo = function(index) {
							clearTimeout(_intervalId);
							$(_slides[_active]).toggle(false);
							_active = index;
							$(_slides[_active]).fadeIn();
							$('#slide-nav div').removeClass('page-nob-current');
							$('#slide-nav div:nth-child(' + (_active + 1) + ')').addClass('page-nob-current');
							arrowNavSet(index);
							_hook();
						}

						this.goNext = function() {
							this.goTo(_active + 1);
						}

						this.goPrevious = function() {
							this.goTo(_active - 1);
						}

						this.rotate = function() {
							_slides[_active].fadeOut(function() {
								_active = (_active + 1) % _slides.length;
								$('#slide-nav div').removeClass('page-nob-current');
								$('#slide-nav div:nth-child(' + (_active + 1) + ')').addClass('page-nob-current');
								arrowNavSet(_active);
								_slides[_active].fadeIn(function() {
									_hook();
								});
							});
						};


						$('#header-hero .nav .page-arrow-left').toggle(false);
						_hook();
					}


					rotator = new Rotator();
				});
			
			</script>
            
        </form>
		<!-- Footer -->     
		</div>
		<div id="blue-footer">
			<div class="section-wrapper">
		
				<div id="brands-bar">

					<div class="our-brands">
						<p class="heading">Desa Suatang Baru - Paser Belengkong - Kabupaten Paser</p>
						<p>
							<a>Developed by KKN Angkatan XXXIX UNMUL • JunkSpot CMS • Design Template by Web.com Group, Inc.</a>
						</p>
					</div>
					<div class="clr"></div>
				</div>
			</div>
		</div>
		
		@yield('scripts')

	</body>
</html>