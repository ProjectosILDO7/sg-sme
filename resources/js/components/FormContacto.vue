<template>
    <div class="row mt-0">
        <div class="form-group col-sm-12 col-md-12">
                <label for="nome" class="text-secondary">Nome completo:</label>
                <input type="text" class="form-control form-control-sm" name="nome" id="nome" placeholder="Nome completo">
        </div>

        <div class="form-group col-sm-12 col-md-12">
                <label for="email" class="text-secondary">E-mail:</label>
                <input type="email" class="form-control form-control-sm" name="email" id="email" placeholder="E-mail">
        </div>

        <div class="form-group col-sm-12 col-md-12">
            <label for="conteudo" class="text-secondary">Mensagem:</label>
            <textarea cols="12" rows="4" class="form-control form-control-sm" name="conteudo" id="conteudo" placeholder="Escreva aqui sua mensagem...!"></textarea>
        </div>

        <div class="form-inline col-sm-12 col-md-12 mt-2">
            <button type="submit" class="btn btn-sm btn-success" name="enviar">
                <b-icon-messenger></b-icon-messenger> Enviar mensagem
            </button>
        </div>
    </div>
</template>

<script>
    export default {
       
    }
</script>