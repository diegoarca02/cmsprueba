@extends('layouts.admin')
@section('contenido')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('index.equipo')}}">Listado de personas</a></li>
    <li class="breadcrumb-item active">Registro de personas</li>
    
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
                        <form method="POST" action="{{route('store.equipo')}}" role="form" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card">
                                <div class="card-header">
                                    <h5>REGISTRO DE ENTRADA</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6 form-group">
                                            <input type="text" class="form-control {{ $errors->has('nombres') ? ' is-invalid' : '' }}" placeholder="Nombres completos" name="nombres">
                                            @if ($errors->has('nombres'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('nombres') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <input type="text" class="form-control {{ $errors->has('cargo') ? ' is-invalid' : '' }}" placeholder="Cargo de la persona" name="cargo">
                                            @if ($errors->has('cargo'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('cargo') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <input type="file" class="form-control {{ $errors->has('imagen') ? ' is-invalid' : '' }}" name="imagen">
                                            @if ($errors->has('imagen'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('imagen') }}</strong>
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