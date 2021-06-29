@extends('layout.site')

@section('titulo', 'Livros')

@section('conteudo')
    <div class="container">
        <h3 class="center">Lista de Livros</h3>
        
        <div class="row center">
            <form action="{{ route('site.home.pesquisar') }}" method="POST">
                {{ csrf_field() }}
                <div class="input-field col s8 offset-s2">
                    <i class="material-icons prefix">search</i>
                    <input id="icon_prefix" type="text" class="validate">
                    <label for="icon_prefix">Pesquise seu título</label>
                    <button class="btn-small">
                        Buscar 
                        <i class="material-icons right">send</i>
                    </button>
                </div>
        </div>

        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>ISBN</th>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Editora</th>
                        <th>Informações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($livros as $livro)
                        <td>{{ $livro->isbn }}</td>
                        <td>{{ $livro->titulo }}</td>
                        <td>{{ $livro->autor }}</td>
                        <td>{{ $livro->editora }}</td>
                        <td>
                            <a class="btn-small blue" href="{{ route('admin.livros.visualizar',$livro->id) }}">Ver mais</a>
                        </td>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endSection