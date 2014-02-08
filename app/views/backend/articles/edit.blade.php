@extends('backend._templates.admin')

{{-- Judul Website --}}
@section('title')
	{{{ $title }}}
@stop

{{-- Active Icon --}}
@section('article') active first @stop

@section('breadcrumb') 
	<i class="icofont-edit"></i> {{{ $title }}}
@stop

@section('breadcrumb1') 
	<a href="{{ route('articles') }}">@lang('backend/contents.home.article') </a>
@stop

@section('breadcrumb2') 
	@lang('backend/contents.article.title.edit') 
@stop

@section('styles')
{{ HTML::script('plugin/tinymce/tinymce.min.js') }}

<script>
    tinymce.init(
    {
    	selector:'textarea',
    	subfolder:"", 
    	plugins: [ 
    		"advlist autolink link image lists charmap print preview hr anchor pagebreak",
    		"searchreplace wordcount visualblocks visualchars code insertdatetime media nonbreaking",
    		"table contextmenu directionality emoticons paste textcolor filemanager" 
    	],
    	image_advtab: true,
    	toolbar: "undo redo | filemanager | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect forecolor backcolor | link unlink anchor | image media | print preview code | pagebreak"
   		
    });
</script>
@stop

{{-- Content --}}
@section('content')

	{{ Form::model($article, ['route' => ['editArticle', $article->id], 'method' => 'PUT', 'class'=>'form-inline', 'autocomplete'=>'off']) }}
	{{ Form::token() }}

		<!-- Dropdown Kategori dan Judul Artikel -->
		<div class="controls-row">
			<div class="control-group span3">
				{{ Form::label('categoryId', Lang::get('backend/contents.article.form.category')) }}
				<div class="controls">
				{{ Form::select('categoryId', Category::dropdown() , $article->categoryId) }}
				</div>
			</div>
			<div class="control-group {{ $errors->has('title') ? 'error' : '' }} span9">
				{{ Form::label('title', Lang::get('backend/contents.article.form.name')) }}
				<div class="controls">
					{{ Form::text('title', Input::old('title', $article->title), ['class'=>'span7', 'placeholder'=>Lang::get('backend/contents.article.form.type')]) }}
					{{ $errors->first('title', '<span class="help-inline">*:message</span>') }}
				</div>
			</div>

			<!-- Content -->
			<div class="control-group">
				{{ Form::label('content', Lang::get('backend/contents.article.form.content')) }}
				<div class="controls">
					{{ Form::textarea('content', $article->content, ['rows'=>'20']) }}
				</div>
			</div>	
			
			<div class="divider-content"><span></span></div>

			<div class="control-group">
				<h4><b>@lang('backend/contents.article.form.final')</b></h4><hr/>
                <table>
                    <tr>
                        <td><p>@lang('backend/contents.article.form.status') </p></td>
                        <td>{{ Form::select('status', Junkspot::getStatusArtikel(), Input::old('status', $article->status)) }}</td>
                       	<td><p>@lang('backend/contents.article.form.author') </p></td>
                        <td>{{ Form::select('authorId', Junkspot::getAuthorArtikel(), $article->authorId - 1, Auth::user()->id != 1 ? array("disabled" => "enabled") : [] ) }}</td>
                        <td><p>@lang('backend/contents.article.form.comment') </p></td>
                        <td>{{ Form::select('comment', [ Lang::get('backend/general.other.no') , Lang::get('backend/general.other.yes') ], $article->comment ) }}</td>
                    </tr>
                </table>

			</div>	
			<div class="divider-content"><span></span></div>
		</div>

		<!-- Tombol Aksi -->
		<div class="control-group">
			{{ Form::submit(Lang::get('backend/general.button.update'), ['class' => 'btn btn-primary']) }}
			{{ Form::reset(Lang::get('backend/general.button.reset'), ['class'=>'btn']) }}
			<a href="{{ route('articles') }}" class="btn btn-inverse">{{ Lang::get('backend/general.button.back') }}</a>
		</div>

	{{ Form::close() }}

@stop