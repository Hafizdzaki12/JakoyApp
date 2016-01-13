
@extends("JakoyTemplate::TemplateKelolaData.main-template")

@section("konten")
	{!! Form::open(['route' => 'user.store', 'method' => 'post', 'files' => true]) !!}

		@include('KelolaData::user.form')

	{!! Form::close() !!}
@stop