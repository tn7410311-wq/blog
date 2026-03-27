@extends('layout')

@section('content')
<h2>Create Post</h2>

<form method="POST" action="/posts">

@csrf

<input name="title" placeholder="Title">

<textarea name="content" placeholder="Content"></textarea>

<button>Create</button>

</form>
@endsection