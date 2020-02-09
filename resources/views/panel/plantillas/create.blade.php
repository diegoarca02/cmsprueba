@extends('layouts.admin')
@section('contenido')

<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('index.plantilla')}}">Listado de plantillas</a></li>
    <li class="breadcrumb-item active">Registro de plantilla</li>
</ol>
<div class="container-fluid">
    <div id="ui-view">
        <div>
            <div class="row">
                <div class="col-lg-6">
                <form method="POST" action="{{route('store.plantilla')}}" role="form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="card">
                        <div class="card-header">
                            <h4>REGISTRO DE PLANTILLA</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 form-group">
                                    <input type="text" class="form-control {{ $errors->has('titulo') ? ' is-invalid' : '' }}" placeholder="Titulo de la plantilla" name="titulo">
                                    @if ($errors->has('titulo'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('titulo') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-lg-12 form-group">
                                    <textarea class="form-control {{ $errors->has('descripcion') ? ' is-invalid' : '' }}" name="descripcion" placeholder="Descripcion de la plantilla"></textarea>
                                    @if ($errors->has('descripcion'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('descripcion') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-lg-12 form-group">
                                    <label><b>Portada de la plantilla</b></label>
                                    <input type="file" class="form-control {{ $errors->has('portada') ? ' is-invalid' : '' }}" name="portada">
                                    @if ($errors->has('portada'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('portada') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="card-header">
                            <button class="btn btn-primary" type="submit">Guardar</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection