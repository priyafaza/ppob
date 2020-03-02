<?php

namespace App\Http\Controllers;

use App\Pelanggan;
use App\Product;
use App\Transaksi;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function index(){
        $transactions = Transaksi::orderBy('status','asc')->orderBy('id','desc')->get();
        return view('transaction.index',[
            'transactions'=>$transactions
        ]);
    }

    public function detail($id){
        $transaksi = Transaksi::find($id);
        return view('transaction.detail',[
            'transaksi'=>$transaksi
        ]);
    }

    public function create(){
        $pelanggan = Pelanggan::where('status',1)->get();
        $products = Product::where('status',1)->get();
        return view('transaction.create',[
            'pelanggan'=>$pelanggan,
            'products'=>$products
            ]);
    }

    public function add(Request $request){
        $request->validate([
            'pelanggan'=>'required|integer',
            'product' => 'required|integer',
            'deskripsi'=>'required|string',
            'nominal'=> 'required|integer',
            'harga_jual'=> 'required|integer',
            'harga_beli'=> 'required|integer',
        ]);

//        dd($request->all());

            DB::transaction(function () use ($request){
            $data = new Transaksi();
            $data->id_pelanggan = $request->pelanggan;
            $data->id_product = $request->product;
            $data->harga_jual = $request->harga_jual;
            $data->harga_beli = $request->harga_beli;
            $data->status = 0;
            $data->deskripsi = $request->deskripsi;
            $data->nominal = $request->nominal;
            $data->save();
        });
        return redirect('/transaction');
    }
}
