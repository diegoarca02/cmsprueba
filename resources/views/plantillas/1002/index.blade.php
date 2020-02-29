 @extends('plantillas.1002.admin')
 @section('1002')
 <!--==========================
    Intro Section
  ============================-->
  <section id="intro" >
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="{{asset('sliders/'.$slider[0]->imagen)}}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>{{$slider[0]->titulo}}</h2>
                
              </div>
            </div>
          </div>

          @foreach ($slider as $item)
            @if ($item->id != $slider[0]->id)
            <div class="carousel-item">
              <div class="carousel-background"><img src="{{asset('sliders/'.$item->imagen)}}" alt=""></div>
              <div class="carousel-container">
                <div class="carousel-content">
                  <h2>{{$item->titulo}}</h2>
                </div>
              </div>
            </div>
          @endif
          @endforeach

          

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      Featured Services Section
    ============================-->
    

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header mb-4">
          <h3>{{$seccion_uno->titulo}}</h3>
          
        </header>

        <div class="row about-cols mt-4" style="margin-top:50px !important">

          <div class="col-md-6 wow fadeInUp">
              <img src="{{asset('secciones/'.$seccion_uno->imagen)}}" style="width:100%">
          </div>

          <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="word-wrap: break-word;">
            <p><?php echo $seccion_uno->descripcion?></p>
          </div>


        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->

    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Nuestro Blog</h3>
          
        </header>

        <div class="row about-cols" style="margin-top: 50px !important">

          @foreach ($blog_index as $item)
          <div class="col-md-4 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <div class="about-col">
              <div class="img">
                <img src="{{asset('blog/'.$item->imagen)}}" alt="" class="img-fluid" style="width: 100% !important">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="http://127.0.0.1:8000/{{$dominio}}/contenido/pagina/blog/{{$item->slug}}">{{$item->titulo}}</a></h2>
              <p>
                {{$item->excerpt}}
              </p>
            </div>
          </div>
          @endforeach

          
        </div>

      </div>
    </section>



      <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header mb-4">
          <h3>{{$seccion_dos->titulo}}</h3>
          
        </header>

        <div class="row about-cols mt-4" style="margin-top:50px !important">

          <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="word-wrap: break-word;">
            <p><?php echo $seccion_dos->descripcion?></p>
          </div>
          
          <div class="col-md-6 wow fadeInUp">
              <img src="{{asset('secciones/'.$seccion_dos->imagen)}}" style="width:100%">
          </div>

          


        </div>

      </div>
    </section><!-- #about -->



    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Galería</h3>
        </header>


        <div class="row portfolio-container">

          @foreach ($galeria_index as $item)
            <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{asset('galeria/'.$item->imagen)}}" class="img-fluid" alt="">
                <a href="{{asset('galeria/'.$item->imagen)}}" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>
            </div>
          </div>
          @endforeach

          

        </div>

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Enlaces Recomendados</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          @foreach ($enlace as $item)
            <a href="{{$item->enlace}}" target="_blank">
              <img src="{{asset('enlace/'.$item->imagen)}}" alt="">
            </a>
          @endforeach
          
        </div>

      </div>
    </section><!-- #clients -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Nuestro Equipo</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

          @foreach ($equipo as $item)
          <div class="testimonial-item">
            <img src="{{asset('equipo/'.$item->imagen)}}" class="testimonial-img" alt="">
            <h3>{{$item->nombres}}</h3>
            <h4>{{$item->cargo}}</h4>
           
          </div>
          @endforeach

         

        </div>

      </div>
    </section><!-- #testimonials -->

    <!--==========================
      Team Section
    ============================-->
    



  </main>
  @endsection