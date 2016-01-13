@extends("JakoyTemplate::TemplateKelolaData.main-template")

@section("konten")
	{!! Form::model($data, ['route' => ['user.update', $data->id], 'method' => 'put', 'files' => true]) !!}

		@include('KelolaData::user.form')

	{!! Form::close() !!}
@stop