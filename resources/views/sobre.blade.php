@extends('layouts.app')

@section('content')
<div class="container">

    <div>
      <br><br>
        <b-card-group deck>
          <b-card 
            overlay
            img-src="../img/sobreContanto.jpg" 
            {{-- img-src="https://picsum.photos/900/250/?image=3"  --}}
            img-alt="Card Image"
            text-variant="white"
            title="Sobre"
            sub-title="Serviços de Migração - junto de novas tecnologias"
          >
            <b-card-text>
                Com autonomia administrativa e gestão orçamental, em tecnologia de ponta.
            </b-card-text>
          </b-card>
          
          <div class="row">
              <div class="form-group col-12 text-right d-flex content-justify-end">
                <h4 class="text-light pull-right">Sobre</h4>
              </div>
              <div class="form-group col-12 d-flex content-justify-end">
                 <span class="text-secondary">
                    <p>
                        Um sistema de gestão de recursos Humanos, desenvolvido para o asseguramento das informações inerentes aos Serviços de Migração e Estrangeira na Instituição. 
                    </p>
                 </span>
              </div>

              <div class="form-group col-12">
                <b-card
                img-src="../img/sme.png"
                img-alt="Image"
                img-left
                tag="article"
                style="max-width: 100rem"
                class="mb-2"                   
            >
                <b-card-text class="col-12">
                  <div class="d-flex justify-content-between small">O Serviço de Migração e Estrangeiros, abreviadamente designado por SME, é o órgão executivo central do Ministério do Interior, com autonomia administrativa e gestão orçamental, ao qual compete executar as politicas e medidas legislativas e regulamentares relacionadas com a entrada, transito, saída e o controlo da permanência e das actividades de cidadãos estrangeiros em território nacional, bem como estudar, promover, coordenar e executar as medidas e acções relacionadas com aquelas actividades.
                  Enquanto órgão de polícia criminal, o SME intervém no processo, nos termos da Lei Processual Penal, sob a direcção da autoridade judiciara competente.</div><a class="small" href="https://www.sme.gov.ao/sme/">Mais detalhes no site oficial</a>
                </b-card-text>
            </b-card>
              </div>
          </div>

          
      </div>
    
    </div>
@endsection