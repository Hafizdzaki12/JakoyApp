<div class="col s12 m12 l12">
  <div class="card-panel">
    <h4 class="header2">Data Kategori</h4>
    <div class="row">
      <div class="col s12">

        
        <div class="row">
         <!--  <div class="input-field col s12">
            {!! Form::label('nama', 'Nama') !!}
            {!! Form::text('nama',null, ['class' => 'form-control']) !!}
            {!! $errors->first('nama', '<span>:message</span>') !!} -->
            <div class="form-group">
              {!! Form::label('nama', 'Nama') !!}
              {!! Form::text('nama', null, ['class' =>'input-field col s12']) !!}
              {!! $errors->first('nama', '<span>:message</span>') !!}
            </div>

            <div class="form-group">
              <button class="btn cyan waves-effect waves-light right" type="submit">Submit
                <i class="mdi-content-send right"></i>
              </button>
            </div>

          </div>
        </div>
         <!--  <div class="row">
            <div class="input-field col s12">
              <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                <i class="mdi-content-send right"></i>
              </button>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </div>
</div>