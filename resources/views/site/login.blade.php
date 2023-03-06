@extends('site.layouts.basico')

@section('titulo', 'login')

@section('conteudo')

    <div>
        <h1 class="contato text-white text-center pt-5 pb-5">Login</h1>
    </div>

    <div style="width:30%; margin-left:auto; margin-right:auto;">
        <div class="container mt-5 margin-end">
            <form action="{{route('site.login')}}" method="post">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input name='email' value='{{old('email')}}' type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
                  {{$errors->has('email') ? $errors->first('email') : ''}}
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Senha</label>
                  <input type="password" value='{{old('usuario')}}' name="senha" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                  {{$errors->has('senha') ? $errors->first('senha') : ''}}
                </div>
             
                <button type="submit" class="btn btn-primary">Enviar</button>
              </form>
              {{ isset($erro) && $erro != null ? $erro : '' }}
        </div>
    </div>
    

<footer>

    <div class="container rodape pb-5">
        <div class="row">
            <div class="col-md-4 pt-2 text-center">
                <h3 class="mb-3">Redes sociais</h3>
                <a href=""><i class="fa-brands fa-facebook fa-2xl m-2"></i></a>
                <a href=""><i class="fa-brands fa-instagram fa-2xl m-2"></i></a>
                <a href=""><i class="fa-brands fa-twitter fa-2xl m-2"></i></a>
                
            </div>
            <div class="col-md-4 pt-2 text-center">
                <h3 class="mb-3">Contato</h3>
                <p>(11) 3333-4444</p>
                <p>supergestao@dominio.com.br</p>
                
            </div>
            <div class="col-md-4 pt-2 text-center">
                <h3 class="mb-3">Localização</h3>
                <a href="">
                    <i class="fa-solid fa-map fa-2xl"></i>
                </a>
                
            </div>
    </div>

</footer>

<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

@endsection