<?php

namespace App\Http\Controllers;

use App\Log;
use App\Pelanggan;
use App\Product;
use App\Transaksi;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function pin(){
        if(auth()->user()){
            return redirect('/home');
        }
        return view('pin');
    }

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

    public function login(Request $request){
        $request->validate([
            'password'=>'required|string|min:6|max:6'
        ]);
        if($request->password == env('APP_PASSWORD')){
            $user = User::first();
            if(!is_null($user)){
                auth()->login($user);
                return redirect('/home');
            }
        } else {
            return redirect()->back()->withErrors('PIN Salah');
        }
    }

    public function bill(){
        $list = DB::table('table_transaksi')
            ->selectRaw('id_pelanggan, sum(harga_jual) as harga, count(harga_jual) as transaksi')
            ->where('status',Transaksi::STATUS_BON)
            ->groupBy('id_pelanggan')
            ->orderBy('harga','desc')
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

    public function bayar($id){
        $pelanggan = Pelanggan::find($id);
        $transactions = Transaksi::where('id_pelanggan',$id)->where('status',Transaksi::STATUS_BON)->get();
        $nomor_tx = 'Nomor transaksi yang terbayar : ';
        $tagihan = 0;
        foreach ($transactions as $transaction){
            $nomor_tx .= $transaction->id.', ';
            $tagihan+=$transaction->harga_jual;

            $tx = Transaksi::find($transaction->id);
            $tx->status = Transaksi::STATUS_LUNAS;
            $tx->save();
        }

        $log = new Log();
        $log->id_pelanggan = $id;
        $log->tagihan = $tagihan;
        $log->detail = $nomor_tx;
        $log->status = Log::STATUS_LUNAS;
        $log->save();
        $url = "https://api.whatsapp.com/send?phone=$pelanggan->no_hp&text=Halo $pelanggan->username ,%0APada hari ini, tanggal ".now()->format('d F Y').", Tagihanmu sebesar Rp. ".number_format($tagihan,0,'.',',').",%0ASudah saya nyatakan *LUNAS*. Terima Kasih.%0A%0AIjlik%0A_Pesan ini dibuat otomatis_";
        return redirect($url);
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
