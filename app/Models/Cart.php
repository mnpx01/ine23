<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public $htItem = [];
    public $iTotalItems = 0;
    public $dTotalPrice = 0;

    public function __Construct(Cart $cart = null)
    {
        if ($cart != null) {
            $this->htItem = $cart->htItem;
            $this->iTotalItems = $cart->iTotalItems;
            $this->dTotalPrice = $cart->dTotalPrice;
        }
    }

    public function add(Product $product)
    {
        if (array_key_exists($product->id, $this->htItem)) {
            $this->htItem[$product->id]['quantity']++;
        } else {
            $this->htItem[$product->id] = [
                'id' => $product->id,
                'name' => $product->name,
                'imgUrl' => $product->imgUrl,
                'price' => $product->price,
                'quantity' => 1
            ];
        }
        $this->iTotalItems++;
        $this->dTotalPrice += $product->price;
    }

    public function remove(Product $product)
    {
        if (array_key_exists($product->id, $this->htItem)) {
            if ($this->htItem[$product->id]['quantity'] > 1) {
                $this->htItem[$product->id]['quantity']--;
            } else {
                $this->htItem[$product->id]['quantity'] = 0;
            }
            $this->iTotalItems--;
            $this->dTotalPrice -= $product->price;
        }
    }

    public function removeAll(Product $product)
    {
        if (array_key_exists($product->id, $this->htItem)) {
            $this->iTotalItems -= $this->htItem[$product->id]['quantity'];
            $this->dTotalPrice -= $this->htItem[$product->id]['quantity'] * $product->price;
            unset($this->htItem[$product->id]);
        }
    }
}
