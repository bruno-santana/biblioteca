@extends('layout.site')

@section('titulo', 'Categorias')

    @section('conteudo')
    <div class="container">
        <h3 class="center">Adicionar Categoria</h3>
        <br>
        <div class="row">        
            <form action="{{ route('admin.categorias.salvar') }}" method="POST">
                {{ csrf_field() }}

                @include('admin.categorias._form')
                
                <button class="btn teal darken-3">Salvar</button>
            </form>
        </div>
    </div>
    
@endsection