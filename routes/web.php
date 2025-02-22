<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginInternController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\VisitanteController;
use App\Http\Controllers\EmprestimoController;
use App\Http\Controllers\UserController;

Route::get('/', [LoginInternController::class, 'index']);
Route::get('/home', function () {
    return view('home');
});
Route::get('login_intern', [LoginInternController::class, 'showLoginForm'])->name('show_login_intern');
Route::post('login_intern', [LoginInternController::class, 'login'])->name('login_intern');

Route::get('emprestimos/relatorio', [EmprestimoController::class,'relatorio'])->name('emprestimos.relatorio');
Route::get('emprestimos/usp', [EmprestimoController::class,'usp'])->name('emprestimos.usp');
Route::get('emprestimos/visitante', [EmprestimoController::class,'visitante'])->name('emprestimos.visitante');
Route::get('emprestimos/devolucao', [EmprestimoController::class,'devolucao'])->name('emprestimos.devolucao');
Route::post('emprestimos/devolver', [EmprestimoController::class,'devolver'])->name('emprestimos.devolver');

Route::get('categorias/barcode', [CategoriaController::class,'barcode'])->name('categorias.barcode');
Route::post('categorias/barcodes', [CategoriaController::class,'barcodes'])->name('categorias.barcodes');
Route::resource('categorias', CategoriaController::class);
Route::resource('materials', MaterialController::class);
Route::resource('visitantes', VisitanteController::class);
Route::resource('emprestimos', EmprestimoController::class);
Route::resource('users', UserController::class);

# Logs  
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->middleware('can:admin');
