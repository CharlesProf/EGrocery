<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    public function detailItem($id){
        $data = Item::where('id', 'like', $id)->first();
        return view('itemDetail', compact('data'));
    }

    public function addItem(){
        return view('addItem');
    }

    public function store(Request $request){
        $request->validate([
            'item_name'=>'required|max:50',
            'item_desc'=>'required|string|max:500',
            'price'=>'required|numeric',
            'display_picture_link'=>'required|file||image'
        ]);

        $data = ([
            'item_name'=> $request->item_name,
            'item_desc'=>$request->item_desc,
            'price'=>$request->price,
            'display_picture_link'=>$request->display_picture_link
        ]);
        if($request->file('display_picture_link')){
            $data['display_picture_link'] = $request->file('display_picture_link')->store('img');
        }
        Item::create($data);

        return redirect('/');

    }

    public function editItem($id){
        $data = Item::where('id', 'like', $id)->first();
        return view('editItem', compact('data'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'price'=>'required|numeric'
        ]);

        Item::where('id', 'like', $id)->update([
            'price'=>$request->price
        ]);
        $data = Item::where('id', 'like', $id)->first();
        return view('itemDetail', compact('data'));
    }


    public function delete($id){
        $data = Item::where('id', 'like', $id)->first();
        Storage::disk('public')->delete($data->display_picture_link);
        Item::where('id', 'like', $id)->delete();
        return redirect('/');
    }
}
