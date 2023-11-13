<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use App\Models\Cart;
use App\Models\Product;

class CartTest extends TestCase
{
    public static $cart;
    public function InitializeCart()
    {
        $cart = new Cart();

        $cart->add(Product::first());
        $cart->add(Product::first());
        $cart->add(Product::skip(1)->first());
        $cart->add(Product::skip(1)->first());
        $cart->add(Product::skip(2)->first());

        return $cart;
    }

    public function testConstructor()
    {
        $cart = self::InitializeCart();

        $this->assertEquals($cart->htItem[1]['id'], 1);
        $this->assertEquals($cart->htItem[2]['id'], 2);
        $this->assertEquals($cart->htItem[3]['id'], 3);

        $this->assertEquals($cart->iTotalItems, 5);
        $this->assertTrue(abs(102.2 - $cart->dTotalPrice) < 0.0001);
    }

    public function testAdd()
    {
        $cart = self::InitializeCart();

        $cart->add(Product::first());
        $cart->add(Product::first());
        $this->assertEquals($cart->iTotalItems, 7);
        echo $cart->dTotalPrice;
        $this->assertTrue(abs(109.4 - $cart->dTotalPrice) < 0.0001);


        $cart->add(Product::skip(1)->first());
        $cart->add(Product::skip(1)->first());
        $this->assertEquals($cart->iTotalItems, 9);
        $this->assertTrue(abs(189.4 - $cart->dTotalPrice) < 0.0001);
    }

    public function testRemove()
    {
        $cart = self::InitializeCart();

        $cart->remove(Product::first());
        $cart->remove(Product::skip(1)->first());
        $cart->remove(Product::skip(2)->first());
        $this->assertEquals($cart->htItem[1]['quantity'], 1);
        $this->assertEquals($cart->htItem[2]['quantity'], 1);
        $this->assertEquals($cart->htItem[3]['quantity'], 0);
    }

    public function testRemoveAll()
    {
        $cart = self::InitializeCart();
        $cart->removeAll(Product::skip(1)->first());
        $cart->removeAll(Product::skip(2)->first());
        $this->assertEquals($cart->iTotalItems, 2);
        $this->assertTrue(abs(7.2 - $cart->dTotalPrice) < 0.0001);
    }
}
