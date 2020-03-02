<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
    public function bill(){
        return view('bill');
    }
    public function product(){
        $products = Product::orderBy('status','desc')->orderBy('id','asc')->get();
        return view('product',[
            'products'=>$products
        ]);
    }
    public function productOn(Request $request, $id){
        $product = Product::find($id);
        $product->status = 1;
        $product->save();

        return redirect()->back();
    }
    public function productOff(Request $request, $id){
        $product = Product::find($id);
        $product->status = 0;
        $product->save();

        return redirect()->back();
    }
}
