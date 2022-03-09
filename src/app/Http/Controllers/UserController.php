<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;



class UserController extends Controller
{
/*==========================================================================
//ユーザー登録機能
==========================================================================*/

public function create() {
    return view('auth.register');
}
public function store(UserRequest $request) {
    $user = new User;
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->save();
    return redirect()->route('user.popup');
}
public function getPopup()
{
    return view('auth.popup');
}
/*==========================================================================
//ログイン機能
==========================================================================*/
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
        return redirect()->route('article.mymemo');
    }
    return redirect()->back();
}
/*==========================================================================
//ログアウト機能
==========================================================================*/
public function getLogout()
{
    Auth::logout();
    return redirect()->route('user.getLogin');
}
/*==========================================================================
//マイページ表示
==========================================================================*/
public function mypage()
{
    return view('user.mypage');
}
/*==========================================================================
//マイページ編集機能
==========================================================================*/
public function edit($id)
{
    $user = User::FindOrFail($id);
    if($user->id !== Auth::id()){
        return redirect('getLogin');
    }

    return view('user.useredit',['user' => $user]);
}

public function update(Request $request, $id)
{
    $user = User::FindOrFail($id);
    if($user->id !== Auth::id()){
        return redirect('user.getLogin');
    }
    $validated = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],//バリデーションから除外
    ]);

    $user->name = $request->name;
    $user->email = $request->email;
    $user->save();

    return redirect('user.mypage');
}

}
