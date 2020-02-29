@extends('plantillas.1003.admin')
@section('1003')
<section>
  <!-- Swiper-->
  <div class="swiper-container swiper-slider swiper-slider-1 swiper-container-horizontal swiper-container-true" data-height="100vh" data-loop="false" data-dragable="false" data-min-height="480px" data-slide-effect="true" style="height: 740px;">
    <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
      <div class="swiper-slide swiper-slide-active" data-slide-bg="{{asset('general/'.$general->fondo_principal)}}" style="background-position: 80% center; background-image: url(&quot;{{asset('general/'.$general->fondo_principal)}}&quot;); background-size: cover; width: 1017px;">
        <div class="swiper-slide-caption">
          <div class="container">
            <div class="row justify-content-sm-center justify-content-xl-start">
              <div class="col-lg-9 text-lg-left col-sm-10">
                <div class="jumbotron-custom bg-default-transparent">
                  <div class="top-banner" style="z-index:9">
                    <h4 class="text-white">Bienvenidos a</h4>
                  </div>
                  <div>
                    <h1 class="font-weight-bold"><a href="">{{$menu->titulo}}.</a></h1>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <!--A Meeting of Minds-->

  <section class="section section-xl bg-default">
    <div class="container">
      <div class="row row-50 text-md-left align-items-md-center justify-content-md-between">
        <div class="col-md-5 col-lg-4 order-md-2"><a href="index.html"><img class="img-responsive d-inline-block" src="{{asset('secciones/'.$seccion_uno->imagen)}}" width="326" height="329" alt=""></a></div>
        <div class="col-md-7 col-lg-7 order-md-1">
          <h2 class="font-weight-bold">{{$seccion_uno->titulo}}</h2>
          <hr class="divider bg-madison divider-md-0">
          <div class="offset-top-35 offset-lg-top-60" style="word-wrap: break-word;">
            <p><?php echo $seccion_uno->descripcion?></p>
          </div>
      
        </div>
      </div>
    </div>
  </section>
  <!-- Fill in the Form-->

  <section class="section bg-catskill section-xl">
    <div class="container">
      <h2 class="font-weight-bold">Nuestro Blog</h2>
      <hr class="divider bg-madison">
      <div class="row row-30 offset-top-60 text-left justify-content-sm-center">

        @foreach ($blog_index as $item)
          <div class="col-md-6 col-lg-4">
            <article class="post-news"><a href="http://127.0.0.1:8000/inmaculada/contenido/pagina/blog/{{$item->slug}}"><img class="img-responsive" src="{{asset('blog/'.$item->imagen)}}" width="370" height="240" alt=""></a>
              <div class="post-news-body">
                <h6><a href="http://127.0.0.1:8000/inmaculada/contenido/pagina/blog/{{$item->slug}}">{{$item->titulo}}</a></h6>
                <div class="offset-top-20">
                  <p>{{$item->excerpt}}</p>
                </div>
                <div class="post-news-meta offset-top-20"><span class="icon icon-xs mdi mdi-calendar-clock text-middle text-madison"></span><span class="text-middle inset-left-10 font-italic text-black">2 days ago</span></div>
              </div>
            </article>
          </div>
        @endforeach

        
      </div>
      <div class="offset-top-50"><a class="btn button-primary" href="	http://127.0.0.1:8000/inmaculada/contenido/pagina/blog">Todas las entradas</a></div>
    </div>
  </section>

  <section class="section section-xl bg-default">
    <div class="container">
      <div class="row row-50 text-md-left align-items-md-center justify-content-md-between">
        
        <div class="col-md-7 col-lg-7 order-md-1">
          <h2 class="font-weight-bold">{{$seccion_dos->titulo}}</h2>
          <hr class="divider bg-madison divider-md-0">
          <div class="offset-top-35 offset-lg-top-60" style="word-wrap: break-word;">
            <p><?php echo $seccion_dos->descripcion?></p>
          </div>
      
        </div>
        <div class="col-md-5 col-lg-4 order-md-2"><a href="index.html"><img class="img-responsive d-inline-block" src="{{asset('secciones/'.$seccion_dos->imagen)}}" width="326" height="329" alt=""></a></div>
      </div>
    </div>
  </section>
  <!-- Fill in the Form-->
 

  <section class="section section-xl bg-default">
    <div class="container">
      <h2 class="font-weight-bold">Nuestro Equipo</h2>
      <hr class="divider bg-madison">
      <div class="row row-30 text-lg-left offset-top-60">
        @foreach ($equipo as $item)
        <div class="col-md-6 col-lg-3"><img class="img-responsive d-inline-block img-rounded" src="{{asset('equipo/'.$item->imagen)}}" width="270" height="270" alt="">
          <div class="offset-top-20">
            <h6 class="font-weight-bold text-primary"><a href="team-member-profile.html">{{$item->nombres}}</a></h6>
          </div>
          <div class="offset-top-5">
            <p>{{$item->nombres}}</p>
          </div>
        </div>
        @endforeach
        
      </div>
    </div>
  </section>




  <section class="section">
    <?php echo $general->mapa?>
  </section>
  @endsection