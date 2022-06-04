<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class LoginController extends Controller
{
    public function loginForm(){
        return view('auth.login');
    }

    public function postLogin(LoginRequest $request){
        $email = $request->email;
        $password = $request->password;
        if(Auth::attempt(['email' => $email, 'password' => $password], $request->remember)){
            if(Auth::user()->role_id == 1){
                return redirect()->route('user.index');
            }else{
                return redirect()->route('role.index');
            }
        }
        return back()->with('msg', 'Tài khoản/mật khẩu không chính xác');
    }
    public function register(){
        return view('auth.register');
    }
    public function saveregister(RegisterRequest $request){
        $model = new User();
        $model->fill($request->all());
        $model->password = Hash::make($request->password);
        $model->role_id = 2;
        $model->save();
    }
}