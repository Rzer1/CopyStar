<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\Models\Product;
use \App\Models\Category;
use \App\Models\Cart;
use \App\Models\User;

class MainController extends Controller
{
    public function aboutcompany()
    {
        return view('aboutcompany');
    }

    public function catalog(Request $request)
    {
        if($request->filter == null){
            $products = Product::all();
        }
        else{
            $products = Product::orderBy($request->filter, "desc")->where('id_cat', $request->category)->get();
        }

        $category = Category::all();
        return view('catalog', ["products"=>$products, "category"=>$category]);
    }

    public function mapcontacts()
    {
        return view('mapcontacts');
    }

    public function product($id)
    {
        $product = Product::find($id);
        return view('product', ["product"=>$product]);
    }
    /*Функции Корзины*/
    public function hide()
    {
        $carts = Cart::where('id_user', Auth::user()->id)->get();
        return view("cart", ["carts"=>$carts]);
    }

    public function productadd()
    {
        return view("cart");
    }
    public function pluscount()
    {
        return view("cart");
    }
    public function minuscount()
    {
        return view("cart");
    }
}
