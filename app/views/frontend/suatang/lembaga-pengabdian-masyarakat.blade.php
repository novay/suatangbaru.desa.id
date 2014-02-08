@extends('frontend._templates.default')

{{-- Judul Website --}}
@section('title')
	{{{ $title }}}
@stop

@section('konten')
<center>
	<h1>Struktur Organisasi Lembaga Pengabdian Masyarakat</h1>
	<hr/>
	<a href="{{ asset('assets/img/lpm.jpg') }}" target="_blank">
		<img src="{{ asset('assets/img/lpm.jpg') }}" width="900px"/>
	</a>
	<br/>
	<hr/>
</center>
@stop