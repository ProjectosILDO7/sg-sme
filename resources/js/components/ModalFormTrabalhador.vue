<template>
    
</template>

<script>
    export default {

       props:['titulobotao', 'topotable', 'tituloModal', 'options', 'urlBase'],

       data(){
        return {
            items:[],
            form:{},
            totalErros:0,
            erros: {},
            alert:'',     
        }
       },
       methods:{
        listaTable(){
                this.$http.get(this.urlBase).then(response=>{
                    console.log(response.data)
                    this.items=response.data
                }).catch(errors=>{
                    console.log(errors);
                })
            },

        

            
       },

       created(){
            this.listaTable()
       },

       

    }
</script>