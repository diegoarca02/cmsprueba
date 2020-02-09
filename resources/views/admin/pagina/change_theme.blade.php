@extends('layouts.admin')
@section('contenido')
<ol class="breadcrumb">
    <li class="breadcrumb-item active">Mercado de plantillas</li>
    
</ol>
<div class="container-fluid">
    <div id="ui-view">
        <div>
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                    @if(Session::has('succes'))
                        <div class="alert alert-success alert-dismissible fade show mb-4 mt-4" role="alert">
                            {{Session::get('succes')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    @foreach ($plantillas as $item)
                                        @if ($item->id == $pagina->idplantilla)
                                            <div class="col-lg-4 form-group">
                                                <form method="POST" action="{{route('update_theme')}}" role="form">
                                                    {{ csrf_field() }}
                                                    <input name="_method" type="hidden" value="PATCH">
                                                <div class="card">
                                                    <div class="card-header" style="background: #353535 !important;
                                                    color: white !important;">
                                                        <input type="hidden" value="{{$item->id}}" name="idplantilla">
                                                        <h5>{{$item->titulo}}</h5>
                                                        <span>Codigo de plantilla: {{$item->id}}</span>
                                                    </div>
                                                    <img src="{{asset('portadas/'.$item->portada)}}" style="width: 100% !important">
                                                    <div class="card-body">
                                                        <p class="text-justify">{{substr($item->descripcion,0,150)}}</p>
                                                    </div>
                                                    <div class="card-footer">
                                                        <button class="btn btn-primary" type="submit">Activar plantilla</button>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        @elseif($item->id != $pagina->idplantilla)
                                            <div class="col-lg-4 form-group">
                                                <form method="POST" action="{{route('update_theme')}}" role="form">
                                                    {{ csrf_field() }}
                                                    <input name="_method" type="hidden" value="PATCH">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <input type="hidden" value="{{$item->id}}" name="idplantilla">
                                                        <h5>{{$item->titulo}}</h5>
                                                        <span>Codigo de plantilla: {{$item->id}}</span>
                                                    </div>
                                                    <img src="{{asset('portadas/'.$item->portada)}}" style="width: 100% !important">
                                                    <div class="card-body">
                                                        <p class="text-justify">{{substr($item->descripcion,0,150)}}</p>
                                                    </div>
                                                    <div class="card-footer">
                                                        <button class="btn btn-primary" type="submit">Activar plantilla</button>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection