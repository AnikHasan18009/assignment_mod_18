@extends('app')
@section('title')
posts
@endsection
@section('content')
<div class="text-center container-fluid-lg bg-secondary min-vh-100 p-4">
  <div class="row">
    <h2 class="pb-2 mb-4 text-light border-bottom border-light">Posts</h2>
    @forelse ($posts as $post)
        <div class="col-12 p-5 bg-dark text-light my-3 rounded rounded-3 shadow-lg">
          <h4>{{$post->title}}</h4>
          Published: {{$post->created_at->format('j F, Y')}}&nbsp&nbsp Updated: {{$post->updated_at->format('j F, Y')}}&nbsp&nbsp Category: {{$post->category->name}}
          <h5>{{$post->excerpt}}</h5>
          <div>{{$post->description}}</div>
        </div>
    @empty
     <div class="col-12 p-5 bg-dark text-light my-3 rounded-pill shadow-lg">No posts found</div>   
    @endforelse
  </div>
</div> 

@endsection