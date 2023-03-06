@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')
    

    <div class="">

        <div class="contato text-white text-center pt-5 pb-5">
            <h1>Listagem de prdoutos</h1>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{route('produto.create')}}">Novo</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informação página mt-5">
            
            <div class="" style="width:70%; margin-left:auto; margin-right:auto; text-align:center;">

                <table border="1" width ='100%' >
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Peso</th>
                            <th>Unidade ID</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($produtos as $produto)
                            <tr>
                                <td>{{ $produto->nome}}</td>
                                <td>{{ $produto->descricao}}</td>
                                <td>{{ $produto->peso}}</td>
                                <td>{{ $produto->unidade_id}}</td>
                                <td><a href="{{route('produto.show', ['produto' => $produto->id])}}">Visualizar</a></td>
                                <td>
                                    <form method="POST" action="{{route('produto.destroy', ['produto' => $produto->id])}}">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-link" type="submit">Excluir</button>
                                    </form>
                                </td>
                                <td><a href="{{route('produto.edit', ['produto' =>$produto->id])}}">Editar</a></td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>

                {{ $produtos->appends($request)->links() }}

            </div>

        </div>

    </div>
@endsection