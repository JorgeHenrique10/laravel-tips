<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Listagem de usuários</title>
</head>
<body>
    <div class="container-fluid col-9 mt-5">
        <div class="mb-10">
            <a class="btn btn-success mb-10" href="{{route('users.create')}}"> Add Usuários</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <a href="{{route('users.show',['user' =>$user->id])}}">Visualizar /</a>
                        <a href="{{route('users.edit',['user' =>$user->id])}}">Editar</a>
                        <form action="{{route('users.destroy',['user' =>$user->id])}}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="hidden" name="id" value="{{$user->id}}">
                            <input type="submit" name="user" value="Remover">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </body>
    </html>
