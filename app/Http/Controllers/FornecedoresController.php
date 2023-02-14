<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function index(){
        $fornecedores = [
            0 => ['nome' => 'fornecedor 1', 'status' => 'N']
        ];
        return view('app.fornecedores.index', compact('fornecedores'));
    }
}
