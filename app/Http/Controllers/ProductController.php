<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product = "Laptop Gaming";
        $products = [
            'Laptop Gaming',
            'Laptop Ultrabook'

        ];
        // return view('product', compact('product'));
        // return view('product', [
        //     'product1' => 'Laptop Gaming',
        //     'product2' => 'Laptop Ultrabook'
        // ]);
        return view(
            'product',
            [
                'products' => $products
            ]
        );
    }
    public function show($id)
    {
        return "Product " . $id;
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        return 'Hasil pencarian: ' . $search;
    }
    public function store()
    {
        Product::create([
            'name' => 'Laptop Gaming',
            'price' => 5000000,
            'stock' => 10
        ]);
        return "product berhasil ditambahkan";
    }
}
