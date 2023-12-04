<?php

use App\Http\Controllers\ContatoDoController;
use App\Http\Controllers\HomeDoController;
use App\Http\Controllers\ModalidadeDoController;
use App\Http\Controllers\NoticiasDoController;
use App\Http\Controllers\NoticiasoDoController;
use App\Http\Controllers\SobreDoController;
use App\Http\Controllers\TreinoDoController;
use Illuminate\Support\Facades\Route;

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



Route::get('/', [HomeDoController::class, 'index'])->name('home'); // Página "Home"
Route::get('/sobre', [SobreDoController::class, 'index'])->name('sobre'); //Página "Sobre"
Route::get('/noticias', [NoticiasDoController::class, 'index'])->name('noticia'); // Página "Noticias"
Route::get('/modalidade', [ModalidadeDoController::class, 'index'])->name('modalidade'); //Página "Modalidade"
Route::get('/modalidade/musculacao',[ModalidadeDoController::class,'musculacao'])->name('modalidade.musculacao');
Route::get('/modalidade/aerobica',[ModalidadeDoController::class, 'aerobica'])->name('modalidade.aerobica');
Route::get('/modalidade/pilates',[ModalidadeDoController::class,'pilates'])->name('modalidade.pilates');
Route::get('/modalidade/yoga',[ModalidadeDoController::class,'yoga'])->name('modalidade.yoga');
Route::get('/modalidade/Treinamentofuncional',[ModalidadeDoController::class ,'Treinamentofuncional'])->name('modalidade.treinamentofuncional');
Route::get('/treino',[TreinoDoController::class,'index'])->name('treino'); // Página "Treino"
Route::get('/contato',[ContatoDoController::class, 'index'])->name('contato'); // Página Contato"
