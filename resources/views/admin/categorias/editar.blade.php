@extends('layout.site')

@section('titulo', 'Categorias')

    @section('conteudo')
    <div class="container">
        <h3 class="center">Editar Categoria</h3>
        <br>
        <div class="row">        
            <form action="{{ route('admin.categorias.atualizar',$registro->id) }}" method="POST">
                {{ csrf_field() }}

                <input type="hidden" name="_method" value="put">
                @include('admin.categorias._form')

                <button class="btn teal darken-3">Atualizar</button>
            </form>
        </div>
    </div>
    
@endsection