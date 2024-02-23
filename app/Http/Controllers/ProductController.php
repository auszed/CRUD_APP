<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// add the model
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){

        $products = Product::all();
        return view('products.index', ['products' => $products]);


    }

    public function create(){
        return view('products.create');
    }

    // the request are used to save the data in this function
    public function store(Request $request){
        // we access all the post method
        // dd($request);

        // access just one categorie
        // dd($request-> name);

        // we will validate the data
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,4',
            'description' => 'nullable',
        ]);

        // we will send the data to the model
        $newProduct = Product::create($data);

        return redirect(route('product.index'));
    }

    // edit the products
    public function edit(Product $product){
        // dd($product);

        return view('products.edit', [ 'product' => $product]);
    }


    // update files
    public function update(Product $product, Request $request){

        // validate the data
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,4',
            'description' => 'nullable',
        ]);

        $product->update($data);

        return redirect(route('product.index'))-> with('success', 'Product update succesfully');
    }

    // delete items
    public function delete(Product $product){

        $product->delete();

        return redirect(route('product.index'))-> with('success', 'Product delete succesfully');
    }
}
