@extends('layout')

@section('content')
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
@endsection