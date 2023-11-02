<body>

    @extends('templates.master')

    <!-- LAYOUT: HEADER -->


    <!-- LAYOUT: CENTER -->

    @section('content-center')
    <div class="row" style="max-width: 99vw; padding-left: 20px;">
        <div class="col-sm-9">
            <h3 style="margin-top: 20px;"> Ofertas del día </h3>
            <div class="row">
                @foreach ($aProduct_offering as $producto)
                <div class="col-sm-2 card card-body" id="cards">
                    <a href="product/{{$producto->id}}"><img class="card-img-top" src="{{$producto->imgUrl}}"></a>
                    <div class="card-body">
                        <h4 class="card-title"> {{$producto->name}} </h4>
                        <p class="card-subtitle"> {{$producto->description}} <br><br></p>

                        @if ($producto->discountPercent > 0)
                        <p class="card-text" style="text-decoration: line-through;">{{"Antes: " . $producto->price . "€"}} </p>
                        <p class="card-text"> {{" Ahora: " . ($producto->price - ($producto->price * $producto->discountPercent) . "€")}} </p>
                        @else
                        <p class="card-text"> {{ "Ahora:" .  $producto->price }} </p>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>

            <h4 style="margin-top: 20px;"> Nuevos productos </h4>
            <div class="row">
                @foreach ($aProduct_new as $producto)
                <div class="col-sm-2 card card-body" id="cards">
                    <a href="product/{{$producto->id}}"><img class="card-img-top" src="{{$producto->imgUrl}}"></a>
                    <div class="card-body">
                        <h4 class="card-title"> {{$producto->name}} </h4>
                        <p class="card-subtitle"> {{$producto->description}} <br><br></p>

                        @if ($producto->discountPercent > 0)
                        <p class="card-text" style="text-decoration: line-through;">{{"Antes: " . $producto->price . "€"}} </p>
                        <p class="card-text"> {{" Ahora: " . ($producto->price - ($producto->price * $producto->discountPercent) . "€")}} </p>
                        @else
                        <p class="card-text"> {{ "Precio:" .  $producto->price }} </p>
                        @endif
                    </div>
                </div>
                @endforeach
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