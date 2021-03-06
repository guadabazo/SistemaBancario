@extends('layouts.admin')

@section('contenido')
    <div class="container">
        <div class="row">


            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Historico de cajas</div>
                    <div class="panel-body">


                        {!! Form::open(['method' => 'GET', 'url' => '/detalle', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        {!! Form::close() !!}

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th>Fecha</th><th>Monto</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($detalle as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->fecha }}</td>
                                        <td>{{ $item->monto }}</td>
                                        <td>
                                            <a href="{{ url('/detalle/' . $item->id) }}" title="View Detalle"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $detalle->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                        <div class="input-group">
                            <tbody>
                            <td>
                                <a href="{{ url('/pdf/') }}" title="View Cuentum"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> Imprimir</button></a>
                                <a href="{{ url('/excel/' . $item->id . '/edit') }}" title="Edit Cuentum"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Ex. Excel</button></a>
                            </td>
                            </tbody>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
