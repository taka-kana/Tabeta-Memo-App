<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{
//ユーザー登録
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
public function getPopup()
{
    return view('auth.popup');
}

//ログイン
public function getLogin()
{
    return view('user.login');
}
public function postLogin(Request $request)
{
    $this->validate($request,[
        'email' => 'email|required',
        'password' => 'required|min:8'
        ]);
    if(Auth::attempt(['email' => $request->input('email'),'password' => $request->input('password')])){
        return redirect()->route('index');
    }
    return redirect()->back();
}
//ログアウト
public function getLogout()
{
    Auth::logout();
    return redirect()->route('getLogin');
}

//マイページ
public function mypage()
{
    return view('user.mypage');
}

    //public function mypage() {
        //return view('auth.mypage', compact('user'));
    //}
}
