<head>

</head>

<table class="table">
<div class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Menu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('vendedor.index')}}">Vendedor</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('vendedor.create')}}">Cadastrar Vendedor</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('vendas.create')}}">Nova Venda</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('sair')}}">Sair</a>
          </li>
          
         
        </ul>
      
    </div>
  </div>
</div>