@extends('layout')

@section('title', 'New post')

@section('content')
<h1>Create new post</h1>
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
<form action="/posts" method="POST">
{{ csrf_field() }}
  <div class="form-group">
    <label for="title">Title:</label>
    <input type='text' name='title' id='title' class='form-control' value="{{ old('title') }}">
  </div>
  <div class="form-group">
    <label for="content">Content:</label>
    <textarea type='text' name='content' id='content' class='form-control' rows=10>{{ old('content') }}</textarea>
  </div>
  <hr>
  <div class="form-group">
    <button type='submit' name='submit' id='submit' class='btn btn-primary' value='Submit'>Submit</button>
  </div>
</form>
@stop
