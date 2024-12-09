@extends('layout')

@section('content')

<h1>ID: {{ $user_id }}</h1>
<h2> {{ $first_name }} {{ $last_name }} </h2>
<p> {{ $email }} </p>


@stop