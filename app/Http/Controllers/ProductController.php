<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        
        // Questa riga adesso salverà il file e memorizzerà il percorso nel database
        $product->image = $request->file('image')?->store('images', 'public');
        
        $product->save();

        return redirect()->route('product.index')->with('success', 'Prodotto creato con successo!');
    }
}