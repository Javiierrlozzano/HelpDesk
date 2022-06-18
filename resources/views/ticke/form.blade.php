<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('IdTickes') }}
            {{ Form::text('IdTickes', $ticke->IdTickes, ['class' => 'form-control' . ($errors->has('IdTickes') ? ' is-invalid' : ''), 'placeholder' => 'Idtickes']) }}
            {!! $errors->first('IdTickes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('DescripcionProblema') }}
            {{ Form::text('DescripcionProblema', $ticke->DescripcionProblema, ['class' => 'form-control' . ($errors->has('DescripcionProblema') ? ' is-invalid' : ''), 'placeholder' => 'Descripcionproblema']) }}
            {!! $errors->first('DescripcionProblema', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::text('Estado', $ticke->Estado, ['class' => 'form-control' . ($errors->has('Estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('Estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NivelUrgencia') }}
            {{ Form::text('NivelUrgencia', $ticke->NivelUrgencia, ['class' => 'form-control' . ($errors->has('NivelUrgencia') ? ' is-invalid' : ''), 'placeholder' => 'Nivelurgencia']) }}
            {!! $errors->first('NivelUrgencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Usuario') }}
            {{ Form::text('Usuario', $ticke->Usuario, ['class' => 'form-control' . ($errors->has('Usuario') ? ' is-invalid' : ''), 'placeholder' => 'Usuario']) }}
            {!! $errors->first('Usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idTecnicos_Tecnicos') }}
            {{ Form::text('idTecnicos_Tecnicos', $ticke->idTecnicos_Tecnicos, ['class' => 'form-control' . ($errors->has('idTecnicos_Tecnicos') ? ' is-invalid' : ''), 'placeholder' => 'Idtecnicos Tecnicos']) }}
            {!! $errors->first('idTecnicos_Tecnicos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idEquipo_Equipo') }}
            {{ Form::text('idEquipo_Equipo', $ticke->idEquipo_Equipo, ['class' => 'form-control' . ($errors->has('idEquipo_Equipo') ? ' is-invalid' : ''), 'placeholder' => 'Idequipo Equipo']) }}
            {!! $errors->first('idEquipo_Equipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idMedios_Medios') }}
            {{ Form::text('idMedios_Medios', $ticke->idMedios_Medios, ['class' => 'form-control' . ($errors->has('idMedios_Medios') ? ' is-invalid' : ''), 'placeholder' => 'Idmedios Medios']) }}
            {!! $errors->first('idMedios_Medios', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>