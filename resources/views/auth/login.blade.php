@extends('layout')

@section('content')
<<<<<<< HEAD
<h2>Login</h2>

<form method="POST" action="/login">

@csrf

<input name="username" placeholder="Username">

<input type="password" name="password" placeholder="Password">

<button type="submit">Login</button>

</form>

<a href="/register">Register</a>
=======
<div style="height:100vh; display:flex; justify-content:center; align-items:center; background:#f4f6f9; font-family:Arial, sans-serif;">
    <div style="background:#fff; padding:40px 50px; width:350px; border-radius:12px; box-shadow:0 4px 15px rgba(0,0,0,0.1); text-align:center;">
        <h2 style="margin-bottom:20px; color:#333;">login</h2>
        @if(session('error'))
            <p style="color:red; margin-bottom:15px; font-size:14px;">{{ session('error') }}</p>
        @endif
        @if(session('success'))
            <p style="color:green; margin-bottom:15px; font-size:14px;">{{ session('success') }}</p>
        @endif
        @if($errors->any())
            <div style="color:red; margin-bottom:15px; font-size:14px; text-align:left;">
                <ul style="padding-left:20px; margin:0;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="/login">
            @csrf
            <input type="email" name="email" placeholder="Email" required
                   style="width:100%; padding:10px; margin-bottom:15px; border:1px solid #ccc; border-radius:8px; font-size:16px; box-sizing:border-box;">
            <input type="password" name="password" placeholder="Password" required
                   style="width:100%; padding:10px; margin-bottom:15px; border:1px solid #ccc; border-radius:8px; font-size:16px; box-sizing:border-box;">
            <button type="submit"
                    style="width:100%; padding:12px; background:#4CAF50; color:white; border:none; border-radius:8px; font-size:16px; cursor:pointer;">
                Login
            </button>
        </form>
        <a href="/register" style="display:block; margin-top:15px; color:#4CAF50; text-decoration:none;">
            chưa có tài khoản? đăng ký
        </a>
    </div>
</div>
>>>>>>> bd7d43d (commit)
@endsection