<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('IdMedios') }}
            {{ Form::text('IdMedios', $medio->IdMedios, ['class' => 'form-control' . ($errors->has('IdMedios') ? ' is-invalid' : ''), 'placeholder' => 'Idmedios']) }}
            {!! $errors->first('IdMedios', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('MediosSolicitud') }}
            {{ Form::text('MediosSolicitud', $medio->MediosSolicitud, ['class' => 'form-control' . ($errors->has('MediosSolicitud') ? ' is-invalid' : ''), 'placeholder' => 'Mediossolicitud']) }}
            {!! $errors->first('MediosSolicitud', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>