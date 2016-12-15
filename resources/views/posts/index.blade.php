@extends('layout')
@section('title', 'News')
@section('content')

@foreach ($posts as $post)
<div class="post-preview">
  <h2 class="post-title">
    {{ $post->title }}
  </h2>
  <h3 class="post-subtitle">
    {!! $post->content !!}
  </h3>
    <p class="post-meta">
      Posted on {{ $post->created_at }}
      @if(Auth::user())
      <a href='/posts/edit/{{ $post->id }}' style='color: #DA5E00'>edit</a> |
      <a href='/posts/delete/{{ $post->id }}' style='color: #DA5E00'>delete</a>
      @endif
    </p>
</div>
<hr>
@endforeach

@if (count($posts) == 0)
<div class="post-preview">
  <h2 class="post-title">It's empty!</h2>
  <h3 class="post-subtitle">
    Please come back later, site authors will be busy in the meantime. =) <br><br>
    For more information contact <a href='mailto:admin@obscurisservices.com'>admin</a>
    or try to find something else here. <br> <br>
  </h3>
</div>
@endif

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
