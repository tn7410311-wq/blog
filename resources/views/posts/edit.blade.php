@extends('layout')

@section('content')
<h2>Edit Post</h2>

<form method="POST" action="/posts/{{$post->id}}">

@csrf
@method('PUT')

<input name="title" value="{{$post->title}}">

<textarea name="content">{{$post->content}}</textarea>

<button>Update</button>

</form>
@endsection