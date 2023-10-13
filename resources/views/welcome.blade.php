<!doctype html>
<!-- Bootstrap first template for Internet y Negocio Electrónico, University of Cadiz,
     since 2019, based on https://www.w3schools.com/bootstrap4/bootstrap_templates.asp -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script> 
    -->
    <style>
        header {
            margin-bottom: 0;
            padding: 20px;
            background-color: lightgreen;
        }

        footer {
            margin-top: 0;
            padding: 20px;
            background-color: lightgreen;
        }

        a.icon-link {
            color: black;
            font-size: 24px;
            text-decoration: none;
        }

        .cardclass {
            width: 80px;
            height: 80px;
        }
    </style>

    <title>Arbi Inc.</title>
</head>

<body>

    <!-- LAYOUT: HEADER -->

    <!-- SECTION: Title -->
    <header class="jumbotron">
        <nav class="navbar navbar-expand-sm">
            <div class="container-fluid">
                <h1>Arbi Inc. Shop</h1>
            </div>
            <div class="container-fluid">
                <form class="d-flex form-inline" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
            <div class="container-fluid">
                <a class="icon-link" href="#"> Autenticación </a>
            </div>
            <div class="container-fluid">
                <i class="bi bi-cart"></i>
            </div>
        </nav>
    </header>

    <div class="container-fluid">
        <h3> Ofertas del día </h3>
        <div class="row">
            <div class="col-sm-2 card card-body" id="cardclass">
                <img src="img/Brazalete.jpg">
                <div class="card-body">
                    <h5 class="card-title">Brazalete</h5>
                    <p class="card-text">Brazalete oficial de capitan.</p>
                </div>
            </div>
            <div class="col-sm-2 card card-body" id="cardclass">
                <img src="img/Spray.jpg">
                <div class="card-body">
                    <h5 class="card-title">Spray arbitro</h5>
                    <p class="card-text">Spray que respeta el crecimientmo del cesped natural.</p>
                </div>
            </div>
            <div class="col-sm-2 card card-body" id="cardclass">
                <img src="img/Toalla.jpg">
                <div class="card-body">
                    <h5 class="card-title">Toalla</h5>
                    <p class="card-text">Toalla de viaje, para cada fin de semana.</p>
                </div>
            </div>
            <div class="col-sm-2 card card-body" id="cardclass">
                <img src="img/Tarjetas.jpg">
                <div class="card-body">
                    <h5 class="card-title">Pack Tarjetas</h5>
                    <p class="card-text">Maravillosas tarjetas para expulsa a gente.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <h3> Nuevos productos </h3>
        <div class="row">
            <div class="col-sm-2 card card-body" id="cardclass">
                <img src="img/Brazalete.jpg">
                <div class="card-body">
                    <h5 class="card-title">Brazalete</h5>
                    <p class="card-text">Brazalete oficial de capitan.</p>
                </div>
            </div>
            <div class="col-sm-2 card card-body" id="cardclass">
                <img src="img/Spray.jpg">
                <div class="card-body">
                    <h5 class="card-title">Spray arbitro</h5>
                    <p class="card-text">Spray que respeta el crecimientmo del cesped natural.</p>
                </div>
            </div>
            <div class="col-sm-2 card card-body" id="cardclass">
                <img src="img/Toalla.jpg">
                <div class="card-body">
                    <h5 class="card-title">Toalla</h5>
                    <p class="card-text">Toalla de viaje, para cada fin de semana.</p>
                </div>
            </div>
            <div class="col-sm-2 card card-body" id="cardclass">
                <img src="img/Tarjetas.jpg">
                <div class="card-body">
                    <h5 class="card-title">Pack Tarjetas</h5>
                    <p class="card-text">Maravillosas tarjetas para expulsa a gente.</p>
                </div>
            </div>
        </div>
    </div>


    <!-- LAYOUT: FOOTER -->
    <footer class="row border-top">
        <div class="col">
            <h5>Acerca de</h5>
            <ul class="nav flex-column">
                <li class="nav-item"><a href="#" class="nav-link p-0 text-body-secondary">Quiénes somos</a></li>
                <li class="nav-item"><a href="#" class="nav-link p-0 text-body-secondary">Trabaja con nosotros</a></li>
                <li class="nav-item"><a href="#" class="nav-link p-0 text-body-secondary">Aviso legal</a></li>
            </ul>
        </div>

        <div class="col">
            <h5>Navegación</h5>
            <ul class="nav flex-column">
                <li class="nav-item"><a href="#" class="nav-link p-0 text-body-secondary">Idioma/ languajes</a></li>
                <li class="nav-item"><a href="#" class="nav-link p-0 text-body-secondary">Mapa del sitio</a></li>
        </div>

        <div class="col">
            <h5>Ayuda</h5>
            <ul class="nav flex-column">
                <li class="nav-item"><a href="#" class="nav-link p-0 text-body-secondary">Gestionar compras</a></li>
                <li class="nav-item"><a href="#" class="nav-link p-0 text-body-secondary">Tarifas y políticas de envío</a></li>
                <li class="nav-item"><a href="#" class="nav-link p-0 text-body-secondary">Devolver o reemplazar productos</a></li>
                <li class="nav-item"><a href="#" class="nav-link p-0 text-body-secondary">Contacto para ayuda</a></li>
                <li class="nav-item"><a href="#" class="nav-link p-0 text-body-secondary">Iva sobre los bienes</a></li>
                <li class="nav-item"><a href="#" class="nav-link p-0 text-body-secondary">Método de pago</a></li>
            </ul>
        </div>

        <div class="col">
            <h5>Contacto</h5>
            <ul class="nav flex-column">
                <li class="nav-item"><a href="#" class="nav-link p-0 text-body-secondary">Atención al cliente</a></li>
                <li class="nav-item"><a href="#" class="nav-link p-0 text-body-secondary">Twitter
                        <svg class="bi me-2" width="30" height="25">
                            <use xlink:href="#twitter" />
                        </svg>
                    </a></li>
                <li class="nav-item"><a href="#" class="nav-link p-0 text-body-secondary">Facebook</a></li>
                <li class="nav-item"><a href="#" class="nav-link p-0 text-body-secondary">Youtube</a></li>
                <li class="nav-item"><a href="#" class="nav-link p-0 text-body-secondary">Instagram</a></li>
            </ul>
        </div>
    </footer>


    <!-- Loading Javascripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
</body>

</html>