<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except' => ['index','menu','product']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $products_controller = new ProductsController();
        $hot_sales = $products_controller->hotSalesProducts();
        return view('homeshop',['hot_sales'=>$hot_sales]);
    }
    public function menu(){
        $products_controller = new ProductsController();
        $products = $products_controller->getProducts();
        return view('menu',['products'=>$products]);
    }
    public function addProduct(){
        return view('addProduct');
    }
    public function product($product_id){
        $products_controller = new ProductsController();
        $product = $products_controller->getProductDetails($product_id);
        return view("product",['product'=>$product]);
    }
    public function editProduct($product_id){
        $products_controller = new ProductsController();
        $product = $products_controller->getProductDetails($product_id);
        return view("editProduct",['product'=>$product]);
    }
}
