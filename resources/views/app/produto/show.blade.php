@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')
    

    <div class="">

        <div class="contato text-white text-center pt-5 pb-5">
            <h1>Visualizar produto</h1>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{route('produto.index')}}">Voltar</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informação página">
            
            <div class="" style="width:30%; margin-left:auto; margin-right:auto; text-align:center;">
                <div class="container mt-5 margin-end">
                    
                    <table border="1">

                        <tr>
                            <td>ID</td>
                            <td>{{$produto->id}}</td>
                        </tr>
                        <tr>
                            <td>Nome</td>
                            <td>{{$produto->nome}}</td>
                        </tr>
                        <tr>
                            <td>Descrição</td>
                            <td>{{$produto->descricao}}</td>
                        </tr>
                        <tr>
                            <td>Peso</td>
                            <td>{{$produto->peso}} kg</td>
                        </tr>
                        <tr>
                            <td>Unidade de Medida</td>
                            <td>{{$produto->unidade_id}}</td>
                        </tr>

                    </table>

                </div>
            </div>

           

        </div>

    </div>
@endsection