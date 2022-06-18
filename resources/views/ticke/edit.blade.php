@extends('layouts.app')

@section('template_title')
    Update Ticke
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Ticke</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tickes.update', $ticke->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('ticke.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
