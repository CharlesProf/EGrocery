<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Rules\Password;
class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('register');
    }

    public function registerLogic(Request $request){
        // dd($request);
        $request->validate([
            'first_name'=>'required|regex:/^[\w\s]+$/|min:1|max:25',
            'last_name'=>'required|regex:/^[\w\s]+$/|min:1|max:25',
            'email'=>'required|unique:users,email|email',
            'role_id'=>'required|numeric',
            'gender_id'=>'required|numeric',
            'display_picture_link'=>'required|file|image',
            'password'=>'required|alpha_num|regex:/[0-9]/|min:8||confirmed',
            'password_confirmation'=>'required'
        ]);
        $data = ([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'role_id'=>$request->role_id,
            'gender_id'=>$request->gender_id,
            'display_picture_link'=>$request->display_picture_link,
            'password'=>Hash::make($request->password),
        ]);
        if($request->file('display_picture_link')){
            $data['display_picture_link'] = $request->file('display_picture_link')->store('profile', 'public');
        }
        User::create($data);

        return redirect('/login');

    }
}
