<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PermisoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;



Route::apiResource('categorias', CategoriaController::class);
Route::get('/categorias', [CategoriaController::class, 'index']);
Route::post('/categorias', [CategoriaController::class, 'store']);
Route::get('/categorias/{categoria}', [CategoriaController::class, 'show']);


Route::apiResource('comments', CommentController::class);

Route::apiResource('eventos', EventoController::class);

Route::apiResource('images', ImageController::class);

Route::apiResource('permisos', PermisoController::class);

Route::apiResource('profiles', ProfileController::class);

Route::apiResource('roles', RoleController::class);

Route::apiResource('tags', TagController::class);

Route::apiResource('users', UserController::class);

