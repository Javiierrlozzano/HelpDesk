<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('IdTecnicos') }}
            {{ Form::text('IdTecnicos', $tecnico->IdTecnicos, ['class' => 'form-control' . ($errors->has('IdTecnicos') ? ' is-invalid' : ''), 'placeholder' => 'Idtecnicos']) }}
            {!! $errors->first('IdTecnicos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('TipoDoc') }}
            {{ Form::text('TipoDoc', $tecnico->TipoDoc, ['class' => 'form-control' . ($errors->has('TipoDoc') ? ' is-invalid' : ''), 'placeholder' => 'Tipodoc']) }}
            {!! $errors->first('TipoDoc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Doc') }}
            {{ Form::text('Doc', $tecnico->Doc, ['class' => 'form-control' . ($errors->has('Doc') ? ' is-invalid' : ''), 'placeholder' => 'Doc']) }}
            {!! $errors->first('Doc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $tecnico->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::text('Estado', $tecnico->Estado, ['class' => 'form-control' . ($errors->has('Estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('Estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sede_IdSede') }}
            {{ Form::text('Sede_IdSede', $tecnico->Sede_IdSede, ['class' => 'form-control' . ($errors->has('Sede_IdSede') ? ' is-invalid' : ''), 'placeholder' => 'Sede Idsede']) }}
            {!! $errors->first('Sede_IdSede', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>