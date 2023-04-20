<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FormController extends Controller
{

    protected $myVar = 'Valor inicial da minha variável';

    public function submitForm(Request $request)
    {

        // obter os dados do formulário
        $quantidade = $request->input('quantidade');
        $preco_unitario = $request->input('preco_unitario');
        $desconto = $request->input('desconto');

        // obter a URL do webhook
        $webhook_url = $request->input('webhook_url');

        // enviar os dados para o webhook
        $response = Http::post($webhook_url, [
            'quantidade' => $quantidade,
            'preco_unitario' => $preco_unitario,
            'desconto' => $desconto
        ]);

        // exibir o resultado
        $preco_total = $response->json('preco_total');
        return view('resultado', compact('preco_total'));
    }

    public function getMyVar()
    {
        return $this->myVar;
    }

    

}
