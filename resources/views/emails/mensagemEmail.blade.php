@component('mail::message')
# Introdução

Corpo da sua mensagem.

@component('mail::button', ['url' => ''])
Enviar
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
