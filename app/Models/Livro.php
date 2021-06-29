<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoria_id', 'titulo', 'autor', 'edicao', 'ano_edicao', 'editora', 'data_publicacao', 'isbn',  'origem', 'localizacao', 'sinopse'
    ];
}
