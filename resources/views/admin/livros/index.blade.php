@extends('layout.site')

@section('titulo', 'Livros')

    @section('conteudo')
    <div class="container">
        <h3 class="center">Listagem dos livros</h3>
        <br>
        <div class="row">
            <a class="waves-effect waves-teal-darken-3 btn" href="{{route('admin.livros.adicionar')}}">
                <i class="material-icons left">add</i>Adicionar
            </a>
        </div>
        <br>        

        <div class="row">        
            <table>
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Categoria</th>
                        <th>Localização</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($registros as $registro)
                        <tr>
                            <td>{{ $registro->titulo }}</td>
                            <td>{{ $registro->categoria }}</td>
                            <td>{{ $registro->localizacao }}</td>
                            <td>
                                <a class="btn-small blue" href="{{ route('admin.livros.visualizar',$registro->id) }}">Ver</a>

                                <a class="btn-small orange" href="{{ route('admin.livros.editar',$registro->id) }}">Editar</a>

                                <a class="btn-small red modal-trigger" href="#modal-confirmacao">Excluir</a>
                            </td>
                        </tr>

                        <div class="modal" id="modal-confirmacao">
                            <div class="modal-content">
                                <h3>Confirmar a exclusão</h3>
                                <p>Você realmente deseja excluir este livro?</p>
                            </div>
                            <div class="modal-footer">
                                <a href="#!" class="modal-action modal-close btn-small btn-flat">Cancelar</a>
                                <a class="btn-small default" href="{{ route('admin.livros.deletar',$registro->id) }}">Sim</a>
                            </div>
                        </div>  
                    @endforeach
                </tbody>
            </table>
        </div>        
    </div>        
    
@endsection