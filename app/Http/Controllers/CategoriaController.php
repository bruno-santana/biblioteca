<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index()
    {
        $registros = Categoria::all();

        return view('admin.categorias.index', compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.categorias.adicionar');
    }

    public function salvar(Request $req)
    {
        Categoria::create($req->all());

        return redirect()->route('admin.categorias');
    }

    public function editar($id)
    {
        $registro = Categoria::find($id);

        return view('admin.categorias.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
        Categoria::find($id)->update($req->all());

        return redirect()->route('admin.categorias');
    }

    public function deletar(Request $req, $id)
    {
        Categoria::find($id)->delete();

        return redirect()->route('admin.categorias');
    }
}
