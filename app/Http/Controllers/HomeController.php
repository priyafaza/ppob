<?php

namespace App\Http\Controllers;

use App\Pelanggan;
use App\Product;
use App\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $tx_now = Transaksi::whereMonth('created_at',now()->format('m'))->get()->sum('harga_jual');
        $modal_now = Transaksi::whereMonth('created_at',now()->format('m'))->get()->sum('harga_beli');
        $profit_now = $tx_now - $modal_now;

        $tx_all = Transaksi::get()->sum('harga_jual');
        $modal_all = Transaksi::get()->sum('harga_beli');
        $profit_all = $tx_all - $modal_all;

        $list = DB::table('table_transaksi')
            ->selectRaw('id_pelanggan, sum(harga_jual) as harga, count(harga_jual) as transaksi')
            ->groupBy('id_pelanggan')
            ->where('status',Transaksi::STATUS_LUNAS)
            ->orderBy('harga','desc')
            ->get()->take(10);

        return view('home',[
            'tx_now'=>$tx_now,
            'modal_now'=>$modal_now,
            'profit_now'=>$profit_now,
            'modal_all'=>$modal_all,
            'profit_all'=>$profit_all,
            'list'=>$list
        ]);
    }
    public function bill(){
        $list = DB::table('table_transaksi')
            ->selectRaw('id_pelanggan, sum(harga_jual) as harga, count(harga_jual) as transaksi')
            ->where('status',Transaksi::STATUS_BON)
            ->groupBy('id_pelanggan')
            ->get();

        return view('bill.index',[
            'list'=>$list
        ]);
    }
    public function billDetail($id){
        $pelanggan = Pelanggan::find($id);
        $total = Transaksi::where('id_pelanggan',$id)->where('status',Transaksi::STATUS_BON)->get()->sum('harga_jual');
        $jumlah = Transaksi::where('id_pelanggan',$id)->where('status',Transaksi::STATUS_BON)->get()->count();
        return view('bill.detail',[
            'pelanggan'=>$pelanggan,
            'total'=>$total,
            'jumlah'=>$jumlah
        ]);
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
