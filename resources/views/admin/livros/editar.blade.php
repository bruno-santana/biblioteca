@extends('layout.site')

@section('titulo', 'Livros')

    @section('conteudo')
    <div class="container">
        <h3 class="center">Editar Livro</h3>
        <br>
        <div class="row">        
            <form action="{{ route('admin.livros.atualizar',$registro->id) }}" method="POST">
                {{ csrf_field() }}

                <input type="hidden" name="_method" value="put">
                @include('admin.livros._form')

                <button class="btn teal darken-3">Atualizar</button>
            </form>
        </div>
    </div>
    
@endsection