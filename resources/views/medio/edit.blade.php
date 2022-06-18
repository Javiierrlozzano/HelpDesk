@extends('layouts.app')

@section('template_title')
    Update Medio
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Medio</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('medios.update', $medio->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('medio.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
