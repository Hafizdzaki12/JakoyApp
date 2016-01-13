
@extends("JakoyTemplate::TemplateKelolaData.main-template")

@section("konten")
	{!! Form::open(['route' => 'konten.store', 'method' => 'post', 'files' => true]) !!}

		@include('KelolaData::konten.form')

	{!! Form::close() !!}
@stop