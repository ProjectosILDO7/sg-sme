@extends('layouts.app')

@section('content')
<div class="container">

    <pagina tamanho="12" titulo="Cidadão estrangeiros">

         <tabela-lista
         url-base="/lista"
         edit-url="/editeTrabalhador" 
         id-Modal="modal-1"
         titulo-Modal="Add estrangeiros"
         nome-Add-Button='Novo Estrangeiros'
         :options="[
            {value:null, text:'Selecione o estado dd visto', disabled:true, selected:true},
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
        <modal-form-estrangeiros 
        url-base='/lista'
        titulo-Modal="Novo estrangeiros"
        :options="[
            {value:null, text:'Selecione o estado da residência', disabled:true, selected:true},
            {value:'Residente', text:'Residente'},
            {value:'Não residente', text:'Não residente'},
            ]"
        >
        </modal-form-estrangeiros>
{{-- fim modal form --}}

    </pagina>
    
</div>
@endsection