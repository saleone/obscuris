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
@if (session()->has('flash_notification.message'))
<div class="alert alert-{{ session('flash_notification.level') }}">
  <button type="button" class="close" data-dismiss="alert" aria-hidded="true">&times;</button>
  {!! session('flash_notification.message') !!}
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
    <textarea type='text' name='content' id='content' class='form-control has_editor' rows=10>{{ old('content') }}</textarea>
  </div>
  <hr>
  <div class="form-group">
    <button type='submit' name='submit' id='submit' class='btn btn-primary' value='Submit'>Submit</button>
  </div>
</form>
<script src="http://cdn.tinymce.com/4/tinymce.min.js"></script>
<script>
tinymce.init(
{
  selector: ".has_editor",
  menubar: false,
    plugins: [
      "lists link image textcolor",
  ],
  formats: {
    forecolor: {inline: 'span', classes: 'forecolor', styles:{color: "%value"}}
  },
  textcolor_map: [
    "0c0934", "Dark Blue", "152845", "Blue", "CACEE8", "Sky Blue", "E5DED8", "Mushy White", "2F0000", "Cherry"
  ],
  toolbar: [
    "undo redo | styleselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    "fontsizeselect | forecolor backcolor"
  ]
})
</script>
@stop
