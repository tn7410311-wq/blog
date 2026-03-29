@extends('layout')

@section('content')
<h1>Blog Posts</h1>
<a href="/posts/create">Create Post</a>
<div class="post-list">
@foreach($posts as $post)
<div class="post-card">
    <h2>{{ $post->title }}</h2>
    <p>{{ Str::limit($post->content, 150) }}</p>
    <p><strong>Author:</strong> {{ $post->user->fullname }}</p>
    <a href="/posts/{{ $post->id }}">Read More</a> |
    <a href="/posts/{{ $post->id }}/edit">Edit</a>
    <form action="/posts/{{ $post->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</div>
<hr>
@endforeach
</div>
@endsection