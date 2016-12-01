@extends('layout')
@section('title', 'News')
@section('content')
@foreach ($posts as $post)
<div class="post-preview">
  <h2 class="post-title">
    {{ $post->title }}
  </h2>
  <h3 class="post-subtitle">
    {{ $post->content }}
  </h3>
    <p class="post-meta">Posted on {{ $post->date }}</p>
</div>
<hr>
@endforeach
