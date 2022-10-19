@extends('layouts.app')

@section('content')
<div class="container">

    <pagina tamanho="12" titulo="Estrangeiros">

         <tabela-lista-estrangeiros
         url-base="/listaEstrangeiro"
         edit-url="/editeEstrangeiro" 
         id-Modal="modal-1"
         titulo-Modal="Adicione novo Estrangeiro"
         nome-Add-Button='Novo Estrangeiro'
         :options="[
            {value:null, text:'Selecione o estado do visto', disabled:true, selected:true},
            {value:'Previlegiado', text:'Previlegiado'},
            {value:'Temporário', text:'Permanência temporária'},
        ]"
         :fields="[
            { 
                key:'id', 
                label:'Cod.'
            },
            { 
                key:'nome', 
                label:'Nome completo',
            },
            {
                key:'nacionalidade', 
                label:'Nacionalidade'
            },
            { 
                key:'num_passporte', 
                label:'Nº do passaporte'
            },
            { 
                key:'visto', 
                label:'Tipo de visto'
            },
            { 
                key:'actions', 
                label:'Acções'
            }
         ]"
         >
        </tabela-lista-estrangeiros>
{{-- fim de lista em tabela --}}

{{-- modal form --}}
        <modal-form-trabalhador 
        url-base='/lista'
        titulo-Modal="Novo Estrangeiro"
        >
        </modal-form-trabalhador>
{{-- fim modal form --}}

    </pagina>
    
</div>
@endsection