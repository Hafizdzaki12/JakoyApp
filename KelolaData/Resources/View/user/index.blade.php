@extends("JakoyTemplate::TemplateKelolaData.main-template")
@section("konten")
<div class="row">
<div class="divider"></div>
<div id="hoverable-table">
  <h4 class="header">Tabel User</h4>
  <div class="row">
      <p>Semua Data Tabel User</p>
    <div class="col s12 m8 l9">
      <table class="hoverable">
        <thead>
          <tr>
            <th data-field="id">Nama</th>
            <th data-field="id">Password</th>
            <th colspan"2" =data-field="name">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $temp)
          <tr>
            <td>{{ $temp->username }}</td>
            <td>{{ $temp->password }}</td>
            <td width="1">
              <a href="{{ route('user.edit', $temp->id) }}"class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">edit</i></a>
<!--             	<a href="{{ route('kategori.destroy', $temp->id) }}"class="btn-floating btn-large waves-effect waves-light black"><i class="material-icons">delete</i></a> -->
            </td>
            <td>
              {!! Form::open(['route'=>['user.destroy', $temp->id], 'method'=>'delete', 'onsubmit' => 'return confirm("Anda yakin?")', 'name' => 'hapus']) !!}
              <a onclick="document.forms.hapus.submit()" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">delete</i></a>
              {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  <a href="{{ route('user.create')}}" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
  </div>
</div>
</div>
@stop