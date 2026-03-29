@extends('layout')

@section('content')
<<<<<<< HEAD
<h1>Blog Posts</h1>

<a href="/posts/create">Create Post</a>

@foreach($posts as $post)

<h2>{{$post->title}}</h2>

<p>{{$post->content}}</p>

<p>Author: {{$post->user->fullname}}</p>

<a href="/posts/{{$post->id}}/edit">Edit</a>

<form action="/posts/{{$post->id}}" method="POST">

@csrf
@method('DELETE')

<button>Delete</button>

</form>

<hr>

@endforeach
=======

<div style="min-height:100vh; display:flex; justify-content:center; align-items:flex-start; background:#f4f6f9; font-family:Arial, sans-serif; padding-top:40px;">
    <div style="background:#fff; padding:30px 40px; width:800px; border-radius:12px; box-shadow:0 4px 15px rgba(0,0,0,0.1); text-align:center;">
        <h1 style="margin-bottom:25px; color:#333;">Danh sách bài viết</h1>

        <a href="{{ url('/posts/create') }}" 
           style="display:inline-block; margin-bottom:20px; background:#4CAF50; color:white; padding:10px 20px; border-radius:8px; text-decoration:none; font-size:16px;">
            Tạo bài viết mới
        </a>

        @if($posts->count())
            @foreach($posts as $post)
            <div style="text-align:left; border-bottom:1px solid #eee; padding:15px 0;">
                <h3 style="margin-bottom:8px;">{{ $post->title }}</h3>
                <p style="margin:0 0 8px 0; font-size:14px; color:#555;">
                    Đăng bởi: <strong>{{ $post->user->name ?? 'Unknown' }}</strong> | 
                    Ngày: {{ $post->created_at->format('d/m/Y') }} | 
                    Trạng thái: 
                    @if($post->status === 'published')
                        <span style="color:green; font-weight:bold;">Đã xuất bản</span>
                    @else
                        <span style="color:#888; font-weight:bold;">Bản nháp</span>
                    @endif
                </p>
                <p style="margin-bottom:10px; font-size:15px;">{{ Str::limit($post->content, 150) }}</p>

                <div style="display:flex; gap:10px; flex-wrap:wrap;">
                    <a href="{{ url('/posts/' . $post->id . '/edit') }}" 
                       style="background:#FFC107; color:white; padding:8px 14px; border-radius:6px; text-decoration:none; font-size:14px;">
                        Sửa
                    </a>
                    <form action="{{ url('/posts/' . $post->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                                style="background:#F44336; color:white; padding:8px 14px; border:none; border-radius:6px; cursor:pointer; font-size:14px;">
                            Xóa
                        </button>
                    </form>
                </div>
            </div>
            @endforeach
        @else
            <p style="color:#555; font-size:16px;">Chưa có bài viết nào.</p>
        @endif
        <form method="POST" action="/logout" style="margin-top:25px;">
            @csrf
            <button type="submit" 
                    style="background:#607D8B; color:white; padding:10px 25px; border:none; border-radius:8px; font-size:16px; cursor:pointer;">
                Logout
            </button>
        </form>
    </div>
</div>

>>>>>>> bd7d43d (commit)
@endsection