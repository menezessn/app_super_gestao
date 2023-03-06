@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')
    

    <div class="">

        <div class="contato text-white text-center pt-5 pb-5">
            <h1>Adicionar produto </h1>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{route('produto.index')}}">Voltar</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informação página">
            
            <div class="" style="width:30%; margin-left:auto; margin-right:auto;">
                <div class="container mt-5 margin-end">
                    
                    <form method="post" action="{{route('produto.store')}}">
                        @csrf
        
                        <div class="form-group">
                          <input name='nome' value="{{old('nome')}}"  type="text" class="form-control" placeholder="Nome">
                          {{$errors->has('nome') ? $errors->first('nome') : ''}}
                        </div>
                        
        
                        <div class="form-group">
                          <input name='descricao' value="{{old('descricao')}}"  type="text" class="form-control" placeholder="Descrição">
                          {{$errors->has('descricao') ? $errors->first('descricao') : ''}}
                        </div>
                        
        
                        <div class="form-group">
                          <input name='peso' value="{{old('peso')}}"   type="text" class="form-control" placeholder="Peso">
                          {{$errors->has('peso') ? $errors->first('peso') : ''}}
                        </div>
                       
        
                        <div class="form-group">

                            <select class='form-control' name="unidade_id" >
                                <option>--Selecione a unidade de medida--</option>
                                @foreach($unidades as $unidade)
                                <option value="{{$unidade->id}}" {{old('unidade_id') ==$unidade->id ? 'selected' : '' }}>{{$unidade->descricao}}</option>
                                @endforeach
                            </select>
                        {{$errors->has('unidade_id') ? $errors->first('unidade_id') : ''}}
                        </div>

                        <button type="submit" class="btn btn-primary">adicionar</button>

                      </form>

                </div>
            </div>

           

        </div>

    </div>
@endsection