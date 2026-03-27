@extends('layout')

@section('content')
<h1>Manage Users</h1>

<table border="1">

<tr>
<th>ID</th>
<th>Username</th>
<th>Fullname</th>
<th>Status</th>
<th>Action</th>
</tr>

@foreach($users as $user)

<tr>

<td>{{$user->id}}</td>

<td>{{$user->username}}</td>

<td>{{$user->fullname}}</td>

<td>

@if($user->isActived)
Active
@else
Banned
@endif

</td>

<td>

@if($user->isActived)

<a href="/admin/ban/{{$user->id}}">Ban</a>

@else

<a href="/admin/unban/{{$user->id}}">Unban</a>

@endif

</td>

</tr>

@endforeach

</table>
@endsection