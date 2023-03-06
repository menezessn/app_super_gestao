@extends('site.layouts.basico')

@section('titulo', 'Home')

@section('conteudo')

  <div>
      <div class="row">
          
          <div class="col-md-7 bg-inicial">
              <div class="container mt-4 ml-3 mb-4">
              <h1 class="text-white">Sistema Super Gestão</h1> 
              <p class="text-white">Software para gestão empresarial ideal para sua empresa</p>
              <div>
                  <i class="fa-solid fa-circle-check text-success fa-xl mb-4"></i> <span class="text-white">Gestão completa e descomplicada</span>
              </div>
              <div>
                  <i class="fa-solid fa-circle-check fa-xl text-success"></i> <span class="text-white">Sua empresa na nuvem</span>
              </div>

              <div class="video mt-4">
                <img src="{{ asset('img/player_video.jpg') }}" alt="video">
              </div>

              </div>
          </div>

          <div class="col-md-5 bg-contact">
              
              <div class="container mt-4 mb-4">
                  <h1 class="text-white">Contato</h1> 
                  <p class="text-white">Caso tenha qualque duvida por favor entre em contato com a nossa equipe pelo formulário abaixo.</p>
                  @component('site.layouts._components.form_contato', ['motivo_contatos' => $motivo_contatos])
                    @endcomponent
              </div>

          </div>
          
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