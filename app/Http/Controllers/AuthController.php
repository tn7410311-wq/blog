<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Hiển thị trang login
    public function showLogin()
    {
        return view('auth.login');
    }
    // Xử lý login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // kiểm tra user có bị ban không
            if (!Auth::user()->isActived) {
                Auth::logout();
                return back()->with('error', 'Tài khoản của bạn đã bị cấm');
            }
            return redirect('/posts');
        }
        return back()->with('error', 'Đăng nhập thất bại');
    }
    // Hiển thị trang register
    public function showRegister()
    {
        return view('auth.register');
    }
    // Xử lý register
    public function register(Request $request)
    {
        User::create([
            'name' => $request->name,
            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'isAdmin' => false,
            'isActived' => true
        ]);

        return redirect('/login');
    }

    // Logout
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}