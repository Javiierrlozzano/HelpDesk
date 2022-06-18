@extends('layouts.app')

@section('template_title')
    {{ $equipo->name ?? 'Show Equipo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Equipo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('equipos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idequipos:</strong>
                            {{ $equipo->IdEquipos }}
                        </div>
                        <div class="form-group">
                            <strong>Serial:</strong>
                            {{ $equipo->Serial }}
                        </div>
                        <div class="form-group">
                            <strong>Ipaddress:</strong>
                            {{ $equipo->IpAddress }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $equipo->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $equipo->Marca }}
                        </div>
                        <div class="form-group">
                            <strong>Modelo:</strong>
                            {{ $equipo->Modelo }}
                        </div>
                        <div class="form-group">
                            <strong>Areas Idareas:</strong>
                            {{ $equipo->Areas_IdAreas }}
                        </div>
                        <div class="form-group">
                            <strong>Sede Idsede:</strong>
                            {{ $equipo->Sede_IdSede }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Idtipo:</strong>
                            {{ $equipo->Tipo_IdTipo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
