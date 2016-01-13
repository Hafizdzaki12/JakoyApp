
@extends("JakoyTemplate::TemplateKelolaData.main-template")

@section("konten")
	{!! Form::model($data, ['route' => ['konten.update', $data->id], 'method' => 'put', 'files' => true]) !!}

		@include('KelolaData::konten.form')

	{!! Form::close() !!}
@stop