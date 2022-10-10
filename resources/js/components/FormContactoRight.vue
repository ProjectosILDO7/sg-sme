<template>
    <div class="card">
        <div class="card-header">
            <b-icon-telephone-forward></b-icon-telephone-forward> Contacto
        </div>

            <div class="card-body">
                <div class="row">
                    <div class="form-group col-12 text-center">
                        <p>
                            <img :src="imagemTelefone" width="30%" height="30%" alt="" srcset="">
                        </p>
                    </div>
                    <div class="form-group col-12">
                        <ul class="text-secondary">
                            <li>Contacto da Instituição: <span class="text-dark">000-000-000</span></li>
                            <li>Contacto de ajuda (Desenvolvedor): <span class="text-dark">921-923-232</span></li>
                        </ul>
                    </div>
                    <div class="form-inline col-12 text-center mb-2">

                            <b-button variant="primary" size="sm" class="mr-2">
                                 <b-icon-facebook></b-icon-facebook>
                            </b-button>

                            <b-button variant="success" size="sm" class="mr-2">
                                 <b-icon-whatsapp></b-icon-whatsapp>
                            </b-button>

                            <b-button variant="danger" size="sm" class="mr-2">
                                 <b-icon-youtube></b-icon-youtube>
                            </b-button>

                    </div>
                </div>
                
            </div>
    </div>
</template>

<script>
    export default {
        props:['imagemTelefone']
       
    }
</script>
