<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <script src="cadastro_roupa.js"></script>
</head>

<body style="background-color: black;">
  <nav class="navbar fixed-top" style="background-color: black;" data-bs-theme="dark">
        <div class="container-fluid"> <br>
            <img style="margin-left: 50px;" src="FLAME(2).png" alt="">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">FLAME</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('inverno') }}">Coleção de inverno</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('artistas') }}">Artistas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('inicio') }}">Home</a>
                        </li>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="{{ route('tamanho') }}">Filtrar por tamanho</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Itens
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('camisas') }}">Camisas</a></li>
                                <li><a class="dropdown-item" href="{{ route('shorts') }}">Shorts</a></li>
                                <li><a class="dropdown-item" href="{{ route('filtro') }}">Filtrar</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search" />
                        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</div>
<table class="table table-dark table-striped" style="margin-top: 100px;">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nome</th>
      <th scope="col">descrição</th>
      <th scope="col">preço</th>
      <th scope="col">estoque</th>
      <th scope="col">tamanho</th>
      <th scope="col">peça</th>
    </tr>
  </thead>
  <tbody>
    @foreach($roupas as $r)
    <tr>
      <th scope="row">{{ $r->id }}</th>
      <td>{{ $r->nome }}</td>
      <td>{{ $r->descricao }}</td>
      <td>{{ $r->preco }}</td>
      <td>{{ $r->estoque }}</td>
      <td>{{ $r->tamanho }}</td>
      <td>{{ $r->peca }}</td>
    </tr>

    @endforeach
  </tbody>
</table>
</div>
</body>
</html>