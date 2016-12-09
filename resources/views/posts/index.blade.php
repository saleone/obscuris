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
    <p class="post-meta">Posted on {{ $post->created_at }}</p>
</div>
<hr>
@endforeach
@if ($posts->total() > $posts->perPage())
<ul class="pager">
  @if ($posts->nextPageUrl())
  <li class="next">
    <a href="{{ $posts->nextPageUrl() }}">Older Posts &rarr;</a>
  </li>
  @endif
  @if ($posts->previousPageUrl())
  <li class="previous">
    <a href="{{ $posts->previousPageUrl() }}">&larr; Newer Posts</a>
  </li>
  @endif
</ul>
@endif
@stop
