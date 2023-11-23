<header class="jumbotron mt-0 ml-0" style="margin-top: 20px;">
    <nav class="navbar navbar-expand-sm">
        <div class="col-sm-3" style="margin-left: 20px;">
            <a class="icon-link" href="/">
                <h1>ArbiFut Inc. Shop</h1>
            </a>
        </div>

        <div class="col-sm-3" style="margin-left: -80px;">
            <form class="d-flex form-inline" role="search">
                <input class="form-control me-4" type="search" name="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-success bg-white" type="submit">Buscar</button>
            </form>
        </div>

        <div class="col-sm-2"></div>


        <div class="col-sm-1" style="padding-right: 350px;">
            @if(Auth::check())
            <a class="icon-link" href="{{ route('dashboard') }}"> {{ Auth::user()->name }} </a>
            <a class="icon-link" href="{{ route('logout') }}"> <img src="/img/exitdoor.png" style="width: 40px; height: 40px;" /> </a>
            @else
            <a class="icon-link" href="{{ route('login') }}"> Autenticación </a>
            @endif
        </div>
        <div class="col-sm-1">
            <a href="{{ route('cart.show') }}">
                <img src="/img/shoppingcart.png" style="width: 50px; height: 50px;" />
            </a>
        </div>
        <div class="col-sm-1" style="font-size: 30px; font-weight: 600;">
            <?php if (session()->has('cart') && session()->get('cart')->iTotalItems > 0) {
                echo session()->get('cart')->iTotalItems;
            } ?>
        </div>
    </nav>
</header>