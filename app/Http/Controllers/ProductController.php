<?php

namespace App\Http\Controllers;

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
}
