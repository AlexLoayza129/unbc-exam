<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create(){
        return view('users.create');
    }

    public function save(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->status = 1;
        $user->created_at = Date::now();
        $user->updated_at = Date::now();
        $user->save();

        return redirect()->route('home');
    }

    public function edit($id){
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request){
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->phone = $request->phone;
        $user->status = $request->status;
        $user->save();

        return redirect()->route('home');
    }

    public function delete($id){
        $user = User::find($id);
        $user->status = 0;
        $user->save();
        return redirect()->route('home');
    }
}
