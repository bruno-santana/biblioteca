<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\CategoriaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('site.home');
Route::post('/', [HomeController::class, 'pesquisar'])->name('site.home');

//Login
Route::get('/login', [LoginController::class, 'index'])->name('site.login');

Route::post('/login/entrar', [LoginController::class, 'entrar'])->name('admin.livros')->name('site.login.entrar');

Route::get('/login/sair', [LoginController::class, 'sair'])->name('site.login.sair');


//Categorias
Route::get('/admin/categorias', [CategoriaController::class, 'index'])->name('admin.categorias');

Route::get('/admin/categorias/adicionar', [CategoriaController::class, 'adicionar'])->name('admin.categorias.adicionar');

Route::post('/admin/categorias/salvar', [CategoriaController::class, 'salvar'])->name('admin.categorias.salvar');

Route::get('/admin/categorias/editar/{id}', [CategoriaController::class, 'editar'])->name('admin.categorias.editar');

Route::put('/admin/categorias/atualizar/{id}', [CategoriaController::class, 'atualizar'])->name('admin.categorias.atualizar');

Route::get('/admin/categorias/deletar/{id}', [CategoriaController::class, 'deletar'])->name('admin.categorias.deletar');


//Administrativo
Route::get('/admin/livros', [LivroController::class, 'index'])->name('admin.livros');

Route::get('/admin/livros/adicionar', [LivroController::class, 'adicionar'])->name('admin.livros.adicionar');

Route::post('/admin/livros/salvar', [LivroController::class, 'salvar'])->name('admin.livros.salvar');

Route::get('/admin/livros/editar/{id}', [LivroController::class, 'editar'])->name('admin.livros.editar');

Route::put('/admin/livros/atualizar/{id}', [LivroController::class, 'atualizar'])->name('admin.livros.atualizar');

Route::get('/admin/livros/visualizar/{id}', [LivroController::class, 'visualizar'])->name('admin.livros.visualizar');

Route::get('/admin/livros/deletar/{id}', [LivroController::class, 'deletar'])->name('admin.livros.deletar');