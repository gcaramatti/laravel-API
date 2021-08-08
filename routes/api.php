<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CachorroController;


Route::get('listaDogs', [CachorroController::class, 'index']);
Route::post('novo-dog', [CachorroController::class, 'store']);
Route::get('dog-especifico/{id}', [CachorroController::class, 'show']);
Route::put('atualizar-dog/{id}', [CachorroController::class, 'update']);
Route::delete('apagar-dog/{id}', [CachorroController::class, 'destroy']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
