@extends('layouts.app')


@section('content')

@if(Session::has('message'))
  <div class="container alert alert-success">
    {{ Session::get('message') }}
  </div>
@endif

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{ $post->title}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{ $post->user_id}}</h6>
    <p class="card-text">{{ $post->content}}</p>
  </div>
</div>

@endsection
