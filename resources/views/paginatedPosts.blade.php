@extends('layouts.app')

@section('content')

@foreach($errors->all() as $error)
<div class="alert alert-danger" role="alert">
    {{ $error }}
</div>
@endforeach

@if($posts->isEmpty())
  <p>There are no available posts.</p>
@else
  @foreach($posts as $post)
  <div class="container">
    <div class="card">
      <div class="card-header">
        {{ $post->id}}
      </div>
      <div class="card-body">
        <h5 class="card-title">{{ $post->title }}</h5>
        <p class="card-text">{{ $post->content }}</p>
      </div>
    </div>
  </div>

  @endforeach
@endif

{{ $posts->render() }}




@endsection
