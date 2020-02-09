@extends('layouts.admin')
@section('contenido')
<ol class="breadcrumb">
    <li class="breadcrumb-item active">Bandeja de entrada</li>
    
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
                    
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <h5>LISTADO DE MENSAJES</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    
                                    <div class="col-lg-12">
                                        <table class="table table-sm">
                                            <thead class="thead-dark">
                                                <th>Nombres</th>
                                                <th>Correo</th>
                                                <th>Ver mensaje</th>
                                            </thead>
                                           @foreach ($mensaje as $item)
                                                <tbody>
                                                    <td>{{$item->nombres}}</td>
                                                    <td>{{$item->correo}}</td>
                                                    <td>
                                                        <button class="btn btn-warning" data-toggle="modal" data-target="#open-{{$item->id}}">Leer mensaje</button>
                                                    </td>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="open-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width:750px !important">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalCenterTitle">{{$item->nombres}}</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <input type="text" class="form-control" readonly value="{{$item->correo}}">
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <input type="text" class="form-control" readonly value="{{$item->telefono}}">
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <hr>
                                                                        <?php echo $item->mensaje?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                                           
                                                        </div>
                                                        </div>
                                                    </div>
                                                </tbody>
                                           @endforeach
                                        </table>
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