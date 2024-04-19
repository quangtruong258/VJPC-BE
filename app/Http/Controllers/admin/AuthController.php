<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AdminLoginRequest;
use App\Http\Requests\AdminRegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }

    public function checkLogin(AdminLoginRequest $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];
        if (Auth::attempt($data)) {
            return redirect()->route('admin.dashboard.index')->with('success','Đăng nhập thành công');
        }
        return redirect()->route('admin.auth.login')->with('error', 'Email hoặc mật khẩu không đúng');
        
    }

    public function register()
    {
        return view('admin.auth.register');
    }

    public function checkRegister(AdminRegisterRequest $request)
    {
        // lay ip
        // $clientIP = $request->ips();
        // dd($clientIP);
        $data = $request->only('name','email');
        $data['password'] = Hash::make($request->password);
        $data['role_id'] = 1;
            //dd($data);
        if (User::create($data)) {
            return redirect()->route('admin.auth.login')->with('success', 'Tạo tài khoản thành công, mời bạn đăng nhập');
        }
        return redirect()->route('admin.auth.register')->with('error', 'Tạo tài khoản thất bại');
    }

    public function logout(){   
        Auth::logout();
        return redirect()->route('admin.auth.login');
    }
}
