<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        // $productos = Product::get();
        $productos = Product::orderBy('id', 'DESC')->paginate(50);
        return view ('index', ['products'=>$productos]);
    }
    public function show(Product $product){
        return view('show', ['product'=>$product]);
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $request->validate(['name'=>'required']);
        Product::create($request->all());
        return redirect()->route('products.index');
    }

    public function edit(Product $product){
        return view('edit', ['product'=>$product]);
    }

    public function update(Request $request, Product $product){
        $request->validate(['name'=>'required']);
        $product->update($request->all());
        return redirect()->route('products.index');
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect()->route('products.index');
    }
}
