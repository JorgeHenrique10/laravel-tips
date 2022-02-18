@component('mail::message')
<h1>Parabéns!</h1>
<h2>Seja bem vindo! {{$user->nome}} o seu emai: {{$user->email}} foi sorteado!</h2>

@component('mail::button', [ 'url' => 'https://google.com', ])
Ir para Página
@endcomponent

@endcomponent
