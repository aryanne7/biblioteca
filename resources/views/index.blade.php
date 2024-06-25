<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabela de livros</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/index.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Lista de Livros</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('dashboard') }}"> Voltar</a>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('livros.create') }}"> Criar Novo Livro</a>
                </div>
            </div>
        </div>
        
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Autor</th>
                <th>Título</th>
                <th>Subtítulo</th>
                <th>Edição</th>
                <th>Editora</th>
                <th>Ano de Publicação</th>
                <th width="280px">Ações</th>
            </tr>
            @foreach ($livros as $livro)
            <tr>
                <td>{{ $livro->id }}</td>
                <td>{{ $livro->autor }}</td>
                <td>{{ $livro->titulo }}</td>
                <td>{{ $livro->subtitulo }}</td>
                <td>{{ $livro->edicao }}</td>
                <td>{{ $livro->editora }}</td>
                <td>{{ $livro->ano_de_publicacao }}</td>
                <td>
                    <form action="{{ route('livros.destroy',$livro->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('livros.edit',$livro->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Deletar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>

        {!! $livros->links('pagination::bootstrap-4') !!}
    </div>
</body>
</html>
