<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function create()
    {
        return view('product.add');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);     

        $product = new Product;
        $product->title = $request->name;
        $product->description = $request->description;
        $product->user_id = auth()->user()->id;
        $product->category = $request->category;

        if ($request->has('image')) {
            $img = $request->file('image');
            $path = $img->store('products');
            $product->image_url = $path;
        }

        $product->save();

        return view('product.add');
    }

    public function dashboard()
    {
        $products = auth()->user()->products()->get();

        return view('dashboard', compact('products'));
    }

    public function home()
    {
        $products = Product::all();

        return view('home', compact('products'));
    }
}
