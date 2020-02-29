@extends('layouts.admin')
@section('contenido')
<ol class="breadcrumb">
    <li class="breadcrumb-item active">Galeria</li>
    
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
                    
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>MIS PATTERNS</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    
                                    <div class="col-lg-12">
                                        <div class="row">
                                            @if ($general->fondo != "")
                                                <div class="col-lg-2">
                                                    <form method="POST" action="{{route('update.fondo',$idgeneral)}}">
                                                        {{ csrf_field() }}
                                                        <input name="_method" type="hidden" value="PATCH">
                                                        <input type="hidden" name="fondo" value="{{$general->fondo}}">
                                                        <div class="card">
                                                            <img src="{{asset('recursos_fondo/'.$general->fondo)}}" style="width:100% !important">
                                                            <div class="card-body" style="background: #191919 !important; color: white !important">
                                                                <center><button type="submit" class="btn btn-warning">Seleccionar</button></center>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            @endif
                                            <div class="col-lg-2">
                                                <form method="POST" action="{{route('update.fondo',$idgeneral)}}">
                                                    {{ csrf_field() }}
                                                    <input name="_method" type="hidden" value="PATCH">
                                                    <input type="hidden" name="fondo" value="fondo1.png">
                                                    <div class="card">
                                                        <img src="{{asset('recursos_fondo/fondo1.png')}}" style="width:100% !important">
                                                        <div class="card-body">
                                                            <center><button type="submit" class="btn btn-warning">Seleccionar</button></center>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-lg-2">
                                                <form method="POST" action="{{route('update.fondo',$idgeneral)}}">
                                                    {{ csrf_field() }}
                                                    <input name="_method" type="hidden" value="PATCH">
                                                    <input type="hidden" name="fondo" value="fondo2.png">
                                                    <div class="card">
                                                        <img src="{{asset('recursos_fondo/fondo2.png')}}" style="width:100% !important">
                                                        <div class="card-body">
                                                            <center><button type="submit" class="btn btn-warning">Seleccionar</button></center>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-lg-2">
                                                <form method="POST" action="{{route('update.fondo',$idgeneral)}}">
                                                    {{ csrf_field() }}
                                                    <input name="_method" type="hidden" value="PATCH">
                                                    <input type="hidden" name="fondo" value="fondo3.png">
                                                    <div class="card">
                                                        <img src="{{asset('recursos_fondo/fondo3.png')}}" style="width:100% !important">
                                                        <div class="card-body">
                                                            <center><button type="submit" class="btn btn-warning">Seleccionar</button></center>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-lg-2">
                                                <form method="POST" action="{{route('update.fondo',$idgeneral)}}">
                                                    {{ csrf_field() }}
                                                    <input name="_method" type="hidden" value="PATCH">
                                                    <input type="hidden" name="fondo" value="fondo4.png">
                                                    <div class="card">
                                                        <img src="{{asset('recursos_fondo/fondo4.png')}}" style="width:100% !important">
                                                        <div class="card-body">
                                                            <center><button type="submit" class="btn btn-warning">Seleccionar</button></center>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-lg-2">
                                                <form method="POST" action="{{route('update.fondo',$idgeneral)}}">
                                                    {{ csrf_field() }}
                                                    <input name="_method" type="hidden" value="PATCH">
                                                    <input type="hidden" name="fondo" value="fondo5.png">
                                                    <div class="card">
                                                        <img src="{{asset('recursos_fondo/fondo5.png')}}" style="width:100% !important">
                                                        <div class="card-body">
                                                            <center><button type="submit" class="btn btn-warning">Seleccionar</button></center>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-lg-2">
                                                <form method="POST" action="{{route('update.fondo',$idgeneral)}}">
                                                    {{ csrf_field() }}
                                                    <input name="_method" type="hidden" value="PATCH">
                                                    <input type="hidden" name="fondo" value="fondo6.png">
                                                    <div class="card">
                                                        <img src="{{asset('recursos_fondo/fondo6.png')}}" style="width:100% !important">
                                                        <div class="card-body">
                                                            <center><button type="submit" class="btn btn-warning">Seleccionar</button></center>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-lg-2">
                                                <form method="POST" action="{{route('update.fondo',$idgeneral)}}">
                                                    {{ csrf_field() }}
                                                    <input name="_method" type="hidden" value="PATCH">
                                                    <input type="hidden" name="fondo" value="fondo7.png">
                                                    <div class="card">
                                                        <img src="{{asset('recursos_fondo/fondo7.png')}}" style="width:100% !important">
                                                        <div class="card-body">
                                                            <center><button type="submit" class="btn btn-warning">Seleccionar</button></center>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-lg-2">
                                                <form method="POST" action="{{route('update.fondo',$idgeneral)}}">
                                                    {{ csrf_field() }}
                                                    <input name="_method" type="hidden" value="PATCH">
                                                    <input type="hidden" name="fondo" value="fondo8.png">
                                                    <div class="card">
                                                        <img src="{{asset('recursos_fondo/fondo8.png')}}" style="width:100% !important">
                                                        <div class="card-body">
                                                            <center><button type="submit" class="btn btn-warning">Seleccionar</button></center>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-lg-2">
                                                <form method="POST" action="{{route('update.fondo',$idgeneral)}}">
                                                    {{ csrf_field() }}
                                                    <input name="_method" type="hidden" value="PATCH">
                                                    <input type="hidden" name="fondo" value="fondo9.png">
                                                    <div class="card">
                                                        <img src="{{asset('recursos_fondo/fondo9.png')}}" style="width:100% !important">
                                                        <div class="card-body">
                                                            <center><button type="submit" class="btn btn-warning">Seleccionar</button></center>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-lg-2">
                                                <form method="POST" action="{{route('update.fondo',$idgeneral)}}">
                                                    {{ csrf_field() }}
                                                    <input name="_method" type="hidden" value="PATCH">
                                                    <input type="hidden" name="fondo" value="fondo10.png">
                                                    <div class="card">
                                                        <img src="{{asset('recursos_fondo/fondo10.png')}}" style="width:100% !important">
                                                        <div class="card-body">
                                                            <center><button type="submit" class="btn btn-warning">Seleccionar</button></center>
                                                        </div>
                                                    </div>
                                                </form>
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
    </div>
</div>
@endsection