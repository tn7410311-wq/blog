@extends('layout')
@section('content')
<div style="width:1181px;margin: auto;">
  <div style="text-align:center; margin-top:150px;background-color:#FFFFFF;border-radius: 50px;">
    <h1 style="font-size: 100px; color:#FF6633;">Chào mừng đến với nhật ký của tôi</h1>
    <p style="font-size: 40px;">Đây là nơi bạn chia sẻ suy nghĩ và trải nghiệm của mình.</p> 
  </div>
</div>
<div style="display: flex; justify-content: center; align-items: center; height: 10vh;gap:20px;">
    <a href="login"
      class="inline-block text-white text-2xl bg-green-500 rounded-full px-6 py-2 text-center hover:bg-green-600 transition-colors">
    Đăng nhập
    </a>

    <a href="register"
      class="inline-block text-white text-2xl bg-green-500 rounded-full px-6 py-2 text-center hover:bg-green-600 transition-colors">
      Đăng ký
    </a>
    </a>
</div>

@endsection