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
        $product->image_url = 'testfoo';
        
        $product->save();

        return view('product.add');
    }
}
