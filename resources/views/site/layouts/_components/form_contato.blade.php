<form action="{{route('site.contato')}}" method="post">
        @csrf
        <div class="form-group">
            <input name="nome" type="text" class="form-control " placeholder="Nome" >
        </div>
        <div class="form-group">
            <input name="telefone" type="text" class="form-control "placeholder="Telefone" >
        </div>
        <div class="form-group">
            <input name="email" type="text" class="form-control " placeholder="E-mail" >
        </div>
        <div class="form-group">
            <select name="motivo"  class="form-control" id="exampleFormControlSelect2">
            <option>Selecione o motivo do contato</option>
            <option value="1">Dúvida</option>
            <option value="2">Elogio</option>
            <option value="3">Reclamação</option>
        </select>
        </div>
        <div class="form-group">
            <textarea name="mensagem" class="form-control "  aria-describedby="emailHelp" placeholder="Preencha sua mensagem" ></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary btn-contact btn-success">Submit</button>
    </form>