@extends('frontend._templates.articlelist')

@section('title')

@stop

@section('content')
	@foreach ($articles as $article)

		<a style="display:none;">
			<?php if($article->Comments()->count() == 0) { $shit = 'No Comment'; } else {	$shit = $article->Comments()->count() . " " . Illuminate\Support\Pluralizer::plural('Comment', $article->comments()->count()); } ?>
		</a>


		<div class="row">
			<div class="span8">
				<!-- Post Title -->
				<div class="row">
					<div class="span8">
						<h4><strong><a href="#">{{{ $article->title }}}</a></strong></h4>
					</div>
				</div>

				<!-- Post Content -->
				<div class="row">
					<div class="span-full">
						<p>
							{{ Str::limit($article->content, 200) }}
						</p>
						<p><a class="btn btn-mini" href="#">Read more...</a></p>
					</div>
				</div>

				<!-- Post Footer -->
				<div class="row">
					<div class="span8">
						<p></p>
						<p>
							<i class="icon-user"></i> by <span class="muted">{{ ucfirst($article->User->displayName) }}</span>
							| <i class="icon-calendar"></i> {{ $article->created_at->diffForHumans() }}
							| <i class="icon-comment"></i> <a href="#comments">{{ $shit }}</a>
						</p>
					</div>
				</div>
			</div>
		</div>

		<hr />
			

	@endforeach

@stop
