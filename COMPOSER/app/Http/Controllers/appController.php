<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class appController extends Controller
{
    public function clientes(){
        return view('app.clientes');
    }

    public function fornecedor(){
        $fornecedores = [
            0 => [
                'nome' => 'fornecedor 1',
                'status' => 'N',   
                'cnpj' => 'opa'
                ],
            1 => [
                'nome' => 'fornecedor 2',
                'status' => 'S',   
            ],
        ];

        return view('app.fornecedor.index', compact('fornecedores'));
    }

    public function produtos(){
        return view('site.clientes');
    }
}
