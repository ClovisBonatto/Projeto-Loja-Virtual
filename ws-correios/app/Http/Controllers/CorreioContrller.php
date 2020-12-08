<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GetFrete as GetFreteRequest;
use App\Support\Facades\Correio;

class CorreioContrller extends Controller
{
    public function getCep(Request $request)
    {
        $cep = $request->Route('zipcode');

        return Correio::provider('sigep')->consultaCep($cep);
    }

    public function getFrete(GetFreteRequest $request){
        return Correio::provider('calc_preco_prazo')->calcPrecoPrazo($request->all());
    }
}
