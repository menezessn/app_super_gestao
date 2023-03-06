<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     * 
     */
    public function run()
    {
        //instanciando o objeto
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 100';
        $fornecedor->site = 'Fornecedor100.com.br';
        $fornecedor->uf = 'CE';
        $fornecedor->email = 'Fornecedor100@gmail.com';
        $fornecedor->save();


        //método create
        Fornecedor::create([
            'nome' => 'Fornecedor 200',
            'site' => 'Fornecedor200.com.br',
            'uf' => 'SP',
            'email' => 'Fornecedor200@gmail.com',
        ]);

        //método insert
        DB::table('fornecedores')->insert([
            'nome' => 'Fornecedor 300',
            'site' => 'Fornecedor300.com.br',
            'uf' => 'RS',
            'email' => 'Fornecedor300@gmail.com',
        ]);
    }
}
