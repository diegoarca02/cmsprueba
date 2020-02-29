@extends('plantillas.1002.admin')
@section('1002')
<section id="about" style="    margin-top: 85px !important;">
    <div class="container">

        <header class="section-header">
            <h3>Nuestro Blog</h3>
            
          </header>
  
          <div class="row about-cols" style="margin-top: 50px !important">
  
            @foreach ($blog as $item)
            <div class="col-md-4 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
              <a href="http://127.0.0.1:8000/{{$dominio}}/contenido/pagina/blog/{{$item->slug}}">
                <div class="about-col">
                    <div class="img">
                      <img src="{{asset('blog/'.$item->imagen)}}" alt="" class="img-fluid" style="width: 100% !important">
                      <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                    </div>
                    <h2 class="title"><a href="#">{{$item->titulo}}</a></h2>
                    <p>
                      {{$item->excerpt}}
                    </p>
                  </div>
              </a>
            </div>
            @endforeach
  
            
          </div>

          <div class="row">
            <div class="col-lg-12">
                {{$galeria->render()}}
            </div>
          </div>

    </div>
  </section>
  @endsection