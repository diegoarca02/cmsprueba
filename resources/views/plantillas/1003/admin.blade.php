<!DOCTYPE html>
<html class="wide wow-animation scrollTo" lang="en">
  <head>
    <!-- Site Title-->
    <title>{{$general->titulo}}</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">

    <link rel="icon" type="image/ico" href="{{asset('general/'.$general->favicon)}}" sizes="any">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,700%7CMerriweather:400,300,300italic,400italic,700,700italic">
    <link rel="stylesheet" href="{{asset('themes/1003/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('themes/1003/css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('themes/1003/css/style.css')}}">
    <link href="{{asset('css/all.css')}}" rel="stylesheet">
  <link href="{{asset('css/fuentes.css')}}" rel="stylesheet">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader"> 
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
      </div>
    </div>
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Header-->
      <header class="page-head">
        <!-- RD Navbar Transparent-->
        <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-default" data-md-device-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-stick-up-offset="210" data-xl-stick-up-offset="85" data-lg-auto-height="true" data-md-layout="rd-navbar-static" data-lg-layout="rd-navbar-static" data-lg-stick-up="true" style="background: {{$menu->background}} !important">
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"><span></span></button>
                <h4 class="panel-title d-lg-none">Pages</h4>
                <!-- RD Navbar Right Side Toggle-->
                <button class="rd-navbar-top-panel-toggle d-lg-none" data-rd-navbar-toggle=".rd-navbar-top-panel"><span></span></button>
                <div class="rd-navbar-top-panel">
                  <div class="rd-navbar-top-panel-left-part">
                    <ul class="list-unstyled">
                      <li>
                        <div class="unit flex-row align-items-center unit-spacing-xs">
                          <div class="unit-left"><span class="icon mdi mdi-phone text-middle"></span></div>
                          <div class="unit-body"><a href="tel:#">{{$footer->telefono}}</a>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="unit flex-row align-items-center unit-spacing-xs">
                          <div class="unit-left"><span class="icon mdi mdi-map-marker text-middle"></span></div>
                          <div class="unit-body"><a href="#">{{$footer->direccion}}</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="unit flex-row align-items-center unit-spacing-xs">
                          <div class="unit-left"><span class="icon mdi mdi-email-open text-middle"></span></div>
                          <div class="unit-body"><a href="mailto:#">{{$footer->correo}}</a></div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  
                </div>
              </div>
              <div class="rd-navbar-menu-wrap clearfix">
                <!--Navbar Brand-->
                <div class="rd-navbar-brand"><a class="d-inline-block" href="index.html">
                    <div class="unit align-items-sm-center unit-xl flex-column flex-xxl-row unit-spacing-custom">
                      <div class="unit-left">
                          <img width='170' height='172' src='{{asset('general/'.$general->logo)}}' alt=''/>
                      </div>
                      <div class="unit-body text-xxl-left">
                        <div class="rd-navbar-brand-title" style="color: {{$menu->color}} !important">{{$menu->titulo}}</div>
                      </div>
                    </div></a></div>
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-mobile-scroll">
                    <div class="rd-navbar-mobile-header-wrap">
                      <!--Navbar Brand Mobile-->
                      <div class="rd-navbar-mobile-brand"><a href="index.html"><img width='136' height='138' src='images/logo-170x172.png' alt=''/></a></div>
                    </div>
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      
                      @foreach ($items_menu as $item)
                            <li><a style="color: {{$menu->color}} !important" href="{{$item->enlace}}"><?php echo $item->icono?> {{$item->titulo}}</a>
                            </li>
                        @endforeach
               
                    </ul>
                    <!--RD Navbar Mobile Search-->
                    
                  </div>
                </div>

              </div>
            </div>
          </nav>
        </div>
      </header>
      @yield('1003')

      <!-- Corporate footer-->
      <footer class="page-footer" style="background: {{$footer->background}} !important">
        <div class="hr bg-gray-light"></div>
        <div class="container section-xs block-after-divider">
          <div class="row row-50 justify-content-xl-between justify-content-sm-center">
            <div class="col-lg-3 col-xl-2">
              <!--Footer brand--><a class="d-inline-block" href="index.html">
                <img width='170' height='172' src='{{asset('general/'.$general->logo)}}' alt=''/>
                <div>
                  <h6 class="barnd-name font-weight-bold offset-top-25"  style="color: {{$menu->color}} !important">{{$menu->titulo}}</h6>
                </div>
                </a>
            </div>
            <div class="col-sm-10 col-lg-5 col-xl-4 text-xl-left">
              <h6 class="font-weight-bold" style="color: {{$menu->color}} !important">Contactanos</h6>
              <div class="text-subline"></div>
              <div class="offset-top-30">
                <ul class="list-unstyled contact-info list">
                  <li>
                    <div class="unit flex-row align-items-center unit-spacing-xs">
                      <div class="unit-left"><span class="icon mdi mdi-phone text-middle icon-xs text-madison" style="color: {{$menu->color}} !important"></span></div>
                      <div class="unit-body"><a class="text-dark" href="tel:#"  style="color: {{$menu->color}} !important">{{$footer->telefono}}</a>
                      </div>
                    </div>
                  </li>
                  <li class="offset-top-15">
                    <div class="unit flex-row align-items-center unit-spacing-xs">
                      <div class="unit-left"><span class="icon mdi mdi-map-marker text-middle icon-xs text-madison" style="color: {{$menu->color}} !important"></span></div>
                      <div class="unit-body text-left"><a class="text-dark" href="#"  style="color: {{$menu->color}} !important">{{$footer->direccion}}</a></div>
                    </div>
                  </li>
                  <li class="offset-top-15">
                    <div class="unit flex-row align-items-center unit-spacing-xs">
                      <div class="unit-left"><span class="icon mdi mdi-email-open text-middle icon-xs text-madison" style="color: {{$menu->color}} !important"></span></div>
                      <div class="unit-body"><a href="mailto:#"  style="color: {{$menu->color}} !important">{{$footer->correo}}</a></div>
                    </div>
                  </li>
                </ul>
              </div>
              
            </div>
            <div class="col-sm-10 col-lg-8 col-xl-4 text-xl-left">
              <h6 class="font-weight-bold"  style="color: {{$menu->color}} !important">{{$menu->titulo}}</h6>
              <div class="text-subline"></div>
              <div class="offset-top-30 text-left">
                <p  style="color: {{$menu->color}} !important">Enter your email address to get the latest University news, special events and student activities delivered right to your inbox.</p>
              </div>
              <div class="offset-top-10">
                <form class="rd-mailform form-subscribe" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                  <div class="form-wrap">
                    <div class="input-group input-group-sm">
                      <input class="form-input" placeholder="Your e-mail" type="email" name="email" data-constraints="@Required @Email"><span class="input-group-btn">
                        <button class="btn btn-sm button-primary" type="submit">Subscribe</button></span>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-madison context-dark">
          <div class="container text-lg-left section-5">
            <p class="rights" style="color: {{$menu->color}} !important">{{$footer->cr}}</p>
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Java script-->
    <script src="{{asset('themes/1003/js/core.min.js')}}"></script>
    <script src="{{asset('themes/1003/js/script.js')}}"></script>
    <script src="{{asset('js/all.js')}}"></script>
  </body>
</html>