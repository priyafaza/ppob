<?php

namespace App\Http\Controllers;

use App\Pelanggan;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = Pelanggan::orderBy('status','desc')->orderBy('id','asc')->get();
        return view('users',[
            'users'=>$users
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
