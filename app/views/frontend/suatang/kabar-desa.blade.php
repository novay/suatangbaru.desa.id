@extends('frontend._templates.default')

{{-- Judul Website --}}
@section('title')
	{{{ $title }}}
@stop

@section('konten')
<!-- body -->

	<div class="container">
		<header class="sidebar">
			<section class="posts index">
                <article>
					<h1><a>Komentar</a></h1>
					<br/>
					<hr/>
					<section class="body">
					@foreach ($comments as $comment)
						<a href="mailto:{{ $comment->email }}">{{ $comment->name }} :</a> {{ $comment->content }}</a>
						<a href="#">Lihat disini</a>
						<hr/>
					@endforeach
					</section>
				</article>
			</section>
        </header>

        @foreach ($articles as $article)
        <section class="content">
            <section class="posts index">
            <a style="display:none;">
				<?php if($article->Comments()->count() == 0) { $komentar = 'Tinggalkan Komentar'; } else {	$komentar = $article->Comments()->count() . " Komentar"; } ?>
			</a>
                <article>
					<h1><a href="{{{ $article->UrlArtikel() }}}" title="{{{ $article->title }}}">{{{ $article->title }}}</a></h1>
					<span class="meta">Diposkan oleh {{ ucfirst($article->User->displayName) }} • {{ $article->created_at->diffForHumans() }} • <a href="{{{ $article->UrlArtikel() }}}#komentar">{{ $komentar }}</a></span>
					<section class="body">
						<p>{{ Str::limit($article->content, 500) }}</p>
					</section>
					<a href="{{{ $article->UrlArtikel() }}}" title="{{{ $article->title }}}" class="read-more">Selengkapnya →</a>
				</article>
			</section>
        </section>
        @endforeach

        <div class="clearfix"></div>
       
      	 {{ $articles->links() }}

    </div>

   
@stop