@extends('layout.site')

@section('titulo', 'Livros')

    @section('conteudo')
    <div class="container">
        <h3 class="center">Adicionar Livro</h3>
        <br>
        <div class="row">        
            <form action="{{ route('admin.livros.salvar') }}" method="POST">
                {{ csrf_field() }}

                @include('admin.livros._form')

                <div class="col s6 center">
                    <button class="btn teal darken-3">Salvar</button>
                </div>
                <div class="col s6 center">
                    <a class="btn blue" href="{{ route('admin.categorias.adicionar') }}">Adicionar Categoria</a>
                </div>

            </form>
        </div>
    </div>
    
@endsection