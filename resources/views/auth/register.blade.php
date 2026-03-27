@extends('layout')

@section('content')
<h2>Register</h2>

<form method="POST" action="/register">

@csrf

<input name="username" placeholder="Username">

<input name="fullname" placeholder="Fullname">

<input type="password" name="password" placeholder="Password">

<button type="submit">Register</button>

</form>
@endsection