<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Elemen header halaman yang mungkin dibutuhkan
        ================================================== -->
        <meta charset="utf-8" />
        <!-- Pastikan halaman bisa diakses melalui IE dan Chrome walaupun kalian tidak menggunakan keduanya -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <title>
            @yield('title')
        </title>
        <!--  Mobile Viewport Fix -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

        <!-- Biasanya pencarian Google berdasarkan ini -->
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="keywords" content="" />

        <!-- google font -->
        <link href="http://fonts.googleapis.com/css?family=Aclonica:regular" rel="stylesheet" type="text/css" />

        <!-- CSS
        ================================================== -->
        {{ HTML::style('packages/Stilearn/css/bootstrap.css') }}
        {{ HTML::style('packages/Stilearn/css/stilearn.css') }}
        {{ HTML::style('packages/Stilearn/css/bootstrap-responsive.css') }}
        {{ HTML::style('packages/Stilearn/css/stilearn-responsive.css') }}
        {{ HTML::style('packages/Stilearn/css/stilearn-helper.css') }}
        {{ HTML::style('packages/Stilearn/css/stilearn-icon.css') }}
        {{ HTML::style('packages/Stilearn/css/font-awesome.css') }}
        {{ HTML::style('packages/Stilearn/css/datepicker.css') }}
        {{ HTML::style('packages/Stilearn/css/responsive-tables.css') }}
        {{ HTML::style('packages/Stilearn/css/uniform.default.css') }}

        @yield('styles')

        <!-- Favicons
        ================================================== -->
        <link rel="shortcut icon" href="{{ asset('assets/ico/favicon.png') }}">
        
    </head>

    <body>



    <!-- section header -->
        <header class="header fixed">
            <!--nav bar helper-->
            <div class="navbar-helper">
                <div class="row-fluid">
                    <!--panel site-name-->
                    <div class="span2">
                        <div class="panel-sitename">
                            <h2>
                                <a href="{{{ URL::to('/') }}}" title="@lang('backend/contents.home.view')" target="_blank" >
                                  <span class="color-teal">Junk</span>Spot
                                </a>
                            </h2>
                        </div>
                    </div>
                    <div class="pull-right" style="margin-right:10px;">
                        <a href="#"><img src="{{ asset('assets/ico/id.png') }}"/></a>
                        <a href="#"><img src="{{ asset('assets/ico/en.png') }}"/></a>
                    </div>
                    <!--/panel name-->
                </div>
            </div><!--/nav bar helper-->
        </header>
    
        <!-- section content -->  
        <section class="section">  
            <div class="row-fluid">
                <!-- span side-left -->
                <div class="span1">
                    <!--side bar-->
                    <aside class="side-left fixed">
                        <ul class="sidebar">
                            <li class="@yield('dashboard')">
                                <a href="{{ route('login') }}">
                                    <div class="helper-font-24">
                                        <i class="icofont-home"></i>
                                    </div>
                                    <span class="sidebar-text">@lang('backend/contents.home.home')</span>
                                </a>
                            </li>
                            <li class="@yield('article')">
                                <a href="{{ route('articles') }}">
                                    <div class="helper-font-24">
                                        <i class="icofont-edit"></i>
                                    </div>
                                    <span class="sidebar-text">@lang('backend/contents.home.article')</span>
                                </a>
                            </li>
                            <li class="@yield('category')">
                                <a href="{{ route('categories') }}">
                                    <div class="helper-font-24">
                                        <i class="icofont-sitemap"></i>
                                    </div>
                                    <span class="sidebar-text">@lang('backend/contents.home.category')</span>
                                </a>
                            </li>
                            <li class="@yield('comment')">
                                <a href="{{ route('comments') }}">
                                    <div class="helper-font-24">
                                        <i class="icofont-comments"></i>
                                    </div>
                                    <span class="sidebar-text">@lang('backend/contents.home.comment')</span>
                                </a>
                            </li>
                            <li class="@yield('config')">
                                <a href="">
                                    <div class="helper-font-24">
                                        <i class="icofont-cog"></i>
                                    </div>
                                    <span class="sidebar-text">@lang('backend/contents.home.config')</span>
                                </a>
                            </li>
                            <li>
                              <a href="{{ route('logout') }}">
                                <div class="helper-font-24">
                                  <i class="icofont-signout"></i>
                                </div>
                                <span class="sidebar-text">@lang('backend/contents.home.logout')</span>
                              </a>
                            </li>
                            
                        </ul>

                    </aside><!--/side bar -->
                </div><!-- span side-left -->
                
                <!-- span content -->
                <div class="span9">
                    <!-- content -->
                    <div class="content">
                        <!-- content-header -->
                        <div class="content-header">
                            <h2>@yield('breadcrumb')</h2>
                        </div><!-- /content-header -->
                        
                        <!-- content-breadcrumb -->
                        <div class="content-breadcrumb">                            
                            <!--breadcrumb-->
                            <ul class="breadcrumb">
                                <li>@yield('breadcrumb1') <span class="divider">&rsaquo;</span></li>
                                <li class="active">@yield('breadcrumb2')</li>
                            </ul><!--/breadcrumb-->
                        </div><!-- /content-breadcrumb -->

                        <!-- content-body -->
                        <div class="content-body">

                          <div class="row-fluid">
                            <div class="span-full">

                              @yield('content')
                                                    
                            </div>
                          </div>
                        </div><!--/content-body -->
                    </div><!-- /content -->
                </div><!-- /span content -->  

            </div>
        </section>

        <!-- section footer -->
        <footer>
            <a rel="to-top" href="#top"><i class="icofont-circle-arrow-up"></i></a>
        </footer>

        <!-- javascript
        ================================================== -->
        {{ HTML::script('packages/Stilearn/js/jquery.js') }}
        {{ HTML::script('packages/Stilearn/js/jquery-ui.min.js') }}
        {{ HTML::script('packages/Stilearn/js/bootstrap.js') }}
        {{ HTML::script('packages/Stilearn/js/stilearn-base.js') }}
        {{ HTML::script('packages/Stilearn/js/datepicker/bootstrap-datepicker.js') }}
        {{ HTML::script('packages/Stilearn/js/uniform/jquery.uniform.js') }}

        @yield('scripts')

    </body>
</html>
