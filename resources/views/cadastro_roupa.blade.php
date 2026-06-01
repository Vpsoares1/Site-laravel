<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Roupa</title>
   
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
    <h1 style="color: white; font-family: 'FonteNova'; margin-top: 70px; text-align: center;">Cadastro de roupa</h1>
<div class="container container-sm" style="margin-top: 0px;">
    <div class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label" style="color: white">Nome</label>
    <input type="text" class="form-control" id="nome_roupa">
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label" style="color: white">Preço</label>
    <input type="number" class="form-control" id="preco_roupa" placeholder="R$0.00" min="0" step="0.01">
  </div>
  <div class="col-md-12">
    <label for="inputPassword4" class="form-label" style="color: white">Descrição do produto</label>
    <input type="text" class="form-control" id="descricao_roupa">
  </div>
  
  <div class="col-12">
    <label for="inputAddress2" class="form-label" style="color: white">Estoque</label>
    <input type="number" class="form-control" id="estoque_roupa" min="0" step="1">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label" style="color: white">Tamanho</label>
    <input type="text" maxlength="2" class="form-control" id="tamanho_roupa">
  </div>
  <div class="col-md-6">
    <label for="inputZip" class="form-label" style="color: white">Peça</label>
  <label for="inputState">State</label>
      <select id="peca_roupa" class="form-select" aria-label=".form-select-sm example">
        <option value="Camisa" selected>Camisa</option>
        <option value="Shorts">Shorts</option>
        <option value="Calça">Calça</option>
        <option value="Moletom">Moletom</option>
      </select>
  </div>
  </div>
  <div class="col-12">
    <button style="margin-top: 20px;" type="reset" onclick="window.location.reload();" type="submit" class="btn btn-outline-light" id="btn_cadastrar2">Cadastrar produto</button>
    <a type="button" style="margin-top: 20px; margin-left: 10px;" href="{{ route('lista_roupa') }}" class="btn btn-outline-light">Ver lista de produtos</a>
    
</div>
</div>
</div>
</body>
</html>
