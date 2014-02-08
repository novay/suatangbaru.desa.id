@extends('frontend._templates.default')

{{-- Judul Website --}}
@section('title')
	{{{ $title }}}
@stop

@section('konten')
<center>
	<h1>Struktur Organisasi Pemerintahan Desa</h1>
	<hr/>
	<a href="{{ asset('assets/img/pd.jpg') }}" target="_blank">
		<img src="{{ asset('assets/img/pd.jpg') }}" width="900px"/>
	</a>
	<br/>
	<hr/>
</center>
@stop