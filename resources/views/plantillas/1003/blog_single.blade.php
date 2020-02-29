@extends('plantillas.1003.admin')
@section('1003')


  <div id="fb-root"></div>
  <!-- Latest news-->
  <section class="section section-xl">
    <div class="container">
      <div class="row row-85 justify-content-sm-center">
        <div class="col-md-12 col-lg-12 text-lg-left">
          <h2 class="font-weight-bold">
            {{$blog->titulo}}
          </h2>
          <hr class="divider bg-madison divider-lg-0">
          
          <?php echo $blog->contenido?>
      </div>
    </div>
  </section>
  @endsection