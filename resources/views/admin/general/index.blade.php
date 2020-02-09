@extends('layouts.admin')
@section('contenido')
<ol class="breadcrumb">
    <li class="breadcrumb-item active">Configuracion general</li>
    
</ol>
<div class="container-fluid">
    <div id="ui-view">
        <div>
            <div class="animated fadeIn">
                <div class="row">
                    
                    <div class="col-lg-8">
                        @if(Session::has('succes'))
                            <div class="alert alert-success alert-dismissible fade show mb-4 mt-4" role="alert">
                                {{Session::get('succes')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <form method="POST" action="{{route('update.general',$general->id)}}" role="form" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input name="_method" type="hidden" value="PATCH">
                            <div class="card">
                                <div class="card-header">
                                    <h4>CONFIGURACION GENERAL</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <input type="hidden" value="{{$general->id}}" name="idgeneral">
                                        <div class="col-lg-4 form-group">
                                            <label><b>Fuente</b></label>
                                            <select class="form-control {{ $errors->has('fuente') ? ' is-invalid' : '' }}" name="fuente">
                                                @if ($general->fuente == 'Arial')
                                                    <option value="Arial" selected>Arial</option>
                                                    <option value="Roboto">Roboto</option>
                                                    <option value="Nunito">Nunito</option>
                                                    <option value="Raleway">Raleway</option>
                                                @elseif($general->fuente == 'Roboto')
                                                    <option value="Arial" >Arial</option>
                                                    <option value="Roboto" selected>Roboto</option>
                                                    <option value="Nunito">Nunito</option>
                                                    <option value="Raleway">Raleway</option>
                                                @elseif($general->fuente == 'Nunito')
                                                    <option value="Arial" >Arial</option>
                                                    <option value="Roboto" >Roboto</option>
                                                    <option value="Nunito" selected>Nunito</option>
                                                    <option value="Raleway">Raleway</option>
                                                @elseif($general->fuente == 'Raleway')
                                                    <option value="Arial" >Arial</option>
                                                    <option value="Roboto" >Roboto</option>
                                                    <option value="Nunito">Nunito</option>
                                                    <option value="Raleway" selected>Raleway</option>
                                                @endif
                                               
                                            </select>
                                            @if ($errors->has('fuente'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('fuente') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-lg-4 form-group">
                                            <label><b>Tamaño de letra</b></label>
                                            <select class="form-control {{ $errors->has('size') ? ' is-invalid' : '' }}" name="size">
                                                @if ($general->size == '8px')
                                                    <option value="8px" selected>8px</option>
                                                    <option value="10px">10px</option>
                                                    <option value="12px">12px</option>
                                                    <option value="20px">20px</option>
                                                @elseif($general->size == '10px')
                                                    <option value="8px" >8px</option>
                                                    <option value="10px" selected>10px</option>
                                                    <option value="12px">12px</option>
                                                    <option value="20px">20px</option>
                                                @elseif($general->size == '12px')
                                                    <option value="8px" >8px</option>
                                                    <option value="10px" >10px</option>
                                                    <option value="12px" selected>12px</option>
                                                    <option value="20px">20px</option>
                                                @elseif($general->size == '20px')
                                                    <option value="8px" >8px</option>
                                                    <option value="10px" >10px</option>
                                                    <option value="12px">12px</option>
                                                    <option value="20px" selected>20px</option>
                                                @endif
                                                
                                            </select>
                                            @if ($errors->has('size'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('titulo') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-lg-4 form-group">
                                            <label><b>Titulo</b></label>
                                            <input type="text" class="form-control {{ $errors->has('titulo') ? ' is-invalid' : '' }}" name="titulo" placeholder="Titulo de la pestaña" value="{{$general->titulo}}">
                                            @if ($errors->has('titulo'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('titulo') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-lg-4 form-group">
                                            <label><b>Logo</b></label>
                                            <input type="file" class="form-control {{ $errors->has('logo') ? ' is-invalid' : '' }}" name="logo" >
                                            @if ($errors->has('logo'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('logo') }}</strong>
                                        </span>
                                    @endif
                                        </div>
                                        <div class="col-lg-4 form-group">
                                            <label><b>Fondo principal</b></label>
                                            <input type="file" class="form-control {{ $errors->has('fondo_principal') ? ' is-invalid' : '' }}" name="fondo_principal" >
                                            @if ($errors->has('fondo_principal'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('fondo_principal') }}</strong>
                                        </span>
                                    @endif
                                        </div>
                                        <div class="col-lg-4 form-group">
                                            <label><b>Favicon</b></label>
                                            <input type="file" class="form-control {{ $errors->has('favicon') ? ' is-invalid' : '' }}" name="favicon" >
                                            @if ($errors->has('favicon'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('favicon') }}</strong>
                                        </span>
                                    @endif
                                        </div>
                                        <div class="col-lg-12 form-group">
                                            <label><b>Iframe Mapa</b></label>
                                            <textarea name="mapa" class="form-control {{ $errors->has('mapa') ? ' is-invalid' : '' }}" placeholder="Iframe mapa" style="height:100px !important">{{$general->mapa}}</textarea>
                                            @if ($errors->has('mapa'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('mapa') }}</strong>
                                        </span>
                                    @endif
                                        </div>
                                        
                                    </div> 
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 form-group">
                                        <label><b>Logo</b></label>
                                        <center><img src="{{asset('general/'.$general->logo)}}" style="width:80px !important"></center>
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <label><b>Fondo</b></label>
                                        <center><img src="{{asset('general/'.$general->fondo_principal)}}" style="width:150px !important"></center>
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <label><b>Favicon</b></label>
                                        <center><img src="{{asset('general/'.$general->favicon)}}" style="width:80px !important"></center>
                                    </div>
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