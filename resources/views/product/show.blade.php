<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
?>

@extends('templates.master')

<body>
    @section('content-center')
    @foreach ($errors->all() as $sError)
    <div class="alert alert-warning">{{ $sError }}</div>
    @endforeach

    <div class="col-sm-4 card card-body" id="cards">
        <img class="card-img-top" src="/{{$product->imgUrl}}">
        <div class="card-body">
            <h4 class="card-title"> {{$product->name}} </h4>
            <h5 class="card-subtitle"> {{$product->Company->name}} <br><br></h2>
                <p class="card-subtitle"> {{$product->description}} <br><br></p>

                @if ($product->discountPercent > 0)
                <p class="card-text" style="text-decoration: line-through;">{{"Antes: " . $product->price . "€"}} </p>
                <p class="card-text"> {{" Ahora: " . ($product->price - ($product->price * $product->discountPercent) . "€")}} </p>
                @else
                <p class="card-text"> {{ "Precio:" .  $product->price }} </p>
                @endif
                @if (Auth::user() && User::isEditor(Auth::user()))
                <a href="{{ route('product.edit', $product->id) }}" class="btn btn-primary"> Editar </a>
                @endif
                <a href="{{ route('cart.add', $product->id) }}" class="btn btn-primary" style="margin-top: 10px;"> Añadir al carrito </a>
        </div>
    </div>
    @endsection
</body>