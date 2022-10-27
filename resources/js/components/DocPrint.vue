<template>
    <div>
        <div class="row mb-2">
                <div class="form-group col-sm-12 col-md-6">
                    <b-button class="btn btn-sm" @click="pdf" variant="danger" title="PDF">
                        <b-icon-file-pdf></b-icon-file-pdf> PDF
                    </b-button>

                    <b-button class="btn btn-sm" @click="excel" variant="success" title="EXCEL">
                        <b-icon-file-excel></b-icon-file-excel> EXCEL
                    </b-button>
                </div>
                <div class="form-group col-sm-12 col-md-6 text-md-end mt-2">
                    <span class="text-secondary"><b-icon-printer></b-icon-printer> Formato: <b>{{ docFormato }}</b> </span>
                </div>

        </div>
<hr>
<!-- Doc PDF -->
            <div class="row text-sm-center text-md-center" v-if="docpdf">
                
                <div class="form-group col-sm-12 col-md-3 mb-2">
                    <a href="/printDocTrabResidente" target="_blank">
                        <b-card
                            border-variant="danger"
                            header="Trab. residente"
                            header-border-variant="danger"
                            header-text-variant="danger"
                            align="center"
                        >
                            <b-card-text>
                                <i class="fa fa-file-pdf text-danger"></i>
                            </b-card-text>
                        </b-card>

                    </a>
                </div>
                <div class="form-group col-sm-12 col-md-3 mb-2">
                    <a href="/printDocTrabNaoResidente" target="_blank">
                        <b-card
                            border-variant="danger"
                            header="Trab. não residente"
                            header-border-variant="danger"
                            header-text-variant="danger"
                            align="center"
                        >
                            <b-card-text>
                                <i class="fa fa-file-pdf text-danger"></i>
                            </b-card-text>
                        </b-card>

                    </a>
                </div>
                <div class="form-group col-sm-12 col-md-3 mb-2">
                    <a href="/vistoPrevilegiado" target="_blank">
                        <b-card
                            border-variant="danger"
                            header="Visto previlegiado"
                            header-border-variant="danger"
                            header-text-variant="danger"
                            align="center"
                        >
                            <b-card-text>
                                <i class="fa fa-file-pdf text-danger"></i>
                            </b-card-text>
                        </b-card>

                    </a>
                </div>

                <div class="form-group col-sm-12 col-md-3 mb-2">
                    <a href="/vistoNaoPrevilegiado" target="_blank">
                        <b-card
                            border-variant="danger"
                            header="Visto temporário"
                            header-border-variant="danger"
                            header-text-variant="danger"
                            align="center"
                        >
                            <b-card-text>
                                <i class="fa fa-file-pdf text-danger"></i>
                            </b-card-text>
                        </b-card>

                    </a>
                </div>
            </div>

            <!-- Doc EXCEL -->

            <div class="row text-sm-center text-md-center" v-if="docexcel">
                
                <div class="form-group col-sm-12 col-md-3 mb-2">
                    <a href="/listaTrabalhadoresExcel">
                        <b-card
                            border-variant="success"
                            header="Trab. residente"
                            header-border-variant="success"
                            header-text-variant="success"
                            align="center"
                        >
                            <b-card-text>
                                <i class="fa fa-file-excel text-success"></i>
                            </b-card-text>
                        </b-card>

                    </a>
                </div>
                <div class="form-group col-sm-12 col-md-3 mb-2">
                    <a href="/listaTrabalhadoresNaoResidenteExcel">
                        <b-card
                            border-variant="success"
                            header="Trab. não residente"
                            header-border-variant="success"
                            header-text-variant="success"
                            align="center"
                        >
                            <b-card-text>
                                <i class="fa fa-file-excel text-success"></i>
                            </b-card-text>
                        </b-card>

                    </a>
                </div>
                <div class="form-group col-sm-12 col-md-3 mb-2">
                    <a href="/listaVistoPrevilegiadoExcel">
                        <b-card
                            border-variant="success"
                            header="Visto previlegiado"
                            header-border-variant="success"
                            header-text-variant="success"
                            align="center"
                        >
                            <b-card-text>
                                <i class="fa fa-file-excel text-success"></i>
                            </b-card-text>
                        </b-card>

                    </a>
                </div>

                <div class="form-group col-sm-12 col-md-3 mb-2">
                    <a href="/listaVistoNaoPrevilegiadoExcel">
                        <b-card
                            border-variant="success"
                            header="Visto temporário"
                            header-border-variant="success"
                            header-text-variant="success"
                            align="center"
                        >
                            <b-card-text>
                                <i class="fa fa-file-excel text-success"></i>
                            </b-card-text>
                        </b-card>

                    </a>
                </div>
            </div>
        </div>
</template>

<script>
    export default {
       props:['linkTrabalhadores'],
       data() {
         return{
            docpdf:false,
            docexcel:false,
            docFormato:"",
         }
       },
       methods:{
            pdf(){
                this.docpdf=true;
                this.docexcel=false;
                this.docFormato="PDF";
            },
            excel(){
                this.docexcel=true;
                this.docpdf=false;
                this.docFormato="EXCEL";
            },
       },

       created(){
        this.docpdf=true;
        this.docFormato="PDF";
       }
    }
</script>