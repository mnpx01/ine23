<!doctype html>
<!-- Bootstrap first template for Internet y Negocio Electrónico, University of Cadiz,
     since 2019, based on https://www.w3schools.com/bootstrap4/bootstrap_templates.asp -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <meta name="description" content="ArbiFut Inc. articles Shop">
    <link rel="shortcut icon" href="ico/logo.ico">
    <!-- 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script> 
    -->
    <style>
        body {
            margin: 0;
            padding: 0;
            background-size: 100vw 100vh;
        }

        header {
            background: linear-gradient(to top, LightGreen, white);
        }

        footer {
            background: linear-gradient(to bottom, LightGreen, white);
        }

        a.icon-link {
            color: black;
            font-size: 24px;
            text-decoration: none;
        }

        .card-img-top {
            width: 150px;
            height: 150px;
        }

        #imgcardnav {
            width: 100px;
            height: 100px;
        }

        #cards {
            width: 200px;
            height: auto;
            align-items: center;
            border: none;

        }

        #sidenavlateral {
            background: linear-gradient(to bottom, LightGray 20%, White);
        }

        #cardlateralnav {
            margin-top: 20px;
            background-color: whitesmoke;
            border: none;
        }

        p.card-text {
            line-height: 15px;
            font-weight: 650;
        }
    </style>

    <title>ArbiFut Inc.</title>
</head>

<body>

    <!-- LAYOUT: HEADER -->

    <!-- SECTION: Title -->
    <header class="jumbotron mt-0 ml-0" style="margin-top: 20px;">
        <nav class="navbar navbar-expand-sm">
            <div class="col-sm-3" style="margin-left: 20px;">
                <h1>ArbiFut Inc. Shop</h1>
            </div>

            <div class="col-sm-3" style="margin-left: -80px;">
                <form class="d-flex form-inline" role="search">
                    <input class="form-control me-4" type="search" name="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-success bg-white" type="submit">Buscar</button>
                </form>
            </div>

            <div class="col-sm-4"></div>

            <div class="col-sm-1" style="padding-left: 120px;">
                <a class="icon-link" href="#"> Autenticación </a>
            </div>
            <div class="col-sm-1" style="padding-left: 120px;">
                <img src="img/shoppingcart.png" style="width: 50px; height: 50px;">
            </div>

        </nav>
    </header>




    <div class="row" style="max-width: 99vw; padding-left: 20px;">
        <div class="col-sm-9">
            <h3 style="margin-top: 20px;"> Ofertas del día </h3>
            <div class="row">
                <div class="col-sm-2 card card-body" id="cards">
                    <a href="#"><img class="card-img-top" src="img/Brazalete.jpg"></a>
                    <div class="card-body">
                        <h4 class="card-title">Brazalete</h4>
                        <p class="card-subtitle">Brazalete oficial de capitán.<br><br></p>
                        <p class="card-text" style="text-decoration: line-through;">Antes: 5.50€</p>
                        <p class="card-text">Ahora: 3.50€</p>
                    </div>
                </div>
                <div class="col-sm-2 card card-body" id="cards">
                    <a href="#"><img class="card-img-top" src="img/Spray.jpg"></a>
                    <div class="card-body">
                        <h4 class="card-title">Spray Árbitro</h4>
                        <p class="card-subtitle">Spray que respeta el crecimiento del césped natural.<br><br></p>
                        <p class="card-text" style="text-decoration: line-through;">Antes: 10.80€</p>
                        <p class="card-text">Ahora: 6.40€</p>
                    </div>
                </div>
                <div class="col-sm-2 card card-body" id="cards">
                    <a href="#"><img class="card-img-top" src="img/Toalla.jpg"></a>
                    <div class="card-body">
                        <h4 class="card-title">Toalla</h4>
                        <p class="card-subtitle">Toalla de viaje, para cada fin de semana.<br><br></p>
                        <p class="card-text" style="text-decoration: line-through;">Antes: 15.00€</p>
                        <p class="card-text">Ahora: 12.00€</p>
                    </div>
                </div>
                <div class="col-sm-2 card card-body" id="cards">
                    <a href="#"><img class="card-img-top" src="img/Tarjetas.jpg"></a>
                    <div class="card-body">
                        <h4 class="card-title">Pack Tarjetas</h4>
                        <p class="card-subtitle">Tarjetas personalizadas para amonestar y expulsar
                            a jugadores infractores.<br><br></p>
                        <p class="card-text" style="text-decoration: line-through;">Antes: 7.60€</p>
                        <p class="card-text">Ahora: 3.80€</p>
                    </div>
                </div>
            </div>

            <h4 style="margin-top: 20px;"> Nuevos productos </h4>
            <div class="row">
                <div class="col-sm-2 card card-body" id="cards">
                    <a href="#"><img class="card-img-top" src="img/BalonAdidas.jpg"></a>
                    <div class="card-body">
                        <h5 class="card-title">Balón Adidas</h5>
                        <p class="card-subtitle">Balón de fútbol 11 Adidas.<br><br></p>
                        <p class="card-text">24.00€</p>
                    </div>
                </div>
                <div class="col-sm-2 card card-body" id="cards">
                    <a href="#"><img class="card-img-top" src="img/banderinesi.jpg"></a>
                    <div class="card-body">
                        <h4 class="card-title">Banderines</h4>
                        <p class="card-subtitle">Banderines para árbitros asistentes.<br><br></p>
                        <p class="card-text">40.00€</p>
                    </div>
                </div>
                <div class="col-sm-2 card card-body" id="cards">
                    <a href="#"><img class="card-img-top" src="img/Bidon.jpg"></a>
                    <div class="card-body">
                        <h4 class="card-title">Bidón</h4>
                        <p class="card-subtitle">Bidón Nike para sesiones de alta intensidad.<br><br></p>
                        <p class="card-text">13.70€</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-sm-2 sidenav" id="sidenavlateral" style="margin-top: 20px; margin-left: 145px;">
            <h2>Más vendido</h2>
            <div class="card card-body" id="cardlateralnav">
                <h4 class="card-title">1º
                    <a href="#"><img class="card-img-top" id="imgcardnav" src="img/reloj-spintso-s1-.jpg"></a>
                </h4>
            </div>
            <div class="card card-body" id="cardlateralnav">
                <h4 class="card-title">2º
                    <a href="#"><img class="card-img-top" id="imgcardnav" src="img/Gafas.jpg"></a>
                </h4>
            </div>
            <div class="card card-body" id="cardlateralnav">
                <h4 class="card-title">3º
                    <a href="#"><img class="card-img-top" id="imgcardnav" src="img/Espinilleras.jpg"></a>
                </h4>
            </div>
            <div class="card card-body" id="cardlateralnav">
                <h4 class="card-title">4º
                    <a href="#"><img class="card-img-top" id="imgcardnav" src="img/guantesAbrigo.jpg"></a>
                </h4>
            </div>
            <div class="card card-body" id="cardlateralnav" style="border: none;">
                <a href="#" class="btn btn-primary">Ver más artículos</a>
            </div>
        </div>
    </div>




    <!-- LAYOUT: FOOTER -->
    <footer class="jumbotron mb-0 ml-0" style="margin-top: 20px; padding: 20px;">
        <div class="row">
            <div class="col-sm-3">
                <h5>Acerca de</h5>
                <ul class="nav flex-column">
                    <li class="nav-item"><a href="#" class="nav-link p-0 text-body-secondary">Quiénes somos</a></li>
                    <li class="nav-item"><a href="#" class="nav-link p-0 text-body-secondary">Trabaja con nosotros</a></li>
                    <li class="nav-item"><a href="#" class="nav-link p-0 text-body-secondary">Aviso legal</a></li>
                </ul>
            </div>

            <div class="col-sm-3">
                <h5>Navegación</h5>
                <ul class="nav flex-column">
                    <li class="nav-item"><a href="#" class="nav-link p-0 text-body-secondary">Idioma/ languajes</a></li>
                    <li class="nav-item"><a href="#" class="nav-link p-0 text-body-secondary">Mapa del sitio</a></li>
            </div>

            <div class="col-sm-3">
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

            <div class="col-sm-3">
                <h5>Contacto</h5>
                <ul class="nav flex-column">
                    <li class="nav-item"><a href="#" class="nav-link p-0 text-body-secondary">Atención al cliente</a></li>
                    <li class="nav-item"><a href="#" class="nav-link p-0 text-body-secondary">Twitter</a></li>
                    <li class="nav-item"><a href="#" class="nav-link p-0 text-body-secondary">Facebook</a></li>
                    <li class="nav-item"><a href="#" class="nav-link p-0 text-body-secondary">Youtube</a></li>
                    <li class="nav-item"><a href="#" class="nav-link p-0 text-body-secondary">Instagram</a></li>
                </ul>
            </div>
        </div>
    </footer>


    <!-- Loading Javascripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
</body>

</html>