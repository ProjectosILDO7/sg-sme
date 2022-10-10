@extends('layouts.app')

@section('content')
<div class="container">

    <pagina tamanho="12" titulo="Trabalhadores">

         <tabela-lista
         url-base="/lista"
         edit-url="/editeTrabalhador/" 
         id-Modal="modal-1"
         titulo-Modal="Adicione novo trabalhador"
         nome-Add-Button='Novo trabalhador'
         :options="[
            {value:null, text:'Selecione o estado da residência', disabled:true, selected:true},
            {value:'Residente', text:'Residente'},
            {value:'Não residente', text:'Não residente'},
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
                key:'residente', 
                label:'Status de residência'
            },
            { 
                key:'actions', 
                label:'Acções'
            }
         ]"
         >
        </tabela-lista>
{{-- fim de lista em tabela --}}

{{-- modal form --}}
        <modal-form-trabalhador 
        url-base='/lista'
        titulo-Modal="Novo trabalhador"
        :options="[
            {value:null, text:'Selecione o estado da residência', disabled:true, selected:true},
            {value:'Residente', text:'Residente'},
            {value:'Não residente', text:'Não residente'},
            ]"
        >
        </modal-form-trabalhador>
{{-- fim modal form --}}

    </pagina>
    
</div>
@endsection