<template>

    <div>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark text-light shadow-sm text-light fixed-top"> 
            <div class="container-fluid">
                <a class="navbar-brand" :href="url">
                    <!-- {{ titulo }} -->
                    <b-img :src="titulo" width="50" height="50" fluid ></b-img>SG-SME
                </a>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav justify-content-center">
                        <li class="nav-item">
                            <!-- nav-link active -->
                            <a class="nav-link active" prevent aria-current="page" :href="url"><b-icon-house></b-icon-house> Ínicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" prevent :href="urlsobre"><b-icon-info-circle></b-icon-info-circle> Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" :href="urlcontacto"> <b-icon-phone></b-icon-phone> Contacto</a>
                        </li>
                    </ul>
                    
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item dropdown" v-if="usuarioadmin==0">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <b-icon-server></b-icon-server> Cadastros
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" :href="pgtrabalhadores"><b-icon-people-fill></b-icon-people-fill> Trabalhadores</a></li>
                                <li><a class="dropdown-item" :href="pgEstrangeiros"><b-icon-people></b-icon-people> Cidadão Estrangeiros</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" :href="printDoc"><b-icon-printer></b-icon-printer> Imprimir doc.</a></li>
                            </ul>
                        </li>

                        <slot></slot>

                    </ul>

                    

                </div>
                <!-- Left Side Of Navbar {{ __('Toggle navigation') }} -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" :aria-label="toggleNavegatio">
                    <span class="navbar-toggler-icon"></span>
                </button>

            </div>
        </nav>
    </div>
    
</template>

<script>
    export default {
        props:['titulo', 'url', 'urlsobre', 'urlcontacto', 'usuarioadmin', 'pgtrabalhadores','pgEstrangeiros', 'toggleNavegatio', 'printDoc'],
        data(){
            return { }
        },
        methods:{},

        computed:{},
    }
</script>
