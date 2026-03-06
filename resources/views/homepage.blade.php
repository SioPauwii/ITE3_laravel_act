@extends('layouts.app')

@section('content')
    <h1>Welcome to the Homepage</h1>
    <h3>Hello, {{ $name }}!</h3>
    <h3>Welcome to Laravel!</h3>
    <p><b>Note*</b> Feel free to change the name after the URL by adding '/your_name' to see different greetings.</p>
@endsection