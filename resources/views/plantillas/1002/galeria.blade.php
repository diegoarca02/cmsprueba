@extends('plantillas.1002.admin')
@section('1002')
<section id="portfolio" class="section-bg" style="    margin-top: 85px !important;">
    <div class="container">

      <header class="section-header">
        <h3 class="section-title">Galería</h3>
      </header>

    
      <div class="row portfolio-container" style="position: relative; height: 1080px;">

       @foreach ($galeria as $item)
        <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" style="position: absolute; left: 0px; top: 0px; visibility: visible; animation-name: fadeInUp;">
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

      <div class="row">
        <div class="col-lg-12">
            {{$galeria->render()}}
        </div>
      </div>
    </div>
  </section>
  @endsection