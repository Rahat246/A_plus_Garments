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
         //dd($request->all());
        $request->validate([
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageData = file_get_contents($request->file('product_image')->getRealPath());
        $maxLength = 16777215;

        if (strlen($imageData) > $maxLength) {
            $imageData = substr($imageData, 0, $maxLength);
        }

        Product::create([
            'product_image'=>$imageData 
        ]);

        return redirect()->route('product.list');
    }

    public function productList(){
        $Products=Product::all();
        return view('Backend.product.productlist',['Products'=>$Products],compact('Products'));

        //return view('backend.page.product.productlist');
    }

    public function productDelete($id)
    {
        $Products=Product::find($id);
        if($Products){
            $Products->delete();
        }
        return back();
    }

    public function productEdit($id)
    {
        $Products=Product::find($id);
        return view('Backend.product.productedit',compact('Products'));
    }

    public function productUpdate(Request $request, $id)
    {
        $Products=Product::find($id);
        $request->validate([
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageData = file_get_contents($request->file('product_image')->getRealpath());
        $maxLength=16777215;

        if (strlen($imageData) > $maxLength) {
            $imageData = substr($imageData, 0, $maxLength);
        }

        $Products->update([
            'product_image'=>$imageData 
        ]);
        return redirect()->route('product.list');

    }
}
