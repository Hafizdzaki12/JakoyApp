@extends("JakoyTemplate::TemplateKelolaData.main-template")
@section("konten")
<div class="row">
<div class="divider"></div>
<div id="hoverable-table">
  <h4 class="header">Tabel Konten</h4>
  <div class="row">
      <p>Semua Data Konten</p>
    <div class="col s12 m8 l9">
      <table class="hoverable">
        <thead>
          <tr>
            <th data-field="id">Nama</th>
            <th data-field="id">Kategori</th>
            <th data-field="id">Gambar</th>
            <th data-field="id">Deskripsi</th>
            <th colspan="2" data-field="name">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $temp)
          <tr>
            <td>{{ $temp->nama }}</td>
            <td>{{ $temp->kategori->nama }}</td>
            <td>{!! Html::image('upload/'.$temp->gambar, '', ['width'=>'200px']) !!}</td>
            <td>{{ $temp->deskripsi }}</td>
            <td width="1">
              <a href="{{ route('konten.edit', $temp->id) }}"class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">edit</i></a>
<!--             	<a href="{{ route('kategori.destroy', $temp->id) }}"class="btn-floating btn-large waves-effect waves-light black"><i class="material-icons">delete</i></a> -->
            </td>
            <td width="1">
              {!! Form::open(['route'=>['konten.destroy', $temp->id], 'method'=>'delete', 'onsubmit' => 'return confirm("Anda yakin?")', 'name' => 'hapus']) !!}
              <a onclick="document.forms.hapus.submit()" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">delete</i></a>
              {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  <a href="{{ route('konten.create')}}" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
  </div>
</div>
</div>
@stop