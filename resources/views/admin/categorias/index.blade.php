@extends('layout.site')

@section('titulo', 'Categorias')

    @section('conteudo')
    <div class="container">
        <h3 class="center">Listagem das Categorias</h3>
        <br>
        <div class="row">        
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($registros as $registro)
                        <tr>
                            <td style="width: 25%;">{{ $registro->nome }}</td>
                            <td style="width: 25%;">
                                <a class="btn-small orange" href="{{ route('admin.categorias.editar',$registro->id) }}">Editar</a>

                                <a class="btn-small red modal-trigger" href="#modal-confirmacao">Excluir</a>
                            </td>
                        </tr>

                        <div class="modal" id="modal-confirmacao">
                            <div class="modal-content">
                                <h3>Confirmar a exclusão</h3>
                                <p>Você realmente deseja excluir esta categoria?</p>
                            </div>
                            <div class="modal-footer">
                                <a href="#!" class="modal-action modal-close btn-small btn-flat">Cancelar</a>
                                <a class="btn-small default" href="{{ route('admin.categorias.deletar',$registro->id) }}">Sim</a>
                            </div>
                        </div>  
                    @endforeach
                </tbody>
            </table>
        </div>        
    </div>        
    
@endsection