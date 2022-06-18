@extends('layouts.app')

@section('template_title')
    Ticke
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Ticke') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tickes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Idtickes</th>
										<th>Descripcionproblema</th>
										<th>Estado</th>
										<th>Nivelurgencia</th>
										<th>Usuario</th>
										<th>Idtecnicos Tecnicos</th>
										<th>Idequipo Equipo</th>
										<th>Idmedios Medios</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tickes as $ticke)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $ticke->IdTickes }}</td>
											<td>{{ $ticke->DescripcionProblema }}</td>
											<td>{{ $ticke->Estado }}</td>
											<td>{{ $ticke->NivelUrgencia }}</td>
											<td>{{ $ticke->Usuario }}</td>
											<td>{{ $ticke->idTecnicos_Tecnicos }}</td>
											<td>{{ $ticke->idEquipo_Equipo }}</td>
											<td>{{ $ticke->idMedios_Medios }}</td>

                                            <td>
                                                <form action="{{ route('tickes.destroy',$ticke->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tickes.show',$ticke->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tickes.edit',$ticke->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tickes->links() !!}
            </div>
        </div>
    </div>
@endsection
