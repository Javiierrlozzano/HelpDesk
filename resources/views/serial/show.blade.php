@extends('layouts.app')

@section('template_title')
    {{ $serial->name ?? 'Show Serial' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Serial</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('serials.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idseriales:</strong>
                            {{ $serial->IdSeriales }}
                        </div>
                        <div class="form-group">
                            <strong>Serial:</strong>
                            {{ $serial->Serial }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $serial->Estado }}
                        </div>
                        <div class="form-group">
                            <strong>Idequipo Equipo:</strong>
                            {{ $serial->idEquipo_Equipo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
