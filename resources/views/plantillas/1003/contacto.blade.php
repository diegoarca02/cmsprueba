@extends('plantillas.1003.admin')
@section('1003')
<section class="section section-xl bg-default">
    <div class="container">
      <div class="row row-50 justify-content-sm-center">
        <div class="col-sm-10 col-lg-8 text-lg-left">
          <h2 class="font-weight-bold">Contactanos</h2>
          <hr class="divider bg-madison divider-lg-0">
          <div class="offset-top-30 offset-md-top-60">
            <p>Te responderemos en seguida</p>
          </div>
          <div class="offset-top-30">
            <form method="POST" action="{{route('store_contacto',$dominio)}}">
                {{ csrf_field() }}
                <input type="hidden" value="{{$idpagina}}" name="idpagina">
              <div class="row row-12">
                <div class="col-xl-6">
                  <div class="form-wrap">
                    <label class="form-label form-label-outside" for="contact-me-name">Nombres completos</label>
                    <input class="form-input" id="contact-me-name" type="text" name="nombres" data-constraints="@Required">
                  </div>
                </div>
               
                <div class="col-xl-6">
                  <div class="form-wrap">
                    <label class="form-label form-label-outside" for="contact-me-email">Correo electronico</label>
                    <input class="form-input" id="contact-me-email" type="email" name="correo" data-constraints="@Required @Email">
                  </div>
                </div>
                <div class="col-xl-6">
                  <div class="form-wrap">
                    <label class="form-label form-label-outside" for="contact-me-phone">Telefono</label>
                    <input class="form-input" id="contact-me-phone" type="text" name="telefono" data-constraints="@Required @IsNumeric">
                  </div>
                </div>
                <div class="col-xl-12">
                  <div class="form-wrap">
                    <label class="form-label form-label-outside" for="contact-me-message">Mensaje</label>
                    <textarea class="form-input" id="contact-me-message" name="mensaje" data-constraints="@Required" style="height: 220px"></textarea>
                  </div>
                </div>
              </div>
              <div class="text-center text-xl-left offset-top-20">
                <button  class="btn button-primary" type="submit">Enviar mensaje</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-sm-10 col-lg-4 text-left">
          <div class="inset-lg-left-30">
           
           
            <div class="offset-top-30 offset-md-top-60">
              <h6 class="font-weight-bold">Telefono</h6>
              <div>
                <div class="hr bg-gray-light offset-top-10"></div>
              </div>
              <div class="offset-top-15">
                <ul class="list list-unstyled">
                  <li><span class="icon icon-xs text-madison mdi mdi-phone text-middle"></span><a class="text-middle inset-left-10 text-dark" href="tel:1-800-1234-567">{{$footer->telefono}}</a></li>
                  
                </ul>
              </div>
            </div>
            <div class="offset-top-30 offset-md-top-60">
              <h6 class="font-weight-bold">Correo Electronico</h6>
              <div>
                <div class="hr bg-gray-light offset-top-10"></div>
              </div>
              <div class="offset-top-15">
                <ul class="list list-unstyled">
                  <li><span class="icon icon-xs text-madison mdi mdi-email-outline text-middle"></span><a class="text-primary text-middle inset-left-10" href="mailto:info@demolink.org">{{$footer->correo}}</a></li>
                </ul>
              </div>
            </div>
            <div class="offset-top-30 offset-md-top-60">
              <h6 class="font-weight-bold">Direccion</h6>
              <div>
                <div class="hr bg-gray-light offset-top-10"></div>
              </div>
              <div class="offset-top-15">
                <div class="unit flex-row unit-spacing-xs">
                  <div class="unit-left"><span class="icon icon-xs mdi mdi-map-marker text-madison"></span></div>
                  <div class="unit-body">
                    <p><a class="text-dark" href="#"><?php echo $footer->direccion?></a></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="offset-top-30 offset-md-top-65">
              <h6 class="font-weight-bold">Horarios</h6>
              <div>
                <div class="hr bg-gray-light offset-top-10"></div>
              </div>
              <div class="offset-top-15">
                <div class="unit flex-row unit-spacing-xs">
                  <div class="unit-left"><span class="icon icon-xs mdi mdi-calendar-clock text-madison"></span></div>
                  <div class="unit-body">
                    <?php echo $footer->horarios?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection