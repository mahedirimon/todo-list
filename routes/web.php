<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', function () {
    return view('welcome');
});





Route::get('todos',[TodoController::class,'index'])->name('todos.index');
Route::get('/create-new',[TodoController::class,'Create'])->name('todos.create');
Route::post('/store',[TodoController::class,'Store'])->name('todos.store');
Route::get('todos/{id}',[TodoController::class,'Show'])->name('todos.show');
Route::get('todos/edit/{id}',[TodoController::class,'Edit'])->name('todos.edit');
Route::post('todos/update/{id}',[TodoController::class,'Update'])->name('todos.update');
Route::get('todos/delete/{id}',[TodoController::class,'Destroy'])->name('todos.delete');
Route::get('todos/complete/{id}',[TodoController::class,'Complete'])->name('todos.complete');











Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
