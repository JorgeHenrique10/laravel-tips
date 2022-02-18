@extends('site.master.home')
@section('content')
<form action="{{route('produtos.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="titulo" class="form-label">Título:</label>
        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
      </div>
      <div class="mb-3">
        <label for="imagens" class="form-label">Imagens:</label>
        <input class="form-control" type="file" id="imagens" name ='imagens[]' multiple>
      </div>
      <input class="btn btn-primary" type="submit" value="Enviar">
</form>
@endsection
