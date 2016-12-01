@extends('layout')

@section('title', 'New post')

@section('content')
<h1>Create new post</h1>
<br>
<form action="/posts/create" method="POST">
{{ csrf_field() }}
  <div class="form-group">
    <label for="title">Title:</label>
    <input type='text' name='title' id='title' class='form-control' value="{{ old('title') }}" required>
  </div>
  <div class="form-group">
    <label for="content">Content:</label>
    <textarea type='text' name='content' id='content' class='form-control' rows=10 required>{{ old('content') }}</textarea>
  </div>
  <hr>
  <div class="form-group">
    <input type='submit' name='title' id='title' class='btn btn-primary' value='Submit'>
  </div>
</form>
@stop
