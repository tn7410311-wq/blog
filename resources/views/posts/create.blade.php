@extends('layout')

@section('content')
<<<<<<< HEAD
<h2>Create Post</h2>

<form method="POST" action="/posts">

@csrf

<input name="title" placeholder="Title">

<textarea name="content" placeholder="Content"></textarea>

<button>Create</button>

</form>
=======
<div style="max-width: 700px; margin: 40px auto; padding: 25px; border: 1px solid #ecf0f1; border-radius: 8px; background-color: #f9fafb;">
    <h2 style="color: #2c3e50; margin-bottom: 5px;">Create New Post</h2>
    <p style="color: #7f8c8d; font-style: italic; margin-bottom: 20px;">
        Vui lòng điền thông tin bên dưới để đăng bài viết mới của bạn.
    </p>

    @if(session('success'))
        <div style="background-color: #d4edda; color: #155724; padding: 12px 20px; margin-bottom: 20px; border-radius: 5px; border: 1px solid #c3e6cb;">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div style="color: #e74c3c; background: #fdecea; padding: 12px 20px; border-radius: 5px; margin-bottom: 20px;">
            <ul style="margin: 0; padding-left: 20px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/posts">
        @csrf
        <div style="margin-bottom: 20px;">
            <label for="title" style="display: block; font-weight: 600; margin-bottom: 6px; color: #34495e;">Title:</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" required
                   placeholder="Nhập tiêu đề bài đăng"
                   style="width: 100%; padding: 12px; border: 1px solid #bdc3c7; border-radius: 6px; font-size: 16px; box-sizing: border-box;">
        </div>

        <div style="margin-bottom: 25px;">
            <label for="content" style="display: block; font-weight: 600; margin-bottom: 6px; color: #34495e;">Content:</label>
            <textarea name="content" id="content" rows="8" required
                      placeholder="Viết nội dung bài viết của bạn tại đây..."
                      style="width: 100%; padding: 12px; border: 1px solid #bdc3c7; border-radius: 6px; font-size: 16px; box-sizing: border-box;">{{ old('content') }}</textarea>
        </div>

        <button type="submit"
                style="background-color: #3498db; color: white; padding: 14px 30px; font-size: 16px; border: none; border-radius: 6px; cursor: pointer; transition: background-color 0.3s ease;">
            Create Post
        </button>
        <a style="background-color: #3498db; color: white; padding: 14px 30px; font-size: 16px; border: none; border-radius: 6px; cursor: pointer; transition: background-color 0.3s ease;"
            href="/login">Logout</a>
    </form>
</div>

<script>
    const btn = document.querySelector('button[type="submit"]');
    btn.addEventListener('mouseover', () => btn.style.backgroundColor = '#2980b9');
    btn.addEventListener('mouseout', () => btn.style.backgroundColor = '#3498db');
</script>
>>>>>>> bd7d43d (commit)
@endsection