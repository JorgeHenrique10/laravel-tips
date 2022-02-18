<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Usuário</title>
</head>
<body>
    <div class="container-fluid col-9 mt-5">
        <h1>Usuário Detalhe</h1>
        <div>
            <div class="mb-3">
                <label for="id" class="form-label">Id</label>
                <input type="text" class="form-control" id="id" placeholder="Id" value="{{$user->id}}" disabled>
            </div>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" placeholder="Nome" value="{{$user->name}}" disabled>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email" value="{{$user->email}}" disabled>
            </div>
            <div class="mb-3">
                <label for="criado" class="form-label">Criado em</label>
                <input type="criado" class="form-control" id="criado" placeholder="Criado" value="{{date('d/m/Y H:i:s', strtotime($user->created_at))}}" disabled>
            </div>

        </div>
    </div>
</body>
</html>
