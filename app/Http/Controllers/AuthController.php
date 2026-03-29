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
<<<<<<< HEAD


    // Xử lý login
    public function login(Request $request)
    {

        $credentials = $request->only('username','password');

        if(Auth::attempt($credentials))
        {

=======
    // Xử lý login
    public function login(Request $request)
    {
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials))
        {
>>>>>>> bd7d43d (commit)
            // kiểm tra user có bị ban không
            if(!Auth::user()->isActived)
            {
                Auth::logout();
<<<<<<< HEAD
                return back()->with('error','Your account has been banned');
            }

            return redirect('/posts');

        }

        return back()->with('error','Login failed');

    }


=======
                return back()->with('error','Tài khoản của bạn không đúng');
            }
            return redirect('/posts');
        }
        return back()->with('error','đăng nhập thất bại');
    }
>>>>>>> bd7d43d (commit)
    // Hiển thị trang register
    public function showRegister()
    {
        return view('auth.register');
    }
<<<<<<< HEAD


    // Xử lý register
    public function register(Request $request)
    {

        User::create([

            'username' => $request->username,

            'fullname' => $request->fullname,

            'password' => Hash::make($request->password),

            'isAdmin' => false,

            'isActived' => true

        ]);

        return redirect('/login');

    }


=======
    // Xử lý register
    public function register(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'isAdmin' => false,
            'isActived' => true
        ]);
        return redirect('/login');
    }
>>>>>>> bd7d43d (commit)
    // Logout
    public function logout()
    {
        Auth::logout();
<<<<<<< HEAD

        return redirect('/login');
    }

=======
        return redirect('/login');
    }
>>>>>>> bd7d43d (commit)
}