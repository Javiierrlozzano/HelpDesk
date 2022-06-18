<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('IdAreas') }}
            {{ Form::text('IdAreas', $area->IdAreas, ['class' => 'form-control' . ($errors->has('IdAreas') ? ' is-invalid' : ''), 'placeholder' => 'Idareas']) }}
            {!! $errors->first('IdAreas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NombreArea') }}
            {{ Form::text('NombreArea', $area->NombreArea, ['class' => 'form-control' . ($errors->has('NombreArea') ? ' is-invalid' : ''), 'placeholder' => 'Nombrearea']) }}
            {!! $errors->first('NombreArea', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sede_IdSede') }}
            {{ Form::text('Sede_IdSede', $area->Sede_IdSede, ['class' => 'form-control' . ($errors->has('Sede_IdSede') ? ' is-invalid' : ''), 'placeholder' => 'Sede Idsede']) }}
            {!! $errors->first('Sede_IdSede', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>