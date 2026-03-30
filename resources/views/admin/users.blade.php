@extends('layout')

@section('content')
<div style="max-width: 900px; margin: 40px auto; padding: 20px; font-family: Arial, sans-serif;">
    <h1 style="text-align: center; color: #2c3e50; margin-bottom: 25px;">Manage Users</h1>

    @if(session('success'))
        <div style="background-color: #d4edda; color: #155724; padding: 12px 20px; margin-bottom: 20px; border-radius: 5px; border: 1px solid #c3e6cb; text-align: center;">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div style="background-color: #f8d7da; color: #721c24; padding: 12px 20px; margin-bottom: 20px; border-radius: 5px; border: 1px solid #f5c6cb; text-align: center;">
            {{ session('error') }}
        </div>
    @endif

    <table style="width: 100%; border-collapse: collapse; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
        <thead>
            <tr style="background-color: #2980b9; color: white;">
                <th style="padding: 12px 15px; text-align: left;">ID</th>
                <th style="padding: 12px 15px; text-align: left;">Username</th>
                <th style="padding: 12px 15px; text-align: left;">Fullname</th>
                <th style="padding: 12px 15px; text-align: center;">Status</th>
                <th style="padding: 12px 15px; text-align: center;">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr style="border-bottom: 1px solid #ddd; transition: background-color 0.3s ease;" 
                    onmouseover="this.style.backgroundColor='#f0f8ff'" onmouseout="this.style.backgroundColor='transparent'">
                    <td style="padding: 12px 15px;">{{ $user->id }}</td>
                    <td style="padding: 12px 15px;">{{ $user->username }}</td>
                    <td style="padding: 12px 15px;">{{ $user->fullname }}</td>
                    <td style="padding: 12px 15px; text-align: center; font-weight: bold; color: {{ $user->isActived ? '#27ae60' : '#c0392b' }};">
                        {{ $user->isActived ? 'Active' : 'Banned' }}
                    </td>
                    <td style="padding: 12px 15px; text-align: center;">
                        @if($user->isActived)
                            <a href="/admin/ban/{{ $user->id }}" 
                               style="padding: 8px 15px; background-color: #e74c3c; color: white; text-decoration: none; border-radius: 5px; font-weight: 600; transition: background-color 0.3s ease;"
                               onmouseover="this.style.backgroundColor='#c0392b'" onmouseout="this.style.backgroundColor='#e74c3c'">Ban</a>
                        @else
                            <a href="/admin/unban/{{ $user->id }}" 
                               style="padding: 8px 15px; background-color: #27ae60; color: white; text-decoration: none; border-radius: 5px; font-weight: 600; transition: background-color 0.3s ease;"
                               onmouseover="this.style.backgroundColor='#1e8449'" onmouseout="this.style.backgroundColor='#27ae60'">Unban</a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection