<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\GrupoItemController;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\GestorController;

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

Route::get('/', [PessoaController::class,'index']);
Route::get('/register', [PessoaController::class,'create']);
Route::post('/item/inside', [PessoaController::class,'item']);
Route::post('/store', [PessoaController::class,'store']);

Route::prefix('item/')->group(function(){
    Route::get('', [ItemController::class,'index']);
    Route::get('list', [ItemController::class,'list']);
    Route::post('list/update/{id}', [ItemController::class,'changeQuantidade']);
    Route::get('create', [ItemController::class,'create']);
    Route::post('store', [ItemController::class,'store']);
    Route::delete('delete/{id}', [ItemController::class,'destroy']);
    Route::get('edit/{id}', [ItemController::class,'edit']);
    Route::get('show/{id}', [ItemController::class,'show']);
    Route::post('update/{id}', [ItemController::class,'update']);
});

Route::prefix('group/')->group(function(){
    Route::get('create', [GrupoItemController::class,'create']);
    Route::post('store', [GrupoItemController::class,'store']);
    Route::delete('delete/{id}', [GrupoItemController::class,'destroy']);
});

Route::prefix('gestores/')->group( function(){
    Route::get('', [GestorController::class,'index']);
    Route::get('create', [GestorController::class,'create']);
    Route::post('store', [GestorController::class,'store']);
    Route::delete('delete/{id}', [GestorController::class,'destroy']);
    Route::get('edit/{id}', [GestorController::class,'edit']);
    Route::post('update/{id}', [GestorController::class,'update']);
});


