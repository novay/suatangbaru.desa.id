@extends('frontend._templates.default')

{{-- Judul Website --}}
@section('title')
	{{{ $title }}}
@stop

@section('konten')
<center>
	<h1>Struktur Organisasi Badan Pemusyawaratan Desa</h1>
	<hr/>
	<a href="{{ asset('assets/img/bpd.jpg') }}" target="_blank">
		<img src="{{ asset('assets/img/bpd.jpg') }}" width="900px"/>
	</a>
	<br/>
	<hr/>
</center>
@stop