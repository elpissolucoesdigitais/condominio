@component('mail::message')
# Novo contato

Nome: {{$data['name']}}

E-mail: {{$data['email']}}

Mensagem: {{$data['message']}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
