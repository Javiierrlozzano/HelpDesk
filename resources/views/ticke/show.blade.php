@extends('layouts.app')

@section('template_title')
    {{ $ticke->name ?? 'Show Ticke' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Ticke</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tickes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idtickes:</strong>
                            {{ $ticke->IdTickes }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcionproblema:</strong>
                            {{ $ticke->DescripcionProblema }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $ticke->Estado }}
                        </div>
                        <div class="form-group">
                            <strong>Nivelurgencia:</strong>
                            {{ $ticke->NivelUrgencia }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario:</strong>
                            {{ $ticke->Usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Idtecnicos Tecnicos:</strong>
                            {{ $ticke->idTecnicos_Tecnicos }}
                        </div>
                        <div class="form-group">
                            <strong>Idequipo Equipo:</strong>
                            {{ $ticke->idEquipo_Equipo }}
                        </div>
                        <div class="form-group">
                            <strong>Idmedios Medios:</strong>
                            {{ $ticke->idMedios_Medios }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
