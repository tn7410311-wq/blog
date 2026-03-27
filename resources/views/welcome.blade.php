@extends('layout')

@section('content')
<h1 style= " font-size: 40px">Chào mừng đến với website</h1>
<p style =" font-size: 20px">Đây là trang giới thiệu đơn giản.</p>
<div style="display: flex; justify-content: center; align-items: center; height: 50vh;">
    <a style ="
      
      background: #007bff;
      color: white;
      padding: 10px;
      border: none;"href="login">
      <button>Đăng nhập</button>
    </a>

    <a style="
      background: #007bff;
      color: white;
      padding: 10px;
      border: none;" href="register">
      <button>Đăng ký</button>
    </a>
</div>
<!-- Nút chuyển trang -->

@endsection