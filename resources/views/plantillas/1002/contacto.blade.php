@extends('plantillas.1002.admin')
@section('1002')

<section id="contact" class="section-bg wow fadeInUp" style="    margin-top: 85px !important;">
    <div class="container">

      <div class="section-header">
        <h3>Contatanos
        </h3>
        
      </div>

      <div class="row contact-info">

        <div class="col-md-4">
          <div class="contact-address">
            <i class="ion-ios-location-outline"></i>
            <h3>Dirección</h3>
            <address><?php echo $footer->direccion?></address>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-phone">
            <i class="ion-ios-telephone-outline"></i>
            <h3>Telefono</h3>
            <p><a href="tel:+155895548855">{{$footer->telefono}}</a></p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-email">
            <i class="ion-ios-email-outline"></i>
            <h3>Email</h3>
            <p><a href="mailto:info@example.com">{{$footer->correo}}</a></p>
          </div>
        </div>

      </div>

      <div class="form">
      

        <form method="POST" action="{{route('store_contacto',$dominio)}}">
          {{ csrf_field() }}
          <div class="form-row">
            <input type="hidden" value="{{$idpagina}}" name="idpagina">
            <div class="form-group col-md-6">
              <input type="text" name="nombres" class="form-control" id="name" placeholder="Nombres completos" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              
            </div>
            <div class="form-group col-md-6">
              <input type="email" class="form-control" name="correo" id="email" placeholder="Correo Electronico" data-rule="email" data-msg="Please enter a valid email" />
              
            </div>
          </div>
          <div class="form-group">
            <input type="number" class="form-control" name="telefono" id="subject" placeholder="Telefono" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            
          </div>
          <div class="form-group">
            <textarea class="form-control" name="mensaje" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensaje"></textarea>
            
          </div>
          <div class="text-center"><button type="submit">Enviar</button></div>
        </form>
      </div>

    </div>
  </section><!-- #contact -->
    
@endsection