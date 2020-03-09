<?php

namespace App\Http\Controllers;

use App\Pelanggan;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = Pelanggan::orderBy('status','desc')->orderBy('id','asc')->get();
        return view('users.index',[
            'users'=>$users
        ]);
    }

    public function create(){
        return view('users.create');
    }

    public function save(Request $request){
        $request->validate([
            'nama'=>'required|string',
            'username'=>'required|string',
            'main_image'=>'required|image',
            'no_hp'=>'required|string',
            'alamat'=>'required|string',
        ]);
        if ($request->file('main_image') != '') {
            $main_image = uniqid().'.'.$request->file('main_image')->getClientOriginalExtension();
            $request->file('main_image')->move(storage_path('app/public/images'), $main_image);
            $main_image_path = '/storage/images/'.$main_image;
        }
        $pelanggan = new Pelanggan();
        $pelanggan->nama = $request->nama;
        $pelanggan->username = $request->username;
        $pelanggan->foto = $main_image_path;
        $pelanggan->no_hp = $request->no_hp;
        $pelanggan->alamat = $request->alamat;
        $pelanggan->status = 1;
        $pelanggan->save();

        return redirect('/users')->with([
            'message'=>'Pelanggan berhasil ditambahkan',
            'type'=>'success'
        ]);
    }

    public function userOn(Request $request, $id){
        $user = Pelanggan::find($id);
        $user->status = 1;
        $user->save();

        return redirect()->back();
    }

    public function userOff(Request $request, $id){
        $user = Pelanggan::find($id);
        $user->status = 0;
        $user->save();

        return redirect()->back();
    }

}
