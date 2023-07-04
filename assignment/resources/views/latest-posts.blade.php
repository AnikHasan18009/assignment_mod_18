@extends('app')
@section('title')
latest posts
@endsection
@section('content')
<div class="text-center container-fluid-lg bg-secondary min-vh-100 p-4">
  <div class="row">
    <h2 class="pb-2 mb-4 text-light border-bottom border-light">Latest Posts</h2>
    @forelse($categories as $category)
      @php
          $latest=$category->latestPost();
      @endphp
      @if(!empty($latest))
        <div class="col-12 p-5 bg-dark text-light my-3 rounded rounded-3 shadow-lg">
          <h4>{{$latest->title}}</h4>
          Published: {{$latest->created_at->format('j F, Y')}}&nbsp&nbsp Updated: {{$latest->updated_at->format('j F, Y')}}&nbsp&nbsp Category: {{$latest->category->name}}
          <h5>{{$latest->excerpt}}</h5>
          <div>{{$latest->description}}</div>
        </div>
       @endif
    @empty
     <div class="col-12 p-5 bg-dark text-light my-3 rounded-pill shadow-lg">No Categories found</div>   
    @endforelse
  </div>
</div> 

@endsection




