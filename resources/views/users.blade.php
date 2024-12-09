@extends('layout')

@section('content')

<h1>List of users</h1>

<ul class="list-group">
    @foreach ($users as $user)
        <li class="list-group-item">
            <a href="/user/{{ $user['user_id'] }}">
                ({{ $user['user_id'] }}) {{ $user['first_name'] }} {{ $user['last_name'] }}
            </a>
        </li>
    @endforeach
</ul>

@stop