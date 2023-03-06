<form action="{{route('site.contato')}}" method="post">
        @csrf
        <div class="form-group">
            <input name="nome" value="{{old('nome')}}" type="text" class="form-control " placeholder="Nome" >
            @if($errors->has('nome'))
                {{$errors->first('nome')}}
            @endif
        </div>
        <div class="form-group">
            <input name="telefone" value="{{old('telefone')}}" type="text" class="form-control "placeholder="Telefone" >
            @if($errors->has('telefone'))
                {{$errors->first('telefone')}}
            @endif
        </div>
        <div class="form-group">
            <input name="email" value="{{old('email')}}" type="text" class="form-control " placeholder="E-mail" >
            @if($errors->has('email'))
                {{$errors->first('email')}}
            @endif
        </div>
        <div class="form-group">
            <select name="motivo_contatos_id"  class="form-control" id="exampleFormControlSelect2">
            <option value="">Selecione o motivo do contato</option>
            @foreach ($motivo_contatos as $key =>$motivo_contato)
            <option value="{{$motivo_contato->id}}" {{old('motivo_contatos_id')== $motivo_contato->id  ? 'selected' : ''}}>{{$motivo_contato->motivo_contato}}</option>
            @endforeach
        </select>
        @if($errors->has('motivo_contatos_id'))
                {{$errors->first('motivo_contatos_id')}}
        @endif
        </div>
        <div class="form-group">
            <textarea name="text" class="form-control "  aria-describedby="emailHelp" placeholder="Preencha sua mensagem" >{{old('text')}}</textarea>
            @if($errors->has('text'))
                {{$errors->first('text')}}
            @endif
        </div>
        
        <button type="submit" class="btn btn-primary btn-contact btn-success">Submit</button>
    </form>