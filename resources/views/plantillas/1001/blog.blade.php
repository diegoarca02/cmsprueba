@extends('plantillas.1001.admin')
@section('1001')
<section class="breadcrumbs-custom" style="margin-top: 150px !important;">
    <div class="parallax-container" data-parallax-img="{{asset('themes/1001/images/bg-about.jpg')}}">
      <div class="breadcrumbs-custom-body parallax-content context-dark">
        <div class="container">
          <h1 class="breadcrumbs-custom-title">Nuestro Blog</h1>
        </div>
      </div>
    </div>
    <div class="breadcrumbs-custom-footer">
      <div class="container">
        <ul class="breadcrumbs-custom-path">
          <li class="active">Grid Blog</li>
        </ul>
      </div>
    </div>
  </section>
  <!-- Button Sizes-->
  <section class="section section-xl bg-default">
    <div class="container">
      <div class="row row-30">

        @foreach ($blog as $item)
            <div class="col-sm-6 col-lg-4">
            <!-- Post Classic-->
       
                <article class="post post-classic box-md"><a class="post-classic-figure" href="http://127.0.0.1:8000/{{$dominio}}/contenido/pagina/blog/{{$item->slug}}"><img src="{{asset('blog/'.$item->imagen)}}" alt="" width="370" height="239"/></a>
                    <div class="post-classic-content">
                     
                      <h5 class="post-classic-title text-spacing-0"><a href="http://127.0.0.1:8000/{{$dominio}}/contenido/pagina/blog/{{$item->slug}}">{{$item->titulo}}</a></h5>
                      <p class="post-classic-text font-fourth">{{$item->excerpt}}</p>
                    </div>
                  </article>
      
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