@extends('site.layout.master.master')

@section('content')

<div class="container py-5">
    <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
        <h1 class="display-4"> Contato</h1>
        <hr class="my-4">
        <p>Favor entrar em contato preenchendo o formulario abaixo:</p>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
</div>

@endsection
