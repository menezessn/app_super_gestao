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
          <a class="nav-link" href="{{ route('app.home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('app.cliente') }}">Cliente</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('app.fornecedor') }}">Fornecedor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('produto.index') }}">Produto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('app.sair') }}">Sair</a>
        </li>
        
      </ul>
    </div>
    </nav>
  </header>