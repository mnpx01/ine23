@extends('templates.master')

<body>
    @section('content-center')
    @if(session()->has('cart') && session()->get('cart')->iTotalItems > 0)
    <i>
        <h1> CARRITO </h1>
    </i>
    <h4> Números de productos: {{ $cart->iTotalItems }} </h4>
    <h4> Precio total: {{ $cart->dTotalPrice }} </h4>
    @foreach ($cart->htItem as $item)
    <div class="col-sm-4 card card-body" id="cards">
        <img class="card-img-top" src="/{{ $item['imgUrl'] }}">
        <div class="card-body">
            <h4 class="card-title"> {{$item['name']}} </h4>
            <p class="card-text">{{"Precio: " . $item['price'] . "€"}} </p>
        </div>
    </div>

    <p>
        <a href="{{ route('cart.operate', [ 'operation' => 'add', 'product' => $item['id']]) }}" class="btn btn-primary"> + </a>
        <span style="font-size: 20px; font-weight: 600;"> {{ $item['quantity'] }} </span>
        <a href="{{ route('cart.operate',  [ 'operation' => 'remove', 'product' => $item['id']]) }}" class="btn btn-primary"> - </a>
    </p>
    <p> <a href="{{ route('cart.operate',  [ 'operation' => 'removeAll', 'product' => $item['id']]) }}" class="btn btn-primary">
            Eliminar producto </a>
    </p>
    </div>
    @endforeach
    @else
    <i style="font-size: 40px; font-weight: 600;"> CARRITO VACIO </i>
    @endif
    @endsection
</body>