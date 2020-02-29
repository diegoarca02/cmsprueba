<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>{{$general->titulo}}</title>
    <meta charset="utf-8">

    <link rel="icon" type="image/ico" href="{{asset('general/'.$general->favicon)}}" sizes="any">

    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CLato%7CComfortaa:300,400,700%7COpen+Sans:300,400,600,700">

    <link rel="stylesheet" href="{{asset('themes/1001/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('themes/1001/css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('themes/1001/css/style.css')}}">
    <link href="{{asset('css/all.css')}}" rel="stylesheet">
    <link href="{{asset('css/fuentes.css')}}" rel="stylesheet">


    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
<body style="font-family: {{$general->fuente}} !important; font-size: {{$general->size}} !important; background-image: url({{asset('recursos_fondo/'.$general->fondo)}}) !important">
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-bell">
          <div class="cssload-circle">
            <div class="cssload-inner"></div>
          </div>
          <div class="cssload-circle">
            <div class="cssload-inner"></div>
          </div>
          <div class="cssload-circle">
            <div class="cssload-inner"></div>
          </div>
          <div class="cssload-circle">
            <div class="cssload-inner"></div>
          </div>
          <div class="cssload-circle">
            <div class="cssload-inner"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="page">
      <!-- Page Header-->
      <header class="section page-header header-creative-wrap context-dark">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-creative rd-navbar-creative-2" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="100px" data-xl-stick-up-offset="112px" data-xxl-stick-up-offset="132px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
            <div class="rd-navbar-aside-outer">
              <div class="rd-navbar-aside">
                <div class="rd-navbar-collapse">
                  <ul class="contacts-classic">
                  <li><span class="contacts-classic-title" style="color: {{$menu->color}} !important">Telefono:</span> <a href="tel:#">{{$footer->telefono}}</a>
                    </li>
                    <li style="color: {{$menu->color}} !important"><a href="mailto:#">{{$footer->correo}}</a></li>
                  </ul>
                </div>
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a class="brand" href="index.html"><img class="brand-logo-dark" src="images/logo-default-120x45.png" alt="" width="120" height="45" srcset="images/logo-default-240x90.png 2x"/><img class="brand-logo-light" src="images/logo-inverse-119x43.png" alt="" width="119" height="43" srcset="images/logo-inverse-238x87.png 2x"/></a>
                  </div>
                </div>
                
              </div>
            </div>
          <div class="rd-navbar-main-outer" style="background: {{$menu->background}} !important">
              <div class="rd-navbar-main">
                <div class="rd-navbar-nav-wrap">
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    
                    @foreach ($items_menu as $item)
                      <li class="rd-nav-item" style="color: {{$menu->color}} !important"><a class="rd-nav-link" href="{{$item->enlace}}"><?php echo $item->icono?> {{$item->titulo}}</a>
                      </li>
                    @endforeach
                     
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- Swiper-->
      
      @yield('1001')

      <!-- Page Footer-->
      <footer class="section footer-modern footer-modern-2">
      <div class="footer-modern-body section-xl context-dark" style="background: {{$footer->background}} !important">
          <div class="container">
            <div class="row row-40 row-md-50 justify-content-xl-between">
              <div class="col-md-10 col-lg-3 col-xl-4 wow fadeInRight">
                <div class="inset-xl-right-70">
                  <h5 class="footer-modern-title">Galería</h5>
                  <div class="row row-10 gutters-10" data-lightgallery="group">
                    @foreach ($galeria_footer as $item)
                    <div class="col-4 col-sm-2 col-lg-4">
                      <!-- Thumbnail Minimal--><a class="thumbnail-minimal" href="{{asset('galeria/'.$item->imagen)}}" data-lightgallery="item"><img src="{{asset('galeria/'.$item->imagen)}}" alt="" width="93" height="93"/></a>
                    </div>
                    @endforeach
                    
                    
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-7 col-lg-5 wow fadeInRight" data-wow-delay=".1s">
                <h5 class="footer-modern-title">Enlaces</h5>
                <ul class="footer-modern-list footer-modern-list-2 d-sm-inline-block d-md-block">
                 
                  @foreach ($items_menu as $item)
                      <li style="color: {{$menu->color}} !important"><a href="{{$item->enlace}}"><?php echo $item->icono?> {{$item->titulo}}</a>
                      </li>
                  @endforeach
                </ul>
              </div>
              <div class="col-sm-6 col-md-5 col-lg-4 col-xl-3 wow fadeInRight" data-wow-delay=".2s">
                <h5 class="footer-modern-title">Contactanos</h5>
                <ul class="contacts-creative">
                  <li>
                    <div class="unit unit-spacing-sm flex-column flex-md-row">
                      <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                      <div class="unit-body"><a href="#"><?php echo $footer->direccion?></a></div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-spacing-sm flex-column flex-md-row">
                      <div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
                      <div class="unit-body"><a href="tel:#">{{$footer->telefono}}</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-spacing-sm flex-column flex-md-row">
                      <div class="unit-left"><span class="icon mdi mdi-email-outline"></span></div>
                      <div class="unit-body"><a href="mailto:#">{{$footer->correo}}</a></div>
                    </div>
                  </li>
                </ul>
                <ul class="list-inline list-social-3 list-inline-sm">
                  <li><a class="icon mdi mdi-facebook icon-xxs" href="#"></a></li>
                  <li><a class="icon mdi mdi-twitter icon-xxs" href="#"></a></li>
                  <li><a class="icon mdi mdi-instagram icon-xxs" href="#"></a></li>
                  <li><a class="icon mdi mdi-google-plus icon-xxs" href="#"></a></li>
                  <li><a class="icon mdi mdi-skype icon-xxs" href="#"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-modern-panel text-center">
          <div class="container">
            <p class="rights">{{$footer->cr}}</p>
          </div>
        </div>
      </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="{{asset('themes/1001/js/core.min.js')}}"></script>
    <script src="{{asset('themes/1001/js/script.js')}}"></script>
    <script src="{{asset('js/all.js')}}"></script>
	<!--LIVEDEMO_00 -->

	
  </body>
</html>