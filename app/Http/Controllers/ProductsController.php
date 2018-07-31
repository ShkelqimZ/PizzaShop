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

    public function editProduct(Request $request){
        $product_id = $request->input('product_id');
        if($request->hasFile('product_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('product_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('product_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('product_image')->storeAs('public/images', $fileNameToStore);
        }

        $product = Product::find($product_id);
        $product->category = $request->input('category');
        if($request->hasFile('product_image')){
            $product->image = $fileNameToStore;
        }
        $product->title = $request->input('title');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        
        $product->save();
        // $product = new Product();
        // $product -> where('product_id',$request->input("product_id")) -> update([
        //     "category" => $request->input("category"),
        //     "image" => $request->input("product_image"),
        //     "title" => $request->input("title"),
        //     "description" => $request->input("description"),
        //     "price" => $request->input("price"),
        // ]);

        return redirect('/menu');
    }

    public function hotSalesProducts(){
        $product = Product::orderBy('price')->take(6)->get();
        return $product;
    }
}
