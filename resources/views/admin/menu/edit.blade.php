@extends('layouts.admin')
@section('contenido')

<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('index.plantilla')}}">Listado de plantillas</a></li>
    <li class="breadcrumb-item active">Actualizar plantilla</li>
</ol>
<div class="container-fluid">
    <div id="ui-view">
        <div>
            <div class="row">
                <div class="col-lg-6">
                <form method="POST" action="{{route('update_item',$item_menu->id)}}" role="form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input name="_method" type="hidden" value="PATCH">
                    <div class="card">
                        <div class="card-header">
                            <h4>ACTUALIZAR DE PLANTILLA</h4>
                        </div>
                        <div class="card-body">
                           <div class="row">
                            <div class="col-lg-12 form-group">
                               
                                <input type="hidden" value="{{$menu->id}}" name="idmenu">
                                <div class="row">
                                    <div class="col-lg-12 form-group">
                                        <div class="input-group">
                                            <input type="text" id="input_enlace" class="form-control" placeholder="Enlace del menú" name="enlace" value="{{$item_menu->enlace}}">
                                            <div class="input-group-addon">
                                                <a data-toggle="modal" data-target="#open-links" class="btn btn-success"><i class="fas fa-external-link-square-alt"></i></a>
                                            </div>
                                        </div>

                                        <!-- Modal -->
                                        <div class="modal fade" id="open-links" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                            <div class="modal-dialog" role="document" style="max-width:650px !important">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle"><i class="fas fa-external-link-square-alt"></i>&nbsp; MIS ENLACES</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-lg-12 form-group">
                                                            <h6>ENLACES ESTATICOS</h6>
                                                            <table class="table table-sm">
                                                                <thead class="thead-dark">
                                                                    <th>Enlace</th>
                                                                    <th>Ir</th>
                                                                    <th>Copiar</th>
                                                                </thead>
                                                                <tr>
                                                                    <td>
                                                                        Blog
                                                                    </td>
                                                                    <td>
                                                                        <a href="http://127.0.0.1:8000/{{$dominio}}/contenido/pagina/blog" class="btn btn-warning" target="_blank">Ir</a>
                                                                    </td>
                                                                    <td style="display:none">http://127.0.0.1:8000/{{$dominio}}/contenido/pagina/blog</td>
                                                                    <td>
                                                                        <button class="btn-enlaces btn btn-primary" type="button">Copiar</button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Galería
                                                                    </td>
                                                                    <td>
                                                                        <a href="http://127.0.0.1:8000/{{$dominio}}/contenido/pagina/galeria" class="btn btn-warning" target="_blank">Ir</a>
                                                                    </td>
                                                                    <td style="display:none">http://127.0.0.1:8000/{{$dominio}}/contenido/pagina/galeria</td>
                                                                    <td>
                                                                        <button class="btn-enlaces btn btn-primary" type="button">Copiar</button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Contacto
                                                                    </td>
                                                                    <td>
                                                                        <a href="http://127.0.0.1:8000/{{$dominio}}/contenido/pagina/contacto" class="btn btn-warning" target="_blank">Ir</a>
                                                                    </td>
                                                                    <td style="display:none">http://127.0.0.1:8000/{{$dominio}}/contenido/pagina/contacto</td>
                                                                    <td>
                                                                        <button class="btn-enlaces btn btn-primary" type="button">Copiar</button>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                        <div class="col-lg-12 form-group">
                                                            <h6>ENLACES DINAMICOS</h6>
                                                            <table class="table table-sm">
                                                                <thead class="thead-dark">
                                                                    <th>Titulo</th>
                                                                    <th>Ir</th>
                                                                    <th>Copiar</th>
                                                                </thead>
                                                                @foreach ($entradas as $item)
                                                                    <tr>
                                                                        <td>{{substr($item->titulo,0,40)}}</td>
                                                                        <td>
                                                                            <a href="http://127.0.0.1:8000/{{$dominio}}/contenido/{{$item->slug}}" class="btn btn-warning" target="_blank">Ir</a>
                                                                        </td>
                                                                        <td style="display:none">http://127.0.0.1:8000/{{$dominio}}/contenido/{{$item->slug}}</td>
                                                                        <td>
                                                                            <button class="btn-dinamico btn btn-primary" type="button">Copiar</button>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" placeholder="Titulo del menú" name="titulo" value="{{$item_menu->titulo}}">
                                    </div>
                                    <div class="col-lg-6form-group">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Icono del menú" name="icono" 
                                            id="input_icono" value="{{$item_menu->icono}}">
                                            <div class="input-group-addon">
                                                <a data-toggle="modal" data-target="#open-icon" class="btn btn-primary"><i class="far fa-angry"></i></a>
                                            </div>
                                            <!-- Modal -->
                                            <div class="modal fade" id="open-icon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                <div class="modal-dialog" role="document" style="max-width:650px !important">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle"><i class="far fa-angry"></i>&nbsp; SUGERENCIAS DE ICONOS</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <table class="table table-sm">
                                                                    <tr>
                                                                        <td><i class="fas fa-home"></i></td>
                                                                        <td><button class="btn-icono btn btn-warning btn-sm" type="button"><i class="fas fa-copy"></i></button></td>
                                                                        <td style="display:none">{{'<i class="fas fa-home"></i>'}}</td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td><i class="fas fa-phone-alt"></i></td>
                                                                        <td><button class="btn-icono btn btn-warning btn-sm" type="button"><i class="fas fa-copy"></i></button></td>
                                                                        <td style="display:none">{{'<i class="fas fa-phone-alt"></i>'}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><i class="fas fa-photo-video"></i></td>
                                                                        <td><button class="btn-icono btn btn-warning btn-sm" type="button"><i class="fas fa-copy"></i></button></td>
                                                                        <td style="display:none">{{'<i class="fas fa-photo-video"></i>'}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><i class="far fa-newspaper"></i></td>
                                                                        <td><button class="btn-icono btn btn-warning btn-sm" type="button"><i class="fas fa-copy"></i></button></td>
                                                                        <td style="display:none">{{'<i class="far fa-newspaper"></i>'}}</td>
                                                                    </tr>
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
                           </div>
                        </div>
                        <div class="card-header">
                            <button class="btn btn-primary" type="submit">Actualizar</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        
        $(document).ready(function(){
            $('.btn-enlaces').on('click', function(event) {
                let classenlace = $(this).parent().parent().children()[2].innerText;
                $("#input_enlace").val(classenlace);
                $('#open-links').modal('toggle');
            });

            $('.btn-icono').on('click', function(event) {
                let classenlace = $(this).parent().parent().children()[2].innerText;
    
                $("#input_icono").val(classenlace);
                $('#open-icon').modal('toggle');
            });

        });

    </script>
@endpush
@endsection