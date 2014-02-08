@extends('frontend._templates.default')

{{-- Judul Website --}}
@section('title')
	{{{ $article->title }}}
@stop

@section('konten')

	<a style="display:none;">
		<?php if($article->Comments()->count() == 0) { $komentar = 'Tinggalkan Komentar'; } else {	$komentar = $article->Comments()->count() . " Komentar"; } ?>
	</a>
	
	<div class="container">
		<header class="sidebar">
			<section class="posts index">
	            <article>
					<h1><a>Artikel Terbaru</a></h1>
					<br/>
					<hr/>
					<section class="body">
						@foreach( Article::orderBy('created_at', 'DESC')->where('status', '=', 1)->paginate(5) as $artikel )
						<a href="#">{{ $artikel->title }}</a>
						<hr/>
						@endforeach
					</section>
				</article>
				
				<article>
					<h1><a>Komentar</a></h1>
					<br/>
					<hr/>
					<section class="body">
						@foreach ( Comment::orderBy('created_at', 'DESC')->where('approved', '=', 1)->paginate(5) as $comment)
							<a href="mailto:{{ $comment->email }}">{{ $comment->name }} :</a> {{ $comment->content }}</a>
							<a href="#">Lihat disini</a>
							<hr/>
						@endforeach
					</section>
				</article>
				
			</section>
	    </header>

	@if($article->comment == 0)

	    <section class="content">
	        <section class="posts index">
	            <article>
					<h1><a title="{{{ $article->title }}}">{{{ $article->title }}}</a></h1>
					<span class="meta">Diposkan oleh {{ ucfirst($article->User->displayName) }} • {{ $article->created_at->diffForHumans() }}</span>
					<section class="body">
						{{ $article->content }}
					</section>
				</article>	
			</section>
	    </section>

	    <div class="clearfix"></div>

	@else

	    <section class="content">
	        <section class="posts index">
	            <article>
					<h1><a title="{{{ $article->title }}}">{{{ $article->title }}}</a></h1>
					<span class="meta">Diposkan oleh {{ ucfirst($article->User->displayName) }} • {{ $article->created_at->diffForHumans() }} • <a href="#komentar">{{ $komentar }}</a></span>
					<section class="body">
						{{ $article->content }}
					</section>
				</article>
				
				<div id="komentar">

					@if ($article->Comments()->count())
					<article>
						<h1><a>{{ $komentar }}</a></h1>
						<br/><hr/>
						@foreach($comments as $comment)
						<div class="media">
						  <a class="pull-left"><img src="{{ asset('packages/web/img/fb.png') }}" ></a>
						  <div class="media-body"><h2 class="media-heading">{{ $comment->name }}</h2>
							<hr/>
							<a>{{ $comment->content }}</a>
						  </div>
						  <hr/>
						</div>
						@endforeach
					</article>
					
					<article>
						<h1><a>{{$komentar}}</a></h1>
						</br>
						<hr/>
						<section class="body">		
								<form method="POST" action="{{ route('view-article', $article->alias) }}" class="form-inline">  
									<div class="control-group">  
										<label class="control-label">Nama <small>(wajib)</small></label>  
										<div class="controls">  
											{{ Form::text('name', NULL, ['class'=>'span4']) }}
										</div>  
									</div>  
									<div class="control-group">  
										<label class="control-label">Alamat Email</label>  
										<div class="controls">  
											{{ Form::text('email', NULL, ['class'=>'span4']) }}
										</div>  
									</div>  
									<div class="control-group">  
										<label class="control-label">Pesan</label>  
										<div class="controls">  
											{{ Form::textarea('name', NULL, ['class'=>'span7', 'rows'=>'8']) }}
										</div>  
									</div>  
									<div class="form-actions">  
										<input type="hidden" name="save" value="contact">  
										<button type="submit" class="btn btn-info">Kirim Komentar</button>  
									</div>  
								</form>  
						</section>
					</article>	

					@else
					
					<article>
						<h1><a>{{$komentar}}</a></h1>
						</br>
						<hr/>
						<section class="body">		
								<form method="POST" action="{{ route('view-article', $article->alias) }}" class="form-inline">  
									<div class="control-group">  
										<label class="control-label">Nama <small>(wajib)</small></label>  
										<div class="controls">  
											{{ Form::text('name', NULL, ['class'=>'span4']) }}
										</div>  
									</div>  
									<div class="control-group">  
										<label class="control-label">Alamat Email</label>  
										<div class="controls">  
											{{ Form::text('email', NULL, ['class'=>'span4']) }}
										</div>  
									</div>  
									<div class="control-group">  
										<label class="control-label">Pesan</label>  
										<div class="controls">  
											{{ Form::textarea('name', NULL, ['class'=>'span7', 'rows'=>'8']) }}
										</div>  
									</div>  
									<div class="form-actions">  
										<input type="hidden" name="save" value="contact">  
										<button type="submit" class="btn btn-info">Kirim Komentar</button>  
									</div>  
								</form>  
						</section>
					</article>	

					@endif
					
				</div>
			</section>
	    </section>

	    <div class="clearfix"></div>

	    @endif
	</div>
@stop