<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::post('/calcular-preco', function (Illuminate\Http\Request $request) {

    // obter os dados do formulário
    $quantidade = $request->input('quantidade');
    $preco_unitario = $request->input('preco_unitario');
    $desconto = $request->input('desconto');

    // calcular o preço
    $preco_total = ($quantidade * $preco_unitario) - $desconto;

    // enviar os dados de volta para o Open Form
    return response()->json([
        'preco_total' => $preco_total
    ]);
});

