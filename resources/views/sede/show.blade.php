@extends('layouts.app')

@section('template_title')
    {{ $sede->name ?? 'Show Sede' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Sede</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('sedes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idsede:</strong>
                            {{ $sede->IdSede }}
                        </div>
                        <div class="form-group">
                            <strong>Nombresede:</strong>
                            {{ $sede->NombreSede }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
