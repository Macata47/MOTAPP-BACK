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
    // Route::get('/categorias', 'index');
    // Route::post('/categorias', [CategoriaController::class, 'store'])->name('categorias.store'); 
    // Route::get('/categorias/{id}', [CategoriaController::class, 'show'])->name('categorias.show'); 
    // Route::get('categorias/{id}/edit', 'edit')->name('categorias.edit');  
    // Route::put('/categorias/{id}', [CategoriaController::class, 'update'])->name('categorias.update'); 
    // Route::delete('/categorias/{id}', [CategoriaController::class, 'destroy'])->name('categorias.destroy'); 



Route::apiResource('comments', CommentController::class);
    // Route::get('/comments', 'index');
    // Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
    // Route::get('/comments/{id}', [CommentController::class, 'show'])->name('comments.show');
    // Route::get('comments/{id}/edit', 'edit')->name('comments.edit');
    // Route::put('/comments/{id}', [CommentController::class, 'update'])->name('comments.update');
    // Route::delete('/comments/{id}', [CommentController::class, 'destroy'])->name('comments.destroy');



Route::apiResource('eventos', EventoController::class);
    // Route::get('/eventos', 'index');
    // Route::post('/eventos', [EventoController::class, 'store'])->name('eventos.store');
    // Route::get('/eventos/{id}', [EventoController::class, 'show'])->name('eventos.show');
    // Route::get('eventos/{id}/edit', 'edit')->name('eventos.edit');
    // Route::put('/eventos/{id}', [EventoController::class, 'update'])->name('eventos.update');
    // Route::delete('/eventos/{id}', [EventoController::class, 'destroy'])->name('eventos.destroy');


Route::apiResource('images', ImageController::class);
    // Route::get('/images', 'index');
    // Route::post('/images', [ImageController::class, 'store'])->name('images.store');
    // Route::get('/images/{id}', [ImageController::class, 'show'])->name('images.show');
    // Route::get('images/{id}/edit', 'edit')->name('images.edit');
    // Route::put('/images/{id}', [ImageController::class, 'update'])->name('images.update');
    // Route::delete('/images/{id}', [ImageController::class, 'destroy'])->name('images.destroy');


Route::apiResource('permisos', PermisoController::class);
    // Route::get('/permisos', 'index');
    // Route::post('/permisos', [ImageController::class, 'store'])->name('permisos.store');
    // Route::get('/permisos/{id}', [ImageController::class, 'show'])->name('permisos.show');
    // Route::get('permisos/{id}/edit', 'edit')->name('permisos.edit');
    // Route::put('/permisos/{id}', [ImageController::class, 'update'])->name('permisos.update');
    // Route::delete('/permisos/{id}', [ImageController::class, 'destroy'])->name('permisos.destroy');


// Route::apiResource('profiles', ProfileController::class);


// Route::apiResource('roles', RoleController::class);



Route::apiResource('tags', TagController::class);
    // Route::get('/tags', 'index');
    // Route::post('/tags', [TagController::class, 'store'])->name('tags.store');
    // Route::get('/tags/{id}', [TagController::class, 'show'])->name('tags.show');
    // Route::get('tags/{id}/edit', 'edit')->name('tags.edit');
    // Route::put('/tags/{id}', [TagController::class, 'update'])->name('tags.update');
    // Route::delete('/tags/{id}', [TagController::class, 'destroy'])->name('tags.destroy');


Route::apiResource('users', UserController::class);
    // Route::get('/users', 'index');
    // Route::post('/users', [UserController::class, 'store'])->name('users.store');
    // Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
    // Route::get('users/{id}/edit', 'edit')->name('users.edit');
    // Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
    // Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
