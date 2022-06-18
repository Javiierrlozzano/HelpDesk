<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('IdEquipos') }}
            {{ Form::text('IdEquipos', $equipo->IdEquipos, ['class' => 'form-control' . ($errors->has('IdEquipos') ? ' is-invalid' : ''), 'placeholder' => 'Idequipos']) }}
            {!! $errors->first('IdEquipos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Serial') }}
            {{ Form::text('Serial', $equipo->Serial, ['class' => 'form-control' . ($errors->has('Serial') ? ' is-invalid' : ''), 'placeholder' => 'Serial']) }}
            {!! $errors->first('Serial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('IpAddress') }}
            {{ Form::text('IpAddress', $equipo->IpAddress, ['class' => 'form-control' . ($errors->has('IpAddress') ? ' is-invalid' : ''), 'placeholder' => 'Ipaddress']) }}
            {!! $errors->first('IpAddress', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $equipo->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Marca') }}
            {{ Form::text('Marca', $equipo->Marca, ['class' => 'form-control' . ($errors->has('Marca') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
            {!! $errors->first('Marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Modelo') }}
            {{ Form::text('Modelo', $equipo->Modelo, ['class' => 'form-control' . ($errors->has('Modelo') ? ' is-invalid' : ''), 'placeholder' => 'Modelo']) }}
            {!! $errors->first('Modelo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Areas_IdAreas') }}
            {{ Form::text('Areas_IdAreas', $equipo->Areas_IdAreas, ['class' => 'form-control' . ($errors->has('Areas_IdAreas') ? ' is-invalid' : ''), 'placeholder' => 'Areas Idareas']) }}
            {!! $errors->first('Areas_IdAreas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sede_IdSede') }}
            {{ Form::text('Sede_IdSede', $equipo->Sede_IdSede, ['class' => 'form-control' . ($errors->has('Sede_IdSede') ? ' is-invalid' : ''), 'placeholder' => 'Sede Idsede']) }}
            {!! $errors->first('Sede_IdSede', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo_IdTipo') }}
            {{ Form::text('Tipo_IdTipo', $equipo->Tipo_IdTipo, ['class' => 'form-control' . ($errors->has('Tipo_IdTipo') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Idtipo']) }}
            {!! $errors->first('Tipo_IdTipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>