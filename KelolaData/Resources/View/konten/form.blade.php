<div class="col s12 m12 l12">
  <div class="card-panel">
    <h4 class="header2">Data Konten</h4>
    <div class="row">
      <div class="col s12">
        
        <div class="form-group">
          {!! Form::label('nama', 'Nama') !!}
          {!! Form::text('nama', null, ['class' =>'form-control']) !!}
          {!! $errors->first('nama', '<span>:message</span>') !!}
        </div>
        <br><br>

        <div class="form-group">
          <div class="input-field">
            {!! Form::select('kategori_id', Jakoy\KelolaData\Entities\Eloquent\Kategori::lists('nama', 'id')) !!}
            <label>Kategori</label>
          </div>   
        </div>               

        <div class="form-group">
          {!! Form::label('gambar', 'Pilih Gambar Yang Akan Dimasukkan') !!}
          <br>
          @if(isset($data))
          {!! Html::image('upload/' . $data->gambar, '', ['width' => '200px']) !!}
          @endif
          
          {!! Form::file('gambar', null, ['class' =>'form-control']) !!}
          {!! $errors->first('gambar', '<span>:message</span>') !!}
        </div>
        <br><br>
        <div class="form-group">
          {!! Form::label('deskripsi', 'Deskripsi Konten') !!}
          {!! Form::text('deskripsi', null, ['class' =>'form-control']) !!}
          {!! $errors->first('deskripsi', '<span>:message</span>') !!}
        </div>

        <div class="form-group">
          <button class="btn cyan waves-effect waves-light right" type="submit">Submit
            <i class="mdi-content-send right"></i>
          </button>
        </div>

        </div>
      </div>
    </div>
  </div>
</div>
