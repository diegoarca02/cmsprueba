@extends('layouts.admin')
@section('contenido')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('index.entrada')}}">Listado de entradas</a></li>
    <li class="breadcrumb-item active">Edicion de entrada</li>
    
</ol>
<div class="container-fluid">
    <div id="ui-view">
        <div>
            <div class="animated fadeIn">
                <div class="row">
                    
                    @if(Session::has('succes'))
                        <div class="col-lg-8">
                            <div class="alert alert-success alert-dismissible fade show mb-4 mt-4" role="alert">
                                {{Session::get('succes')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    @endif
                    
                    <div class="col-lg-10">
                        <form method="POST" action="{{route('update.entrada',$entrada->id)}}" role="form">
                            {{ csrf_field() }}
                            <input name="_method" type="hidden" value="PATCH">
                            <div class="card">
                                <div class="card-header">
                                    <h5>EDITAR ENTRADA</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12 form-group">
                                            <input type="text" class="form-control {{ $errors->has('titulo') ? ' is-invalid' : '' }}" placeholder="Titulo de la entrada" name="titulo" value="{{$entrada->titulo}}">
                                            @if ($errors->has('titulo'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('titulo') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-lg-12 form-group">
                                            <textarea name="contenido" id="editor">{{$entrada->contenido}}</textarea>
                                            @if ($errors->has('contenido'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('contenido') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </div>
                        </form>  
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection