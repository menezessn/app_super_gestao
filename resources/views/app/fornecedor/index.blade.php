@extends('app.layouts.basico')

@section('titulo', 'Cliente')

@section('conteudo')
    

    <div class="">

        <div class="contato text-white text-center pt-5 pb-5">
            <h1>Fornecedor</h1>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{route('app.fornecedor.adicionar')}}">Novo</a></li>
                <li><a href="{{route('app.fornecedor')}}">Consulta</a></li>
            </ul>
        </div>

        <div class="informação página">
            
            <div class="" style="width:30%; margin-left:auto; margin-right:auto;"">
                <div class="container mt-5 margin-end">

                    <form action="{{route('app.fornecedor.listar')}}" method="post">
                        @csrf
        
                        <div class="form-group">
                          <input name='nome'  type="text" class="form-control" placeholder="Nome">
                        </div>
                        
        
                        <div class="form-group">
                          <input name='site'  type="text" class="form-control" placeholder="Site">
                        </div>
                        

                        <div class="form-group">
                          <input name='uf'  type="text" class="form-control" placeholder="UF">
                        </div>
                        

                        <div class="form-group">
                          <input name='email'  type="email" class="form-control" placeholder="E-mail">
                        </div>
                        
        
                        <button type="submit" class="btn btn-primary">Pesquisar</button>

                      </form>

                </div>
            </div>

        </div>

    </div>
@endsection