<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function buy($id){
        Order::create([
            'user_id'=>Auth::user()->id,
            'item_id'=>$id
        ]);

        return redirect('/cart');
    }

    public function showCart(){

        $data = Order::where('user_id','like', Auth::user()->id)->get();
        // dd($data);
        return view('cart', compact('data'));
    }

    public function deleteCart($id){
        Order::where('item_id','like', $id)->delete();
        $data = Order::where('user_id','like', Auth::user()->id)->get();
        return view('cart', compact('data'));
    }

    public function succ(){
        return view('berhasil');
    }

    public function cekOut(){
        $data = Order::where('user_id','=', Auth::user()->id)->get();
        foreach($data as $p){
            Item::where('id', '=', $p->item_id)->delete();
        }
        Order::where('user_id','=', Auth::user()->id)->delete();
        return view('berhasil');
    }
}
