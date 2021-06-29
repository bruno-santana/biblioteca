<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class HomeController extends Controller
{
    public function index()
    {
        $livros = Livro::all();
        return view('home', compact('livros'));
    }

    public function pesquisar(Request $req)
    {   
        $pesquisa = $req::all();
        @dd($pesquisa);
        return view('home', compact('registros'));
    }
}
