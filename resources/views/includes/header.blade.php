<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Veiculando</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{  route('veiculando.index') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{  route('Veiculando.cadastrandoVeiculos') }}">Cadastrar novo veiculo</a>
          </li>        
        </ul>
      </div>
    </div>
  </nav>