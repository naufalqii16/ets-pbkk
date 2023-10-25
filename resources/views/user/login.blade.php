@extends('base')

@section('title', 'User Login')

@section('main-content')

<form action="/user/login" method="post">
    {{ csrf_field() }}

    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}">
    </div>

    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" value="{{ old('password') }}">
    </div>

    <input type="submit" value="Login">
</form>

@endsection


{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>ini login</h1>
</body>
</html> --}}
