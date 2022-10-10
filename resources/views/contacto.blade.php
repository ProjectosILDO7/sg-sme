@extends('layouts.app')

@section('content')
<div class="container">

    <div>
      <br><br>
        <b-card-group deck>
          <b-card 
            overlay
            img-src="../img/contact-us-900X250.jpg" 
            {{-- img-src="https://picsum.photos/900/250/?image=3"  --}}
            img-alt="Card Image"
            text-variant="white"
            title="Contacto"
            sub-title="Serviços de Migração - junto de nossos serviços"
          >
            <b-card-text>
                Com autonomia administrativa e gestão orçamental, em tecnologia de ponta.
            </b-card-text>
          </b-card>
          
          <div class="row">
              <div class="form-group col-12 d-flex content-justify-end">
                <h4 class="text-light">Contacto</h4>
              </div>
              <div class="form-group col-12 d-flex content-justify-end">
                 <span class="text-secondary">
                    <p>
                        Chegue mais próximo de nós, envie-nos um E-mail.
                    </p>
                 </span>
              </div>

                 <div class="form-group col-sm-12 col-md-6">

                    <form-contacto></form-contacto>

                 </div>

                 <div class="form-group col-sm-12 col-md-6">

                      <form-contacto-right imagem-telefone="../img/telefone.webp"></form-contacto-right>

                 </div>
              
          </div>

          
      </div>
    
    </div>
@endsection