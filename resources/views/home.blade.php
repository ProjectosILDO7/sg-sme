@extends('layouts.app')

@section('content')
<div class="container">

    <pagina tamanho="12" class="mt-2" titulo="Painel admin">

        <div class="row">
          <div class="form-group col-sm-12 col-md-6">
              <div class="card bg-primary mt-2">
                <div class="card-header text-light">
                  <div class="row">
                      <div class="form-group col-sm-12 col-md-6 small">
                        <i class="fa fa-users"></i> Trabalhadores
                      </div>
                      <div class="form-group col-sm-12 col-md-6 small text-end">
                        <i class="fa fa-pie-chart"></i>
                      </div>
                  </div>
                </div>
                  <div class="card-body p-3">
                    <div class="row">
                        <div class="form-group col-sm-12 col-md-6 text-center">
                           <h1>
                              <i class="fa fa-users"></i>
                           </h1>
                        </div>
                        <div class="form-group col-sm-12 col-md-6 text-center">
                           <h1>
                              59
                           </h1>
                        </div>
                        <hr>
                        <div class="form-inline col-sm-12 col-md-12 text-center">
                           <span class="text-light small">trabalhadores residentes : 
                                  <span class="text-bold">41</span>
                           </span>

                           <span class="text-light small">trabalhadores residentes : 
                                  <span class="text-bold">41</span>
                           </span>
                        </div>
                    </div>
                </div>
              </div>
          </div>

          <div class="form-group col-sm-12 col-md-6 mt-2">
            <div class="card bg-success">
              <div class="card-header text-light">
                <div class="row">
                    <div class="form-group col-sm-12 col-md-6 small">
                      <i class="fa fa-users"></i> Cidadão estrangeiros
                    </div>
                    <div class="form-group col-sm-12 col-md-6 small text-end">
                      <i class="fa fa-pie-chart"></i>
                    </div>
                </div>
              </div>
                <div class="card-body p-3">
                  <div class="row">
                      <div class="form-group col-sm-12 col-md-6 text-center">
                         <h1>
                            <i class="fa fa-users"></i>
                         </h1>
                      </div>
                      <div class="form-group col-sm-12 col-md-6 text-center">
                         <h1>
                            59
                         </h1>
                      </div>
                      <hr>
                      <div class="form-inline col-sm-12 col-md-12 text-center">
                         <span class="text-light small">Visto temporário : 
                                <span class="text-bold">41</span>
                         </span>

                         <span class="text-light small">Visto Previlegiado : 
                                <span class="text-bold">41</span>
                         </span>
                      </div>
                  </div>
              </div>
            </div>
          </div>  
        </div> 

        {{-- Graficos --}}
        <div class="row mt-2">
           <div class="form-group col-sm-12 col-md-6 mt-2">
                <div class="card chart-container">
                  <canvas id="lineGrafico"></canvas>
                </div>
           </div>

           <div class="form-group col-sm-12 col-md-6 mt-2">
              <div class="card chart-container">
                <canvas id="barraGrafico"></canvas>
              </div>
           </div>

        </div>

        
    </pagina>

    

</div>
@endsection
