<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Product;

class ProductsController extends Controller
{
    public function addProduct(Request $request){

        $this->validate($request, [
            'title' => 'required',
            'product_image' => 'image|nullable|max:1999',
            'description' => 'required',
            'title' => 'required',
            'price' => 'required'
        ]);
        if($request->hasFile('product_image')){
            $filenameWithExt = $request->file('product_image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('product_image')->getClientOriginalExtension();
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            $path = $request->file('product_image')->storeAs('public/images', $fileNameToStore);
        }
        else {
            $fileNameToStore = 'noimage.jpg';
        }


        $product = new Product;
        $product->user_id = auth()->user()->id;
        $product->category = $request->input('category');
        $product->image = $fileNameToStore;
        $product->title = $request->input('title');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        
        $product->save();

        return redirect('/menu')->with('success', 'Post Created');
    }

    public function getProducts(){
        $products = Product::orderBy('created_at','desc')->paginate(9);
        return $products;
    }

    public function getProductDetails($product_id){
        $product = Product::where('product_id',$product_id)->get();
        return $product;
    }

    public function hotSalesProducts(){
        $product = Product::orderBy('price')->take(6)->get();
        return $product;
    }
}
