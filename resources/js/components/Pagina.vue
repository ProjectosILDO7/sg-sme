<template>
    <div><br>
            <div class="row justify-content-center mt-4">
                <div :class="definirTamanho">
                    <div class="card">
                        <div class="card-header">{{ titulo }}</div>

                        <div class="card-body">
                            <slot></slot>
                        </div>

                    </div>
                </div>
            </div>
    </div>
</template>

<script>
    export default {
        props:['tamanho', 'titulo'],
        computed:{
            definirTamanho:function(){
                if(this.tamanho >=12){
                    return "col-md-12"
                }
                if(this.tamanho <=2){
                    return "col-md-2"
                }
                if((this.tamanho % 2)==0){
                    return "col-md-"+this.tamanho
                    console.log(this.tamanho)
                }else{
                    return "col-md-"+(parseInt(this.tamanho) + 1)
                    console.log(this.tamanho)
                }
            }
        }
    }
</script>
