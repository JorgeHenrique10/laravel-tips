<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Documentos</title>
</head>
<body>
    <div class="container-fluid col-9 mt-5">
        <h1>Artigos</h1>
        <div>
            <form action="{{route('posts.debug')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="id" class="form-label">Id</label>
                    <input type="text" class="form-control" name="id" placeholder="Id" disabled>
                </div>
                <div class="mb-3">
                    <label for="nome" class="form-label">Título</label>
                    <input type="text" class="form-control" name="title" placeholder="Título">
                </div>
                <div class="mb-3">
                    <label for="nome" class="form-label">Sub-Título</label>
                    <input type="text" class="form-control" name="subtitle" placeholder="Sub-Título">
                </div>
                <div class="mb-3">
                    <label for="nome" class="form-label">Conteúdo</label>
                    <textarea type="text" class="form-control" name="content" placeholder="Conteúdo"></textarea>
                </div>
                <input type="submit" class='btn btn-primary' value="Cadastrar Usuario">
            </form>

        </div>
    </div>
</body>
</html>
