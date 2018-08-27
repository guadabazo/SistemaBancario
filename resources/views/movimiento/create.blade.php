@extends('layouts.admin')

@section('contenido')
    @include('alerts.request')
    @include('alerts.success')
    @include('alerts.existfail')
<div class="container">
    <div class="row">


        <div class=""col-lg-11 col-md-11 col-sm-11 col-xs-12"">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New Movimiento</div>
                    <div class="panel-body">
                        <a href="{{ url('/movimiento') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/movimiento', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('movimiento.form')

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
