@extends('frontend._templates.homepage')

{{-- Judul Website --}}
@section('title')
	JunkSpot CMS Engine
@stop

@section('artikel')
	@foreach ($articles as $article)

		<a style="display:none;">
			<?php if($article->Comments()->count() == 0) { $shit = 'Tinggalkan Komentar'; } else {	$shit = $article->Comments()->count() . " " . Illuminate\Support\Pluralizer::plural('Comment', $article->comments()->count()); } ?>
		</a>

	<div class="bucket">
		<p class="heading">{{{ $article->title }}}</p>
		<hr/>
		<p>Diposkan oleh {{ ucfirst($article->User->displayName) }}</p>
		<p>Terbit {{ $article->created_at->diffForHumans() }}</p>
		<hr/>
		@if($article->comment == 0)
		
		@else
			<a href="{{{ $article->UrlArtikel() }}}#komentar"><p>{{ $shit }}</p></a>
		@endif
		<hr/><br/>
		<p><a href="{{{ $article->UrlArtikel() }}}"><img src="{{ asset('packages/web/img/btn-read-more.png') }}"></a></p>
	</div>

	@endforeach
@stop