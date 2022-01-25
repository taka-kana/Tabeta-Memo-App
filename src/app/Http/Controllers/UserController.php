<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create() {
        return view('auth.register');
    }

public function store(UserRequest $request) {
    $user = new User;
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->save();
    return redirect()->route('popup');
}

    public function getPopup() {
    return view('auth.popup');
    }

    //public function mypage() {
        //return view('auth.mypage', compact('user'));
    //}
}
