<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todosController;

Route::get('/',[todosController::class,'index'])->name('todo.home');

Route::get('/create', function () {
    return view('create');
})->name('todo.create');

// Route::get('/edit', function () {
//     return view('update');
// });


Route::post('/create',[todosController::class,'store'])->name('todo.store');
Route::post('/update',[todosController::class,'update'])->name('todo.update');
Route::get('/delete/{id}',[todosController::class,'delete'])->name('todo.delete');
Route::get('/edit/{id}',[todosController::class,'edit'])->name('todo.edit');
