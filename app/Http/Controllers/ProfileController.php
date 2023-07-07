<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index($id){
        $user = User::where('id', 'like', Auth::user()->id)->first();
        return view('profile', compact('user'));
    }

    public function saved(){
        return view('saved');
    }

    public function update(Request $request){
        $request->validate([
            'first_name'=>'required|regex:/^[\w\s]+$/|min:1|max:25',
            'last_name'=>'required|regex:/^[\w\s]+$/|min:1|max:25',
            // 'role_id'=>'required|numeric',
            'gender_id'=>'required|numeric',
        ]);
        if($request->email != Auth::user()->email){

            $request->validate([
                'email'=>'required|unique:users,email|email'
            ]);
        }
        if($request->password != Auth::user()->password){

            $request->validate([
                'password'=>'required|alpha_num|regex:/[0-9]/|min:8||confirmed',
                'password_confirmation'=>'required'
            ]);
        }

        User::where('id', 'like', Auth::user()->id)->update([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            // 'role_id'=>$request->role_id,
            'gender_id'=>$request->gender_id,
            'password'=>Hash::make($request->password),
        ]);
        if($request->file('display_picture_link')){
            if($request->old_display_picture_link != $request->display_picture_link){
                Storage::disk('public')->delete($request->old_display_picture_link);
            }
              User::where('id', 'like', Auth::user()->id)->update([
                  'display_picture_link' => $request->file('display_picture_link')->store('public')
              ]);
        }
        return redirect('/');
    }

    public function maint(Request $request){
        $user = User::all();
        // $joinMaintenance = User::where('id','=', $id)->join('roles','roles.id','=','users.role_id');
        return view('maintenance', compact('user'));
    }

    public function showUpdate($id){
        $user = User::where('id', '=', $id)->first();
        return view('updateRole', compact('user'));
    }
    public function updateAcc(Request $request, $id){
        // dd($request);
        $user = User::where('id', '=', $id)->first();
        $user->update([
            'role_id' => $request->role_id
        ]);

        return back();
    }

    public function delete($id){
        $user = User::where('id', '=', $id)->first();
        Storage::disk('public')->delete($user->display_picture_link);
        User::where('id', '=', $id)->delete();
        $user = User::all();
        return view('maintenance', compact('user'));
    }
}
