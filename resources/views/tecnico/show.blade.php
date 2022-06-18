@extends('layouts.app')

@section('template_title')
    {{ $tecnico->name ?? 'Show Tecnico' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tecnico</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tecnicos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idtecnicos:</strong>
                            {{ $tecnico->IdTecnicos }}
                        </div>
                        <div class="form-group">
                            <strong>Tipodoc:</strong>
                            {{ $tecnico->TipoDoc }}
                        </div>
                        <div class="form-group">
                            <strong>Doc:</strong>
                            {{ $tecnico->Doc }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tecnico->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $tecnico->Estado }}
                        </div>
                        <div class="form-group">
                            <strong>Sede Idsede:</strong>
                            {{ $tecnico->Sede_IdSede }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
