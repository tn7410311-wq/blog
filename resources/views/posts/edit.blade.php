@extends('layout')

@section('content')
<div style="min-height:100vh; display:flex; justify-content:center; align-items:flex-start; background:#f4f6f9; font-family:Arial, sans-serif; padding-top:40px;">
    <div style="background:#fff; padding:30px 40px; width:500px; border-radius:12px; box-shadow:0 4px 15px rgba(0,0,0,0.1); text-align:center;">
        <h2 style="margin-bottom:25px; color:#333;">Chỉnh sửa bài viết</h2>
        @if($errors->any())
            <div style="color:red; margin-bottom:15px; font-size:14px; text-align:left;">
                <ul style="padding-left:20px; margin:0;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="/posts/{{$post->id}}">
            @csrf
            @method('PUT')
            <input type="text" name="title" placeholder="Tiêu đề" value="{{$post->title}}" 
                   style="width:100%; padding:10px; margin-bottom:15px; border:1px solid #ccc; border-radius:8px; font-size:16px; box-sizing:border-box;">
            <textarea name="content" placeholder="Nội dung" rows="8"
                   style="width:100%; padding:10px; margin-bottom:15px; border:1px solid #ccc; border-radius:8px; font-size:16px; box-sizing:border-box;">{{$post->content}}</textarea>
            <button type="submit" 
                    style="width:100%; padding:12px; background:#2196F3; color:white; border:none; border-radius:8px; font-size:16px; cursor:pointer; margin-bottom:10px;">
                Cập nhật
            </button>
        </form>
        <form method="POST" action="/logout">
            @csrf
            <button type="submit" 
                    style="width:100%; padding:12px; background:#607D8B; color:white; border:none; border-radius:8px; font-size:16px; cursor:pointer;">
                Logout
            </button>
        </form>
        <a href="{{ url('/posts') }}" 
           style="display:block; margin-top:15px; color:#4CAF50; text-decoration:none; font-size:14px;">
           Quay lại danh sách bài viết
        </a>
    </div>
</div>
>>>>>>> bd7d43d (commit)
@endsection