<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('IdSeriales') }}
            {{ Form::text('IdSeriales', $serial->IdSeriales, ['class' => 'form-control' . ($errors->has('IdSeriales') ? ' is-invalid' : ''), 'placeholder' => 'Idseriales']) }}
            {!! $errors->first('IdSeriales', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Serial') }}
            {{ Form::text('Serial', $serial->Serial, ['class' => 'form-control' . ($errors->has('Serial') ? ' is-invalid' : ''), 'placeholder' => 'Serial']) }}
            {!! $errors->first('Serial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::text('Estado', $serial->Estado, ['class' => 'form-control' . ($errors->has('Estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('Estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idEquipo_Equipo') }}
            {{ Form::text('idEquipo_Equipo', $serial->idEquipo_Equipo, ['class' => 'form-control' . ($errors->has('idEquipo_Equipo') ? ' is-invalid' : ''), 'placeholder' => 'Idequipo Equipo']) }}
            {!! $errors->first('idEquipo_Equipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>