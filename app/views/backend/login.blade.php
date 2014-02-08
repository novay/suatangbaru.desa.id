@extends('backend._templates.login')

@section('content')

    {{ Form::open(array('class'=>'form-signin')) }}
        <!-- check for login errors flash var -->
        @if (Session::has('login_errors'))
            <div class="alert alert-error">
                @lang('backend/contents.login.fail')
            </div>
        @endif

        <h3 class="form-signin-heading">@lang('backend/contents.login.head')</h3>
        <hr/>
        <!-- username field -->
        <p>{{ Form::text('username', NULL, array('class'=>'input-block-level', 'placeholder'=> Lang::get('backend/contents.login.user') )) }}</p>
        <!-- password field -->
        <p>{{ Form::password('password', array('class'=>'input-block-level', 'placeholder'=> Lang::get('backend/contents.login.pass') )) }}</p>
        <!-- submit button -->
        <hr/>
        {{ Form::submit( Lang::get('backend/contents.login.login') , array('class'=>'btn btn-primary')) }}
    {{ Form::close() }}

@stop