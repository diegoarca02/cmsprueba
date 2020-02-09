@extends('layouts.admin')
@section('contenido')

<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('index.pagina')}}">mis paginas</a></li>
    <li class="breadcrumb-item active">Registro de pagina</li>
</ol>
<div class="container-fluid">
    <div id="ui-view">
        <div>
            <div class="row">
                <div class="col-lg-8">
                <form method="POST" action="{{route('store.pagina')}}" role="form">
                    {{ csrf_field() }}
                    <div class="card">
                        <div class="card-header">
                            <h4>REGISTRO DE PAGINA</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 form-group">
                                    <input type="text" class="form-control {{ $errors->has('dominio') ? ' is-invalid' : '' }}" name="dominio" placeholder="Dominio de tu web">
                                    @if ($errors->has('dominio'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('dominio') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-lg-12 form-group">
                                    <div class="row">
                                        @foreach ($plantillas as $item)
                                            <div class="col-lg-4">
                                                <div class="card">
                                                    <input type="radio" id="customRadioInline1" name="idplantilla" class="form-control" value="{{$item->id}}">
                                                    <img src="{{asset('portadas/'.$item->portada)}}" style="width:100%; height:130px">
                                                    <div class="card-body">
                                                        {{$item->titulo}}
                                                    </div>
                                                </div> 
                                            </div>
                                        @endforeach
                                    </div>
                                    @if ($errors->has('idplantilla'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('idplantilla') }}</strong>
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