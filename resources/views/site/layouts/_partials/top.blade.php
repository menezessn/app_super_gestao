<header>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
      <a class="navbar-brand" href="">
      <img  src="{{asset("img/logo.png")}}" alt="logo" >
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#vertical-navbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="vertical-navbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('site.index') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('site.sobrenos') }}">Sobre Nós</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('site.contato') }}">Contatos</a>
        </li>
        <li class="nav-item ">
          <a class="btn btn-outline-light "  href="">Entrar</a>
        </li>
      </ul>
    </div>
    </nav>
  </header>