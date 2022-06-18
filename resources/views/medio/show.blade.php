@extends('layouts.app')

@section('template_title')
    {{ $medio->name ?? 'Show Medio' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Medio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('medios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idmedios:</strong>
                            {{ $medio->IdMedios }}
                        </div>
                        <div class="form-group">
                            <strong>Mediossolicitud:</strong>
                            {{ $medio->MediosSolicitud }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
