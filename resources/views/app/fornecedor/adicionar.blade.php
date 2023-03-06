@extends('app.layouts.basico')

@section('titulo', 'Cliente')

@section('conteudo')
    

    <div class="">

        <div class="contato text-white text-center pt-5 pb-5">
            <h1>Fornecedor - adicionar</h1>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{route('app.fornecedor.adicionar')}}">Novo</a></li>
                <li><a href="{{route('app.fornecedor')}}">Consulta</a></li>
            </ul>
        </div>

        <div class="informação página">
            
            <div class="" style="width:30%; margin-left:auto; margin-right:auto;">
                <div class="container mt-5 margin-end">
                    <h4>{{$msg ?? ''}}</h4>
                    <form action="{{route('app.fornecedor.adicionar')}}" method="post">

                      <input  type="hidden" name='id' value="{{$fornecedor->id ?? ''}}">

                        @csrf
        
                        <div class="form-group">
                          <input name='nome' value="{{$fornecedor->nome ?? old('nome')}}"  type="text" class="form-control" placeholder="Nome">
                          {{$errors->has('nome') ? $errors->first('nome') : ''}}
                        </div>
                        
        
                        <div class="form-group">
                          <input name='site' value="{{$fornecedor->site ?? old('site')}}"  type="text" class="form-control" placeholder="Site">
                          {{$errors->has('site') ? $errors->first('site') : ''}}
                        </div>
                        
        
                        <div class="form-group">
                          <input name='uf' value="{{$fornecedor->uf ?? old('uf')}}"   type="text" class="form-control" placeholder="UF">
                          {{$errors->has('uf') ? $errors->first('uf') : ''}}
                        </div>
                       
        
                        <div class="form-group">
                          <input name='email' value="{{$fornecedor->email ?? old('email')}}"  type="email" class="form-control" placeholder="E-mail">
                          {{$errors->has('email') ? $errors->first('email') : ''}}
                        </div>
                        
        
        
                        <button type="submit" class="btn btn-primary">adicionar</button>

                      </form>

                </div>
            </div>

           

        </div>

    </div>
@endsection