<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body style="background-color: black;">
    <nav class="navbar fixed-top" style="background-color: black;" data-bs-theme="dark">
        <div class="container-fluid"> <br>
            <img src="FLAME(2).png" alt="">
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
                            <a class="nav-link active" aria-current="page" href="inverno.html">Coleção de inverno</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="artistas.html">Artistas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="flame.html">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Itens
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="camisas.html">Camisas</a></li>
                                <li><a class="dropdown-item" href="shorts.html">Shorts</a></li>
                                <li><a class="dropdown-item" href="">Filtrar</a></li>
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
    <div id="carouselExample" class="carousel slide" style="margin-top: 80px;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image-Photoroom.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="image-Photoroom(2).png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="67.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="row">
        <div class="card bg-transparent" style="width: 28rem; margin-top: 30px; margin-left: 50px;"
            class="col-sm-12 col-md-6 col-lg-4 col-xl-3 col-xxl-2">
            <img src="camisa b.webp" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title" style="color: white;"">CARTI X FLAME tee</h5>
                <p class=" card-text" style="color: white;">220,89 R$</p>
                    <a href="pagamento.html" class="btn btn-outline-light">Comprar</a>
            </div>
        </div>
        <div class="card bg-transparent" style="width: 28rem; margin-top: 30px; margin-left: 50px;"
            class="col-sm-12 col-md-6 col-lg-4 col-xl-3 col-xxl-2">
            <img src="camisa a.webp" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title" style="color: white;"">ROCKY X FLAME Tee</h5>
                <p class=" card-text" style="color: white;">220,89 R$</p>
                    <a href="pagamento.html" class="btn btn-outline-light">Comprar</a>
            </div>
        </div>
        <div class="card bg-transparent" style="width: 28rem; margin-top: 30px; margin-left: 50px;"
            class="col-sm-12 col-md-6 col-lg-4 col-xl-3 col-xxl-2">
            <img src="05flame(1).png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title" style="color: white;"">05 Black Tee</h5>
                <p class=" card-text" style="color: white;">250,65 R$</p>
                    <a href="pagamento.html" class="btn btn-outline-light">Comprar</a>
            </div>
        </div>
        <div class="card bg-transparent" style="width: 28rem; margin-top: 30px; margin-left: 50px;"
            class="col-sm-12 col-md-6 col-lg-4 col-xl-3 col-xxl-2">
            <img src="camisa.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title" style="color: white;"">OCTANE Tee</h5>
                <p class=" card-text" style="color: white;">220,89 R$</p>
                    <a href="pagamento.html" class="btn btn-outline-light">Comprar</a>
            </div>
        </div>
        <div class="card bg-transparent" style="width: 28rem; margin-top: 30px; margin-left: 50px;"
            class="col-sm-12 col-md-6 col-lg-4 col-xl-3 col-xxl-2">
            <img src="camisa 4.webp" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title" style="color: white;"">CALL ME IF YOU GET LOST Tee</h5>
                <p class=" card-text" style="color: white;">210,42 R$</p>
                    <a href="pagamento.html" class="btn btn-outline-light">Comprar</a>
            </div>
        </div>
        <div class="card bg-transparent" style="width: 28rem; margin-top: 30px; margin-left: 50px;"
            class="col-sm-12 col-md-6 col-lg-4 col-xl-3 col-xxl-2">
            <img src="camisa 5.webp" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title" style="color: white;"">FRANK OCEAN X FLAME Tee</h5>
                <p class=" card-text" style="color: white;">230,90 R$</p>
                    <a href="pagamento.html" class="btn btn-outline-light">Comprar</a>
            </div>
        </div>
        <div class="card bg-transparent" style="width: 28rem; margin-top: 30px; margin-left: 50px;"
            class="col-sm-12 col-md-6 col-lg-4 col-xl-3 col-xxl-2">
            <img src="camisa c.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title" style="color: white;"">No War Tee</h5>
                <p class=" card-text" style="color: white;">210,99 R$</p>
                    <a href="pagamento.html" class="btn btn-outline-light">Comprar</a>
            </div>
        </div>
        <div class="card bg-transparent" style="width: 28rem; margin-top: 30px; margin-left: 50px;"
            class="col-sm-12 col-md-6 col-lg-4 col-xl-3 col-xxl-2">
            <img src="camisa 7.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title" style="color: white;"">CLB DRAKE X FLAME Tee</h5>
                <p class=" card-text" style="color: white;">205,90 R$</p>
                    <a href="pagamento.html" class="btn btn-outline-light">Comprar</a>
            </div>
        </div>
        <div class="card bg-transparent" style="width: 28rem; margin-top: 30px; margin-left: 50px;"
            class="col-sm-12 col-md-6 col-lg-4 col-xl-3 col-xxl-2">
            <img src="camisa 8.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title" style="color: white;"">LAFLAME X FLAME Tee</h5>
                <p class=" card-text" style="color: white;">247,99 R$</p>
                    <a href="pagamento.html" class="btn btn-outline-light">Comprar</a>
            </div>
        </div>
        <div class="card bg-transparent" style="width: 28rem; margin-top: 30px; margin-left: 50px;"
            class="col-sm-12 col-md-6 col-lg-4 col-xl-3 col-xxl-2">
            <img src="camisa 9.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title" style="color: white;"">DAYS BEFORE RODEO X FLAME Tee</h5>
                <p class=" card-text" style="color: white;">235,22 R$</p>
                    <a href="pagamento.html" class="btn btn-outline-light">Comprar</a>
            </div>
        </div>
        <div class="card bg-transparent" style="width: 28rem; margin-top: 30px; margin-left: 50px;"
            class="col-sm-12 col-md-6 col-lg-4 col-xl-3 col-xxl-2">
            <img src="camisa 10.png" class="card-img-top" alt="...">
            <div class="card-body"> <br>
                <h5 class="card-title" style="color: white;"">I AM MUSIC X FLAME Tee</h5>
                <p class=" card-text" style="color: white;">242,18 R$</p> 
                    <a href="pagamento.html" class="btn btn-outline-light">Comprar</a>
            </div>
        </div>
        <div class="card bg-transparent" style="width: 28rem; margin-top: 30px; margin-left: 50px;"
            class="col-sm-12 col-md-6 col-lg-4 col-xl-3 col-xxl-2">
            <img src="camisa 11.png" class="card-img-top" alt="...">
            <div class="card-body"> <br>
                <h5 class="card-title" style="color: white;"">Sifnature Black FLAME Tee</h5>
                <p class=" card-text" style="color: white;">199,18 R$</p> 
                    <a href="pagamento.html" class="btn btn-outline-light">Comprar</a>
            </div>
        </div>
        <div class="card bg-transparent" style="width: 28rem; margin-top: 30px; margin-left: 50px;"
            class="col-sm-12 col-md-6 col-lg-4 col-xl-3 col-xxl-2">
            <img src="camisa 12.png" class="card-img-top" alt="...">
            <div class="card-body"> <br>
                <h5 class="card-title" style="color: white;"">Christ White Tee FLAME</h5>
                <p class=" card-text" style="color: white;">181,20 R$</p> 
                    <a href="pagamento.html" class="btn btn-outline-light">Comprar</a>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 200px;">
        <footer class="py-5">
            <div class="row">
                <div class="col-6 col-md-2 mb-3">
                    <h5 style="color: white;">Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-white">Home</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-white">Features</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-white">Pricing</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-white">FAQs</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-white">sobre</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-md-2 mb-3">
                    <h5 style="color: white;">Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-white">Home</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-white">Features</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-white">Pricing</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-white">FAQs</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-white">About</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-md-2 mb-3">
                    <h5 style="color: white;">Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-white">Home</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-white">Features</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-white">Pricing</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-white">FAQs</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-white">About</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-5 offset-md-1 mb-3">
                    <form>
                        <h5 style="color: white;">Se inscreva na nossa newsletter</h5>
                        <p style="color: white;">Receba noticias de promoções e novos produtos</p>
                        <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden" style="color: white;">Email</label>
                            <input id="newsletter1" type="email" class="form-control" placeholder="Email" />
                            <button class="btn btn-primary" type="button">Inscreva-se</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                <p style="color: white;"> 2025 Company, Inc. Todos direitos reservados.</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3">
                        <a class="link-body-emphasis" href="#" aria-label="Instagram"><svg class="bi" width="24"
                                height="24">
                                <use xlink:href="#instagram"></use>
                            </svg></a>
                    </li>
                    <li class="ms-3">
                        <a class="link-body-emphasis" href="#" aria-label="Facebook"><svg class="bi" width="24"
                                height="24" aria-hidden="true">
                                <use xlink:href="#facebook"></use>
                            </svg></a>
                    </li>
                </ul>
            </div>
        </footer>
    </div>
</body>

</html>