<body>

    @extends('templates.master')

    <!-- LAYOUT: HEADER -->


    <!-- LAYOUT: CENTER -->

    @section('content-center')
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
        @endsection

        @section('content-right')
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
    @endsection


    <!-- LAYOUT: FOOTER -->


    <!-- Loading Javascripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
</body>

</html>