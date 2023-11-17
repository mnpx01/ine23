<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function show()
    {
        $cart = session()->get('cart');
        return view('cart.show', compact('cart'));
    }

    public function add(Product $product)
    {
        session()->get('cart')->add($product);
        $cart = session()->get('cart');
        return view('cart.show', compact('cart'));;
    }

    public function remove(Product $product)
    {
        session()->get('cart')->remove($product);
        $cart = session()->get('cart');
        return view('cart.show', compact('cart'));
    }

    public function removeAll(Product $product)
    {
        session()->get('cart')->removeAll($product);
        $cart = session()->get('cart');
        return view('cart.show', compact('cart'));
    }

    public function operate($sOperation, Product $product, Request $request)
    {
        switch ($sOperation) {
            case 'add':
                session()->get('cart')->add($product);
                break;
            case 'remove':
                session()->get('cart')->remove($product);
                break;
            case 'removeAll':
                session()->get('cart')->removeAll($product);
                break;
            default:
                break;
        }
        $cart = session()->get('cart');
        return view('cart.show', compact('cart'));
    }
}
