<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;
use App\Models\Categoria;

class LivroController extends Controller
{
    public function index()
    {
        $registros = Livro::all();

        foreach($registros as $registro) {
            $categoria = Categoria::find($registro['categoria_id']);
            $registro['categoria'] = $categoria['nome'];
        }

        return view('admin.livros.index', compact('registros'));
    }

    public function adicionar()
    {
        $categorias = Categoria::all();
        return view('admin.livros.adicionar', compact('categorias'));
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();
        $time = strtotime($dados['data_publicacao']);
        $dataFormatada = date('Y-m-d',$time);
        $dados['data_publicacao'] = $dataFormatada;
        
        Livro::create($dados);

        return redirect()->route('admin.livros');
    }

    public function editar($id)
    {
        $registro = Livro::find($id);

        return view('admin.livros.editar', compact('registro'));
    }

    public function visualizar($id)
    {
        $registro = Livro::find($id);
        $categoria = Categoria::find($registro['categoria_id']);
        $registro['categoria'] = $categoria['nome'];

        return view('admin.livros.visualizar', compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
        Livro::find($id)->update($req->all());

        return redirect()->route('admin.livros');
    }

    public function deletar(Request $req, $id)
    {
        Livro::find($id)->delete();

        return redirect()->route('admin.livros');
    }    
}
