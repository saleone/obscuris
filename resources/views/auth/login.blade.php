@extends('layout')
@section('title', 'Login')
@section('content')

<h1>Login</h1>
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

<form method="POST" class='form-horizontal' action="/login">
{!! csrf_field() !!}
  <div class="form-group">
    <label>
      E-mail:
      <input type='email' name='email' id='email' class='form-control' value="{{ old('email') }}">
    </label>
  </div>
  <div class="form-group">
    <label>
      Password:
      <input type='password' name='password' id='password' class='form-control' value="">
    </label>
  </div>
  <input type='hidden' name='remember' id='remember' class='form-control' value="value">
  <br>
  <div class="form-group">
    <button type='submit' name='submit' id='submit' class='btn btn-primary'>Login</button>
  </div>
</form>
@endsection
