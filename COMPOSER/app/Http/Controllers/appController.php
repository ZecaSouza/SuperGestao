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
                'cnpj' => 'opa',
                'ddd' => '', //Petrolina
                'telefone' => '0000-0000'
                ],
            1 => [
                'nome' => 'fornecedor 2',
                'status' => 'N',  
                'cnpj' => 'opa',
                'ddd' => '74', // Juazeiro
                'telefone' => '0000-0000'
            ],
            2 => [
                'nome' => 'fornecedor 3',
                'status' => 'S',  
                'cnpj' => '000.000.000/00-000',
                'ddd' => '81', // Recife
                'telefone' => '0000-0000'
            ],
            3 => [
                'nome' => 'fornecedor 4',
                'status' => 'S',  
                'cnpj' => '000.000.000/00-000',
                'ddd' => '81', // Recife
                'telefone' => '0000-0000'
            ],
        ];

        return view('app.fornecedor.index', compact('fornecedores'));
    }

    public function produtos(){
        return view('site.clientes');
    }
}
