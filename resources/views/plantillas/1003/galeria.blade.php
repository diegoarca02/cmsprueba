@extends('plantillas.1003.admin')
@section('1003')
<section class="section section-xl bg-default">
    <div class="container">
      <h2>Galeria</h2>
      <hr class="divider bg-madison">
      <div class="offset-top-60">
        <div class="row row-30 justify-content-sm-center" data-lightgallery="group">
          @foreach ($galeria as $item)
          <div class="col-sm-10 col-md-6 col-lg-4">
            <figure class="thumbnail-classic">
              <div class="thumbnail-classic-img-wrap"><img src="{{asset('galeria/'.$item->imagen)}}" alt="" width="370" height="370"/>
              </div>
              <figcaption class="thumbnail-classic-caption text-center">
                <div>
                  <h4 class="thumbnail-classic-title">ZOOM</h4>
                </div>
                <hr class="divider divider-sm"/>
                
              </figcaption>
            </figure>
          </div>
          @endforeach
          
        </div>

        <div class="row">
            <div class="col-lg-12">
                {{$galeria->render()}}
            </div>
          </div>
      </div>
    </div>
  </section>
  @endsection