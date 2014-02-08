@extends('backend._templates.admin')

{{-- Judul Website --}}
@section('title')
	{{{ $title }}}
@stop

{{-- Active Icon --}}
@section('comment') active first @stop

@section('breadcrumb') <i class="icofont-comments"></i> {{ $title }} @stop

@section('breadcrumb1') 
    <a href="{{ route('comments') }}">@lang('backend/contents.home.comment') </a>
@stop

@section('breadcrumb2') 
    @lang('backend/contents.comment.title.list')
@stop

{{-- Content --}}
@section('content')
	
<!--box body-->
<div class="box-body corner-bottom">

	@if ($comments->count())

	<table class="table table-bordered table-striped responsive">

		<thead>
			<tr>
				<th width="550px">@lang('backend/contents.comment.table.sender')</th>
				<th>@lang('backend/contents.comment.table.time')</th>
				<th width="200px">@lang('backend/general.table.action')</th>
			</tr>
		</thead> 

	    <tbody>
	        @foreach ($comments as $comment)
	        	<tr>

	                <td>
	                	<div>
                         <div style="float:left;margin: 5px; margin-left: 1px;">
                            <img src="/assets/img/user.jpg"/>
                         </div>
                          <div style="float:left;margin: 5px;margin-bottom: 10px;">
                               <a href="#"> <b>{{ $comment->name }}</b> (<a href="mailto:{{$comment->email}}">{{ $comment->email }}</a>)</a>  <br>
                               
                          </div>
                       	</div>
                       	<br/>
                       	<div style="clear:both; margin: 5px;">
                       		{{$comment->content}} 
                       	</div>
                       	
                        <div style="margin: 5px;">
                        	<b>@lang('backend/contents.home.article') : </b>
                        	<a target="_blank" href="#" style="color: #636363;">
                        		<u>{{ $comment->Article->title }}</u>
                        	</a>
                        </div>
	                </td>
	                <td>{{ $comment->created_at }}</td>
	                <td>
	                	<a class="btn btn-mini btn-info ajaxApproveComment" href="{{ $comment->id }}"> {{ $comment->approved == 0 ? Lang::get('backend/general.button.unapprove') :Lang::get('backend/general.button.approve') }} </a>
						<a href="{{ $comment->id }}" class="btn btn-mini btn-danger ajaxDeleteComment"> <i class="icon-remove icon-white"></i> @lang('backend/general.button.delete')</a>
	                </td>
	            </tr>

	        @endforeach
	        
	    </tbody>
	</table>
	@else

		<center>@lang('backend/contents.comment.message.empty')</center>

	@endif
	       
@stop

@section('scripts')
	<script>
        // public/js/script.js
        $(document).ready(function() {
            $('.ajaxDeleteComment').click(function(e) {
                var element = $(this).parents("tr:first");
                var baseurl = '/ajaxhandler?type=deletecomment&id='+$(this).attr('href');
                $.get(baseurl);
                var p = element;
                element.stop().css("background-color","red").hide(800);
                e.preventDefault();
            });

            $('.ajaxApproveComment').click(function(e) {
                var element = $(this).parents("tr:first");
                var baseurl = '/ajaxhandler?type=comment&id='+$(this).attr('href');

                if(element.attr('class')=="commentunapproved")
                {
                    baseurl+="&approved=0";
                    $(this).text("Unapprove");
                    element.switchClass("commentunapproved", "comment", 800 );
                    //element.animate({   class: "" }, 400);
                }
                else
                {
                    baseurl+="&approved=1";
                    $(this).text("Approved");
                    element.switchClass("comment", "commentunapproved", 800 );
                }

                $.get(baseurl);
               /* $(function(){
                    $("button").mouseover(function(){
                        var $p = $("#P44");
                        $p.stop()
                            .css("background-color","yellow")
                            .hide(1500, function() {
                                $p.css("background-color","red")
                                    .show(1500);
                            });
                    });
                });*/


                e.preventDefault();
                // attempt to GET the new content

            })
        });
    </script>
@stop