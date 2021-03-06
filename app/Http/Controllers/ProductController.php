<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use ShoppingCart;

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
            $path = $img->store('public');
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

    public function edit($id)
    {
        $product = Product::where('id', '=', $id)->first();

        return view('product.edit', compact('product'));
    }

    public function addCart($id)
    {
        $product = Product::where('id', '=', $id)->first();

        $row = ShoppingCart::add($id, $product->title, 1, 3.99);

        // $rawId = $row->rawId();

        return back()->with('message', '');
    }

    public function showCart()
    {
        $cart = ShoppingCart::all();

        return view('cart', compact('cart'));
    }
}
