@extends('layout')
@section('title', 'Login')
@section('content')

<h1>Registration</h1>
<br>
@if (count($errors) > 0)
<div class="alert alert-danger">
  <ul>
  @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
  @endforeach
  </ul>
</div>
@endif

<form method="POST" class='form-horizontal' action="/register">
  {!! csrf_field() !!}
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class='form-control' name='name' value='{{ old("name") }}'>
  </div>
  <div class="form-group">
    <label for="email">E-mail:</label>
    <input type="email" class='form-control' name='email' value='{{ old("email") }}'>
  </div>

  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class='form-control' name='password' value='{{ old("password") }}'>
  </div>

  <div class="form-group">
    <label for="password-confirm">Confirm Password:</label>
    <input type="password" class='form-control' name='password_confirmation' value='{{ old("password") }}'>
  </div>

  <div class="form-group">
  <button class="btn primary" type='submit'>Register</button>
  </div>
  @endsection
