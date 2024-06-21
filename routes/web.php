<?php

use App\Http\Controllers\BibliotecaController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/funcao', [LivroController::class, 'funcao']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::get('livros', [LivroController::class, 'index'])->name('livros.index');
    Route::get('livros/create', [LivroController::class, 'create'])->name('livros.create');
    Route::post('livros', [LivroController::class, 'store'])->name('livros.store');
    Route::get('livros/{livro}', [LivroController::class, 'show'])->name('livros.show');
    Route::get('livros/{livro}/edit', [LivroController::class, 'edit'])->name('livros.edit');
    Route::put('livros/{livro}', [LivroController::class, 'update'])->name('livros.update');
    Route::delete('livros/{livro}', [LivroController::class, 'destroy'])->name('livros.destroy');
});

Route::get('/funcao', [LivroController::class, 'index']); // Exemplo: apontando para o método 'index'


require __DIR__.'/auth.php';
