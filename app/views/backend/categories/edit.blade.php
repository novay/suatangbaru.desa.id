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
	@lang('backend/contents.category.title.editbread') 
@stop

{{-- Content --}}
@section('content')

	{{ Form::model($category, ['route' => ['editCategory', $category->id], 'method' => 'PUT', 'class'=>'form-horizontal']) }}
	{{ Form::token() }}
		<fieldset>
	        <div class="control-group {{ $errors->has('name') ? 'error' : '' }}">
	        	{{ Form::label('name', Lang::get('backend/contents.category.form.name'), ['class'=>'control-label']) }}
	        	<div class="controls">
		            {{ Form::text('name', $category->name, ['class'=>'span5']) }}
		            {{ $errors->first('name', '<span class="help-inline">*:message</span>') }}
	            </div>
	        </div>
	        <div class="control-group">
                {{ Form::label('name', Lang::get('backend/contents.category.form.parent'), ['class'=>'control-label']) }}
                <div class="controls">
                	{{ Form::select('parentId', Category::parentDropdown()) }}
                </div>
            </div>
	        <div class="control-group">
	        	<div class="controls">
			        {{ Form::submit(Lang::get('backend/general.button.update'), ['class' => 'btn btn-primary']) }}
			        <a href="{{ route('categories') }}" class="btn btn-inverse">{{ Lang::get('backend/general.button.back') }}</a>
		        </div>
	        </div>
	    </fieldset>
	    
	{{ Form::close() }}

@stop