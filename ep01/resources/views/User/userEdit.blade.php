<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Usuário</title>
</head>
<body>
    <div class="container-fluid col-9 mt-5">
        <h1>Editar Usuário</h1>
        <div>
            <form action="{{ route('users.update', ['user' => $user]) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="id" class="form-label">Id</label>
                    <input type="text" class="form-control" name="id" placeholder="Id" disabled value="{{$user->id}}">
                </div>
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" name="name" placeholder="Nome" value="{{$user->name}}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email" value="{{$user->email}}">
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" class="form-control" name="password" placeholder="Senha">
                </div>
                <input type="submit" class='btn btn-primary' value="Cadastrar Usuario">
            </form>

        </div>
    </div>
</body>
</html>
