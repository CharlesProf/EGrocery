<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = Item::paginate(10);
        return view('home', compact('data'));
    }

    public function landingpage(){
        return view('index');
    }
}
