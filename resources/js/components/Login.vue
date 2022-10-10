<template>
    <div :class="tamanho">
        <div class="col-md-12 text-center">
            <h1><b-icon-lock class="mb-2 lg" variant="light"></b-icon-lock></h1>
        </div>
        <div class="card bg-dark text-light" style="opacity:.6">
            <div class="card-header">{{ titulo }}</div>

            <div class="card-body">
                <slot></slot>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
       props:['titulo', 'tamanho'],
    }
</script>