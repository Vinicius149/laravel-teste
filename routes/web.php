<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/sistema', function () {
    return view('sistema.cadastro');
});

Route::post('/cadastrar', [UserController::class, 'cadastrar']);
Route::get('/lista', [UserController::class, 'lista']);
Route::get('/lista/{user}/edit', [UserController::class, 'edit']);
Route::put('/lista/{user}', [UserController::class, 'update']);
Route::delete('/lista/{user}', [UserController::class, 'apagar']);