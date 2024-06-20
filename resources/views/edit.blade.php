@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Editar Livro</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('livros.index') }}"> Voltar</a>
                </div>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Oops!</strong> Há alguns problemas com os dados inseridos.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('livros.update', $livro->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Autor:</strong>
                        <input type="text" name="autor" value="{{ $livro->autor }}" class="form-control" placeholder="Autor">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Título:</strong>
                        <input type="text" name="titulo" value="{{ $livro->titulo }}" class="form-control" placeholder="Título">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Subtítulo:</strong>
                        <input type="text" name="subtitulo" value="{{ $livro->subtitulo }}" class="form-control" placeholder="Subtítulo">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Edição:</strong>
                        <input type="text" name="edicao" value="{{ $livro->edicao }}" class="form-control" placeholder="Edição">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Editora:</strong>
                        <input type="text" name="editora" value="{{ $livro->editora }}" class="form-control" placeholder="Editora">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Ano de Publicação:</strong>
                        <input type="text" name="ano_publicacao" value="{{ $livro->ano_publicacao }}" class="form-control" placeholder="Ano de Publicação">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </form>
    </div>
@endsection

