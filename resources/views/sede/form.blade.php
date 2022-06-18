<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('IdSede') }}
            {{ Form::text('IdSede', $sede->IdSede, ['class' => 'form-control' . ($errors->has('IdSede') ? ' is-invalid' : ''), 'placeholder' => 'Idsede']) }}
            {!! $errors->first('IdSede', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NombreSede') }}
            {{ Form::text('NombreSede', $sede->NombreSede, ['class' => 'form-control' . ($errors->has('NombreSede') ? ' is-invalid' : ''), 'placeholder' => 'Nombresede']) }}
            {!! $errors->first('NombreSede', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>