<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productCreate(){
        
        return view('Backend.product.createproduct') ;
    }

    public function productSubmit(Request $request){
        // dd($request->all());
        $request->validate([
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageData = file_get_contents($request->file('product_image')->getRealPath());


        Product::create([
            'product_image'=>$request->product_image 
        ]);

        return redirect()->route('product.list');
    }

    public function productList(){
        $Products=Product::all();
        return view('Backend.product.productlist',['Products'=>$Products],compact('Products'));

        //return view('backend.page.product.productlist');
    }
}
