@extends('backend._templates.admin')

{{-- Judul Website --}}
@section('title')
	{{{ $title }}}
@stop

{{-- Active Icon --}}
@section('category') active first @stop

@section('breadcrumb') 
	<i class="icofont-sitemap"></i> {{{ $title }}}
@stop

@section('breadcrumb1') 
	<a href="{{ route('categories') }}">@lang('backend/contents.home.category') </a>
@stop

@section('breadcrumb2') 
	@lang('backend/contents.category.title.list')
@stop

@section('styles')
	{{ HTML::style('packages/Stilearn/css/responsive-tables.css') }}
@stop

{{-- Content --}}
@section('content')
	
<!--box body-->
<div class="box-body corner-bottom">
	<a href="{{ route('newCategory') }}" class="btn btn-info"><i class="icon-plus icon-white"></i> @lang('backend/general.button.create')</a>
	<hr />
	
	@if(Session::has('error'))
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		{{ Session::get('error') }}
	</div>
	@endif

	@if(Session::has('success'))
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		{{ Session::get('success') }}
	</div>
	@endif

	@if ($categories->count())

	<table class="table table-bordered table-striped responsive">

		<thead>
			<tr>
				<th>@lang('backend/general.table.category1')</th>
				<th>@lang('backend/general.table.category2')</th>
				<th>@lang('backend/general.table.count')</th>
				<th width="130px">@lang('backend/general.table.action')</th>
			</tr>
		</thead> 

	    <tbody>
	        @foreach ($categories as $category)

		        @if ($category->parentId == null)
	                <tr>
		                <td>{{{ $category->name }}}</td>
		                <td></td>
		                <td>{{ Category::find($category->id)->Article()->count() }}</td>
		                <td>
		                    <a href="{{ route('editCategory', $category->id) }}" class="btn btn-mini btn-success"><i class="icon-edit icon-white"></i> @lang('backend/general.button.edit')</a>
							<a href="{{ route('deleteCategory', $category->id) }}" class="btn btn-mini btn-danger ajaxDeleteCategory"><i class="icon-remove icon-white"></i> @lang('backend/general.button.delete')</a>
		                </td>
		            </tr>

		            @foreach ($category->InnerCategory()->get() as $innercat)
                        <tr>
	                        <td>></td>
			                <td>{{{ $innercat->name }}}</td>
			                <td>{{ Category::find($innercat->id)->Article()->count() }}</td>
			                <td>
			                    <a href="{{ route('editCategory', $innercat->id) }}" class="btn btn-mini btn-success"><i class="icon-edit icon-white"></i> @lang('backend/general.button.edit')</a>
								<a href="{{ route('deleteCategory', $innercat->id) }}" class="btn btn-mini btn-danger"><i class="icon-remove icon-white"></i> @lang('backend/general.button.delete')</a>
			                </td>   
                        </tr>
                    @endforeach

	            @endif
	        	
	            

	        @endforeach
	        
	    </tbody>
	</table>
	@else

		<center>@lang('backend/contents.category.message.empty')</center>

	@endif
	       
@stop