<template>
    <div>
        <div class="row">
            
            <div class="form-group col-sm-12 col-md-7 mt-2">
               <label class="text-secondary" for="searsh">Pesquisar:</label>
               <b-form-input size="sm" id="search" v-model="filter" type="search" placeholder="Faça busca de trabalhador"></b-form-input>
            </div>

            <div class="form-group col-sm-2 col-md-2 mt-2">
               <label class="text-secondary" for="search2">Limpar:</label>
               <b-button size="sm" @click="limparFiltro" variant="danger">
                  <b-icon-trash-fill></b-icon-trash-fill> Limpar o filtro
               </b-button>
            </div>

            <!-- Abrir botão modal -->
            <div class="form-group col-sm-12 col-md-3 mt-1">
                <label class="text-secondary" for="modal-1"><b-icon-person-plus></b-icon-person-plus> Novo Estrangeiro</label>
                <b-button size="sm" variant="primary" @click="addUser()" class="btn btn-sm mt-1" v-b-modal.modal-1><b-icon-person-plus></b-icon-person-plus> Novo Estrangeiro</b-button>
            </div>
            <!-- Fim do botão  -->
         </div>

         <hr>

         <!-- Conteudo da lista table -->

            <b-table 
            responsive 
            striped 
            :filter="filter" 
            :sort-by.sync="sortBy" 
            :items="items" 
            :fields="fields" 
            hover 
            small 
            :per-page="perPage" 
            :current-page="currentPage" 
            id="my-table"
            >
               <template v-slot:cell(actions)="data">
                  <b-button size="sm" class="mr-2" variant="outline-success" v-b-modal.modal-1 @click="editar(data.item.id)">
                     <b-icon-pencil-fill></b-icon-pencil-fill>
                  </b-button>

                  <b-button size="sm" class="mr-2" variant="outline-secondary" v-b-modal.modal-3 @click="detalhes(data.item.id)">
                     <b-icon-info-circle></b-icon-info-circle>
                  </b-button>

                  <b-button size="sm" class="mr-2" variant="outline-danger" v-b-modal.modal-4 @click="apagar(data.item.id)">
                     <b-icon-trash-fill></b-icon-trash-fill>
                  </b-button>         
               </template>

            </b-table>
         <!-- Fim do conteudo da table list -->

         <!-- paginação -->
         <div class="row">
            <div class="form-group col-sm-12 col-md-6">
                <b-pagination v-model="currentPage" :total-rows="rows" :per-page="perPage" aria-controls="my-table"></b-pagination>
            </div>
            <div class="form-group col-sm-12 col-md-6 d-flex justify-content-end">
                <label class="text-secondary" for="pagina">Página activa  - <span class="text-success font-weight-bold"> {{ currentPage }} </span></label>
            </div>
            
         </div>
         
        <!-- Fim da paginação -->
        
        <!-- modal detalhes -->
        <b-modal id="modal-3" size="md">
            <template v-slot:modal-header="{ close }">
                <h6><b-icon-info-circle-fill></b-icon-info-circle-fill> Detalhes do Estrangeiro</h6>
                <b-button size="sm" variant="dark" @click="close()">
                    <b-icon-x-circle-fill></b-icon-x-circle-fill>
                </b-button>
            </template>
                <b-card
                    img-src="../img/user.png"
                    img-alt="Image"
                    img-left
                    tag="article"
                    style="max-width: 50rem"
                    class="mb-2"                   
                >
                    <b-card-text class="col-12">
                            <div class="row small">
                                <div class="form-group col-12">
                                    <label>Nome: <b>{{ detalhesUser.nome }}</b> </label>
                                </div>
                                <div class="form-group col-12">
                                    <label>Nacionalidade: <b>{{ detalhesUser.nacionalidade }}</b> </label>
                                </div>
                                <div class="form-group col-12">
                                    <label>Nome do Pai: <b>{{ detalhesUser.nome_pai }}</b> </label>
                                </div>
                                <div class="form-group col-12">
                                    <label>Nome da Mâe: <b>{{ detalhesUser.nome_mae }}</b> </label>
                                </div>
                                <div class="form-group col-12">
                                    <label>Nº do registo: <b>{{ detalhesUser.num_registo }}</b> </label>
                                </div>
                                <div class="form-group col-12">
                                    <label>Data de emissão: <b>{{ detalhesUser.data_emissao }}</b> </label>
                                </div>
                                <div class="form-group col-12">
                                    <label>Data de caducidade: <b>{{ detalhesUser.data_caducidade }}</b> </label>
                                </div>
                                <div class="form-group col-12">
                                    <label>Data do cadastro: <b>{{ detalhesUser.created_at }}</b> </label>
                                </div>
                            </div>
                    </b-card-text>
                </b-card>

            <template v-slot:modal-footer="{ cancel }">
                <b-button size="sm" @click="cancel()">
                    <b-icon-x-circle-fill></b-icon-x-circle-fill> Fechar
                </b-button>
            </template>
        </b-modal>

        <!-- modal de confirmação -->
        <b-modal id="modal-4" header-text-variant="light" header-bg-variant="danger">
            <template v-slot:modal-header="{ close }">
                <h6>Desejas apagar ? </h6>
                <b-button size="sm" variant="dark" @click="close()">
                    <b-icon-x-circle-fill></b-icon-x-circle-fill>
                </b-button>
            </template>
            <b-alert v-if="alert==true"
                    variant="success" 
                    :show="dismissCountDown"
                    fade
                    @dismissed="dismissCountDown=0"
                    @dismiss-count-down="countDownChanged">  As Informações foram apagadas com sucesso!</b-alert>
            <b-alert v-if="alert==500"
                    variant="danger" 
                    :show="dismissCountDown"
                    fade
                    @dismissed="dismissCountDown=0"
                    @dismiss-count-down="countDownChanged">  Esses dados não foram encotrados no sistema, presume-se já terem sido apagados!</b-alert>
            <b-card class="small">
                <span>Tens a certeza que pretendes apagar as informações de: <b>{{ detalhesUser.nome }} ?</b></span>
            </b-card>

            <template v-slot:modal-footer="{ cancel }">
                
                <b-button size="sm" variant="outline-success" @click="cancel()">
                    <b-icon-x-circle-fill></b-icon-x-circle-fill> Cancelar
                </b-button>

                <b-button size="sm" variant="outline-danger" @click="apagarUser(detalhesUser.id)">
                    <b-icon-trash-fill></b-icon-trash-fill> Sim Apagar
                </b-button>
            
            </template>
        </b-modal>

         <!-- Componente modal -->
         <b-modal id="modal-1" size="md" :title="tituloModal" header-bg-variant="dark">
               <template v-slot:modal-header="{close}">
                     <h6 class="text-light"><b-icon-pencil-fill v-if="btnSave=='Editar'"></b-icon-pencil-fill> <b-icon-person-plus-fill v-if="btnSave=='gravar'"></b-icon-person-plus-fill> {{ tituloModal }}</h6>
                     <b-button size="sm" @click="close()">
                         <b-icon-x-circle-fill></b-icon-x-circle-fill>
                     </b-button>
                     
               </template>

               <!-- conteudo -->
                <b-form>
                    <!-- alerta de sucesso -->
                    <b-alert
                        variant="success" 
                        :show="dismissCountDown"
                        fade
                        @dismissed="dismissCountDown=0"
                        @dismiss-count-down="countDownChanged"
                    >  
                    Informações salvas com sucesso!
                    </b-alert>
                    <!-- fim de alerta de sucesso -->
                    <b-row>

                        <b-col sm="12" md="6">
                            <b-form-group label="Nome completo:" label-for="nome">
                                <b-form-input :state="validation"  size="sm" id="nome" v-model="form.nome" placeholder="Nome completo" aria-describedby="input-live-help input-live-feedback"></b-form-input>
                                <b-form-invalid-feedback id="input-live-feedback" class="small">
                                    {{ erros.nome }}
                                </b-form-invalid-feedback>
                            </b-form-group>
                        </b-col>

                        <b-col sm="12" md="6">
                            <b-form-group label="Nacionalidade:" label-for="nacionalidade">
                                <b-form-input :state="validation" size="sm" id="nacionalidade" v-model="form.nacionalidade" placeholder="Informa uma nacionalidade"></b-form-input>
                                <b-form-invalid-feedback id="input-live-feedback" class="small">
                                    {{ erros.nacionalidade }}
                                </b-form-invalid-feedback>
                            </b-form-group>
                        </b-col>
                        <b-col sm="12" md="6">
                            <b-form-group label="Nome do Pai:" label-for="pai">
                                <b-form-input :state="validation" size="sm" id="pai" v-model="form.nome_pai" placeholder="Informa o nome do Pai"></b-form-input>
                                <b-form-invalid-feedback id="input-live-feedback" class="small">
                                    {{ erros.nome_pai }}
                                </b-form-invalid-feedback>
                            </b-form-group>
                        </b-col>
                        <b-col sm="12" md="6">
                            <b-form-group label="Nome da Mâe:" label-for="mae">
                                <b-form-input :state="validation" size="sm" id="mae" v-model="form.nome_mae" placeholder="Informa uma nacionalidade"></b-form-input>
                                <b-form-invalid-feedback id="input-live-feedback" class="small">
                                    {{ erros.nome_mae }}
                                </b-form-invalid-feedback>
                            </b-form-group>
                        </b-col>

                        <b-col sm="12" md="6">
                            <b-form-group label="Nº do passaporte:" label-for="num_passporte">
                                <b-form-input :state="validation" size="sm" id="num_passporte" v-model="form.num_passporte" placeholder="Nº do passaporte"></b-form-input>
                                <b-form-invalid-feedback id="input-live-feedback" class="small">
                                    {{ erros.num_passporte }}
                                </b-form-invalid-feedback>
                            </b-form-group>
                        </b-col>

                        <b-col sm="12" md="6">
                            <b-form-group label="Nº do registo:" label-for="num_registo">
                                <b-form-input :state="validation" size="sm" id="num_registo" v-model="form.num_registo" placeholder="Nº do registo"></b-form-input>
                                <b-form-invalid-feedback id="input-live-feedback" class="small">
                                    {{ erros.num_registo }}
                                </b-form-invalid-feedback>
                            </b-form-group>
                        </b-col>

                        <b-col sm="12" md="6">
                            <b-form-group label="Data de emissao:" label-for="data_emissao">
                                <b-form-datepicker :state="validation" size="sm" id="data_emissao" v-model="form.data_emissao" placeholder="Data de emissão"></b-form-datepicker>
                                <b-form-invalid-feedback id="input-live-feedback" class="small">
                                    {{ erros.data_emissao }}
                                </b-form-invalid-feedback>
                            </b-form-group>
                        </b-col>

                        <b-col sm="12" md="6">
                            <b-form-group label="Data de caducidade:" label-for="data_caducidade">
                                <b-form-datepicker :state="validation" size="sm" id="data_caducidade" v-model="form.data_caducidade" placeholder="Data de caducidade"></b-form-datepicker>
                                <b-form-invalid-feedback id="input-live-feedback" class="small">
                                    {{ erros.data_caducidade }}
                                </b-form-invalid-feedback>
                            </b-form-group>
                        </b-col>

                        <b-col sm="12" md="12">
                            <b-form-group label="Local de residência:" label-for="local_residente">
                                <b-form-input :state="validation" size="sm" id="local_residente" v-model="form.local_residente" placeholder="Local de residência"></b-form-input>
                                <b-form-invalid-feedback id="input-live-feedback" class="small">
                                    {{ erros.local_residente }}
                                </b-form-invalid-feedback>
                            </b-form-group>
                        </b-col>

                        <b-col sm="12" md="12">
                            <b-form-group label="Visto:" label-for="visto">
                                <b-form-select :state="validation" class="form-control form-control-sm" :options="options" size="sm" id="visto" v-model="form.visto"></b-form-select>
                                <b-form-invalid-feedback id="input-live-feedback" class="small">
                                    {{ erros.visto }}
                                </b-form-invalid-feedback>
                            </b-form-group>
                        </b-col>

                    </b-row>
                </b-form>
                <!-- fim do conteudo -->
              

               <template v-slot:modal-footer="{ cancel }">
                  <b-button size="sm" variant="outline-secondary" @click="cancel()">
                        <b-icon-arrow-down-left-circle></b-icon-arrow-down-left-circle> Cancelar
                  </b-button>
                  <b-button v-if="btnSave=='gravar'" size="sm" variant="outline-success" @click="gravar">
                        <b-icon-save2-fill></b-icon-save2-fill> {{ btnSave }}
                  </b-button>
                  <b-button v-if="btnSave=='Editar'" size="sm" variant="outline-success" @click="salvar">
                        <b-icon-save2-fill></b-icon-save2-fill> Salvar a alteração
                  </b-button>
               </template>
            </b-modal>
         <!-- Fim do componente modal -->

    </div>
</template>

<script>
    export default {
       props:['nomeAddButton', 'search', 'options', 'idModal', 'urlBase', 'fields', 'editUrl', 'tituloModal'],
       data(){
            return {
                perPage: 5,
                currentPage: 1,
                selected:null,
                filter:'',
                sortBy:'',
                items:[],
                form:{},
                totalErros:0,
                erros: {},
                alert:'', 
                btnSave:'',
                detalhesUser:'',
                dismissSecs: 5,
                dismissCountDown: 0
            }
       },

       methods:{

        countDownChanged(dismissCountDown) {
                this.dismissCountDown = dismissCountDown
            },
         showAlert() {
                this.dismissCountDown = this.dismissSecs
            },

         lista(){       
            this.$http.get(this.urlBase).then(response=>{
               console.log(response);
               this.items = response.data
            }).catch(errors=>{
               console.log(errors)
            })
         },

         addUser(){
            this.btnSave='gravar';
            //this.form="";
            this.tituloModal='Adicione novo estrangeiro';
            console.log(this.btnSave);
         },

        //  Gravar no banco de dados
         gravar(){
            this.$http.post('adicionarEstrangeiro', this.form).then(response=>{
                console.log(response.data)
                this.lista()
                this.form='';
                if(response.data=='success'){
                    this.showAlert()
                }
                //this.showAlert()
                //this.alert = response.data;
                // this.$bvToast.toast('Informações salvas com sucesso', {
                //     title:'Sucesso',
                //     variant:'success',
                //     solid:true,
                //     delay:true
                // })  
            }).catch(errors=>{
                console.log(errors);
                this.erros = errors.response.data.errors
                this.totalErros = this.erros.length;
                console.log(this.erros);
            })
        },

        // Fim da função gravar 

         limparFiltro(){
            this.filter='';
         },

         editar(id){
            //console.log(id);
            this.btnSave = 'Editar'
            this.$http.get(this.editUrl+'/'+id).then(response=>{
                this.form=response.data
                this.tituloModal = 'Alterar informações do estrangeiro'
            }).catch(errors=>{
               console.log(errors)
            })
         },

         salvar(){
            console.log(this.form.id)

            this.$http.put('updateEstrangeiro/'+this.form.id, this.form).then(response=>{
               console.log(response)
               this.lista();
               this.form='';
               if(response.data=='success'){
                    this.showAlert()
                }
               //this.alert=response.data
            }).catch(errors=>{
               console.log(errors)
            })
         },
         detalhes(id){
            this.$http.get('detalhesEstrangeiro/'+id).then(response=>{
                this.detalhesUser=response.data
            }).catch(errors=>{
                console.log(errors)
            })
         },

         apagar(id){
            this.$http.get('detalhesEstrangeiro/'+id).then(response=>{
                this.detalhesUser=response.data
            }).catch(errors=>{
                console.log(errors)
            })
         },

         apagarUser(id){
            this.$http.get('apagarEstrangeiro/'+id).then(response=>{
                console.log(response.data)
                this.lista()
                this.alert=response.data
                if(response.data==true){
                    this.showAlert()
                }
            }).catch(errors=>{
                console.log(errors.response.status)
                this.alert=errors.response.status
                if(errors.response.status==500){
                    this.showAlert()
                }
            })
         },


       },

       

       created(){
         this.lista()
       },

       computed: {
         rows() {
         return this.items.length
        },

        validation() {
            return this.totalErros == 0 ? null: false;
        }

    }
    }
</script>