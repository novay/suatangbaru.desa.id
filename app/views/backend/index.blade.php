@extends('backend._templates.admin')

{{-- Judul Website --}}
@section('title')
	@lang('backend/contents.welcome') to JSpot Admin
@stop

{{-- Active Icon --}}
@section('dashboard') active first @stop

@section('breadcrumb') 
	<i class="icofont-home"></i> {{ Lang::get('backend/contents.home.dashboard') }} <small><strong>{{ Auth::user()->displayName }}</strong></small>
@stop

@section('breadcrumb1') 
	<a href="{{ route('admin') }}">@lang('backend/contents.home.home') </a>
@stop

@section('breadcrumb2') 
	@lang('backend/contents.welcome') 
@stop

@section('content')

	<center><h1>@lang('backend/contents.welcome')</h1></center>  
	<br/>	

	<div class="divider-content"><span></span></div> 

  	<!-- shortcut button -->
	<div class="shortcut-group">
	    <ul class="a-btn-group">
	        <li>
	            <a href="{{ route('newArticle') }}" class="a-btn grd-white" rel="tooltip" title="@lang('backend/contents.home.add')">
	                <span></span>
	                <span><i class="icofont-edit color-silver-dark"></i></span>
	                <span class="color-silver-dark"><i class="icofont-file color-silver-dark"></i></span>
	            </a>
	        </li>
	        <li>
	            <a href="#" class="a-btn grd-white" rel="tooltip" title="@lang('backend/contents.home.upload')">
	                <span></span>
	                <span><i class="icofont-upload color-silver-dark"></i></span>
	                <span class="color-silver-dark"><i class="icofont-upload-alt color-silver-dark"></i></span>
	            </a>
	        </li>
	        <li>
	            <a href="#" class="a-btn grd-white" rel="tooltip" title="@lang('backend/contents.home.message')">
	                <span></span>
	                <span><i class="icofont-envelope color-silver-dark"></i></span>
	                <span class="color-silver-dark"><i class="icofont-envelope-alt color-teal"></i></span>
	            </a>
	        </li>

	        <li>
	            <a href="#" class="a-btn grd-white" rel="tooltip" title="@lang('backend/contents.home.statistic')">
	                <span></span>
	                <span><i class="icofont-bar-chart color-silver-dark"></i></span>
	                <span class="color-silver-dark"><i class="typicn-lineChart"></i></span>
	            </a>
	        </li>
	        <li class="clearfix"></li>
	    </ul>
	</div><!-- /shortcut button -->

	<div class="divider-content"><span></span></div>     

	<!-- tab resume content -->
	<div class="row-fluid">
	    <!-- tab resume update -->
	    <div class="span6">
	        <div class="box corner-all">
	            <div class="box-header corner-top grd-white">
	                <div class="header-control pull-right">
	                    <a data-box="collapse"><i class="icofont-caret-up"></i></a>
	                    <a data-box="close" data-hide="rotateOutDownLeft">&times;</a>
	                </div>
	                <span><i class="icofont-pencil"></i> @lang('backend/contents.home.recentpost')</span>
	            </div>
	            <div class="box-body">
	                
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" data-src="js/holder.js/64x64" />
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="#">Lacinia non </a><small class="helper-font-small">by jane smith on 20 aug 2012, ip 192.168.56.7</small></h4>
                            <p>Raw denim you probably haven't heard of them jean shorts Austin.</p>
                            <div class="btn-group pull-right">
                                <a href="#" class="btn btn-mini">@lang('backend/general.button.approve')</a>
                                <a href="#" class="btn btn-mini btn-danger">@lang('backend/general.button.delete')</a>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-small btn-link pull-right">@lang('backend/contents.home.viewall') &rarr;</a>
                    <br/>
	            </div><!--/box-body-->
	        </div><!--/box-tab-->
	    </div><!-- tab resume update -->
	    <div class="span6">
	        <div class="box corner-all">
	            <div class="box-header corner-top grd-white">
	                <div class="header-control">
	                    <a data-box="collapse"><i class="icofont-caret-up"></i></a>
	                    <a data-box="close" data-hide="rotateOutDownRight">&times;</a>
	                </div>
	                 <span><i class="icofont-comment"></i> @lang('backend/contents.home.recentcomment')</span>
	            </div>
	            <div class="box-body">

                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" data-src="js/holder.js/64x64" />
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="#">Tortor dapibus </a><small class="helper-font-small">by jane doe on 9 aug 2012, ip 192.168.56.7</small></h4>
                            <p>Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
                            <div class="btn-group pull-right">
                                <a href="#" class="btn btn-mini">@lang('backend/general.button.edit')</a>
                                <a href="#" class="btn btn-mini btn-danger">@lang('backend/general.button.delete')</a>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <a href="#" class="btn btn-small btn-link pull-right">@lang('backend/contents.home.viewall') &rarr;</a>
                    <br/>
	            </div><!--/box-body-->
	            
	        </div>
	    </div>
	</div><!-- tab stat -->               
@stop