
@extends("JakoyTemplate::TemplateKelolaData.main-template")

@section("konten")
	{!! Form::open(['route' => 'kategori.store', 'method' => 'post', 'files' => true]) !!}

		@include('KelolaData::kategori.form')

	{!! Form::close() !!}
@stop