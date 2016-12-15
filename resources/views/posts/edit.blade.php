@extends('layout')

@section('title', $post->title)

@section('content')
<h1>Edit post</h1>
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
@if (session()->has('flash_notification.message'))
<div class="alert alert-{{ session('flash_notification.level') }}">
  <button type="button" class="close" data-dismiss="alert" aria-hidded="true">&times;</button>
  {!! session('flash_notification.message') !!}
</div>
@endif
<form action="/posts/edit/{{ $post->id }}" method="POST">
{{ csrf_field() }}
  <div class="form-group">
    <label for="title">Title:</label>
    <input type='text' name='title' id='title' class='form-control' value="{{ old('title', $post->title) }}">
  </div>
  <div class="form-group">
    <label for="content">Content:</label>
    <textarea type='text' name='content' id='content' class='form-control has_editor' rows=10>{{ old('content', $post->content) }}</textarea>
  </div>
  <hr>
  <div class="form-group">
    <button type='submit' name='submit' id='submit' class='btn btn-primary' value='Submit'>Update</button>
  </div>
</form>
@include('partials.editor')
@stop
