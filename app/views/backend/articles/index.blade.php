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
	@lang('backend/contents.article.title.list')
@stop

@section('styles')
	{{ HTML::style('packages/Stilearn/css/DT_bootstrap.css') }}
	{{ HTML::style('packages/Stilearn/css/responsive-tables.css') }}
@stop

{{-- Content --}}
@section('content')

	<div>
		<a href="{{ route('newArticle') }}" class="btn btn btn-info"><i class="icon-plus icon-white"></i> {{ Lang::get('backend/general.button.create') }}</a>
	</div>
	<hr/>

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

	@if ($articles->count())

		<div class="box-body">
	        <table id="datatables" class="table table-bordered table-striped responsive">
	            <thead>
	                <tr>
						<th>{{ Lang::get('backend/general.table.title') }}</th>
						<th width="180px">{{ Lang::get('backend/general.table.article.category') }}</th>
						<th width="150px">{{ Lang::get('backend/general.table.article.author') }}</th>
						<th width="100px">{{ Lang::get('backend/general.table.article.status') }}</th>
						<th width="80px">{{ Lang::get('backend/general.table.article.comment') }}</th>
						<th width="130px">{{ Lang::get('backend/general.table.action') }}</th>
					</tr>
	            </thead>
	            <tbody>
			        @foreach ($articles as $article)
			            
			            <tr>
			                <td>{{{ $article->title }}}</td>
		

							@if( !empty($article->categoryId))
							    <td>{{ $article->Category->name }}</td> 
							@else
								<td>@lang('backend/contents.category.message.select')</td> 
							@endif
		   					<td>{{ ucfirst($article->User->displayName) }}</td>
		   					<td>{{ Junkspot::getStatusArtikel($article->status) }}</td>
		   					<td><strong>{{ $article->Comments()->count() }}</strong></td>
			                <td>

			              		{{-- Jika user bukan admin --}}
								@if( Auth::user()->accessLevel != 1)

									{{-- Jika id user sama dengan id penulis artikel --}}
									@if( Auth::user()->id == $article->authorId )

				                    <a href="{{ route('editArticle', $article->id) }}" class="btn btn-success btn-mini"><i class="icon-edit icon-white"></i> {{ Lang::get('backend/general.button.edit') }}</a>
									<a href="{{ route('deleteArticle', $article->id) }}" class="btn btn-mini btn-danger"><i class="icon-remove icon-white"></i> {{ Lang::get('backend/general.button.delete') }}</a>
				                	
				                	@else

				                	<a href="">@lang('backend/contents.article.form.sorry')</a>
				                	
				                	@endif

				                @else

				                	<a href="{{ route('editArticle', $article->id) }}" class="btn btn-success btn-mini"><i class="icon-edit icon-white"></i> {{ Lang::get('backend/general.button.edit') }}</a>
									<a href="{{ route('deleteArticle', $article->id) }}" class="btn btn-mini btn-danger"><i class="icon-remove icon-white"></i> {{ Lang::get('backend/general.button.delete') }}</a>

				                @endif

			                </td>
			            </tr>

			        @endforeach
			        
			    </tbody>
	        </table>
	    </div>

@else
	
	<center>{{ Lang::get('backend/contents.article.message.empty') }}</center>

@endif  

@stop

@section('scripts')
{{ HTML::script('packages/Stilearn/js/datatables/jquery.dataTables.min.js') }}
{{ HTML::script('packages/Stilearn/js/datatables/extras/ZeroClipboard.js') }}
{{ HTML::script('packages/Stilearn/js/datatables/TableTools.min.js') }}
{{ HTML::script('packages/Stilearn/js/datatables/DT_bootstrap.js') }}
{{ HTML::script('packages/Stilearn/js/responsive-tables/responsive-tables.js') }}

<script type="text/javascript">
    $(document).ready(function() {
        // try your js
        
        // uniform
        $('[data-form=uniform]').uniform();
        
        // datatables
        $('#datatables').dataTable( {
            "sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>",
            "sPaginationType": "bootstrap",
            "oLanguage": {
                    "sLengthMenu": "_MENU_ records per page"
            }
        });
        
        // datatables table tools
        $('#datatablestools').dataTable({
            "sDom": "<'row-fluid'<'span6'T><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>",
            "oTableTools": {
                "aButtons": [
                    "copy",
                    "print",
                    {
                        "sExtends":    "collection",
                        "sButtonText": 'Save <span class="caret" />',
                        "aButtons":    [ 
                            "xls", 
                            "csv",
                            {
                                "sExtends": "pdf",
                                "sPdfOrientation": "landscape",
                                "sPdfMessage": "Your custom message would go here."
                            }
                        ]
                    }
                ],
                "sSwfPath": "js/datatables/swf/copy_csv_xls_pdf.swf"
            }
        });
    });
</script>

@stop

            