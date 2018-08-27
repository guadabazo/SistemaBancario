@extends('layouts.admin')

@section('contenido')
    <div class="container">
        <div class="row">


            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Transaccion {{ $transaccion->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/transaccion') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/transaccion/' . $transaccion->id . '/edit') }}" title="Edit Transaccion"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['transaccion', $transaccion->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Transaccion',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $transaccion->id }}</td>
                                    </tr>
                                    <tr><th> Fecha </th><td> {{ $transaccion->fecha }} </td></tr><tr><th> Monto </th><td> {{ $transaccion->monto }} </td></tr><tr><th> Id Banco </th><td> {{ $transaccion->id_banco }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
