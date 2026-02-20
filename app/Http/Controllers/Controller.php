<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                'name' => 'Laptop',
                'price' => 45000,
                'description' => 'High performance laptop'
            ],
            [
                'name' => 'Smartphone',
                'price' => 20000,
                'description' => 'Latest Android smartphone'
            ],
            [
                'name' => 'Headphones',
                'price' => 3000,
                'description' => 'Noise cancelling headphones'
            ],
            [
                'name' => 'Smartwatch',
                'price' => 8000,
                'description' => 'Waterproof smartwatch'
            ],
        ];

        return view('products', compact('products'));
    }
}