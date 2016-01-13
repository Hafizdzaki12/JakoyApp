@extends("JakoyTemplate::TemplateKelolaData.main-template")

@section("konten")
	{!! Form::model($data, ['route' => ['kategori.update', $data->id], 'method' => 'put', 'files' => true]) !!}

		@include('KelolaData::kategori.form')

	{!! Form::close() !!}
@stop