@extends('layout.site')

@section('titulo', 'Livros')

    @section('conteudo')
    <div class="container">
        <h3 class="center">Detalhes do Livro</h3>
        <br>
        <div class="row">        
            <form action="{{ route('admin.livros.visualizar',$registro->id) }}" method="get">

                @include('admin.livros._form_view')

                <a class="btn-small teal darken-3" href="{{ route('admin.livros') }}">Voltar</a>

            </form>
        </div>
    </div>
    
@endsection