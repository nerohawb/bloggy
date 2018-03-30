@extends('layouts.master')

@section('content')

  <div class="col-md-8">
    <div class="container">
      <h1>{{$post->title}}</h1>

      @if (count($post->tags))
      <ul class="list-unstyled">
        @foreach ($post->tags as $tag)
          <a href="/posts/tags/{{ $tag->name }}"><li>{{ $tag->name }}</li></a>

        @endforeach
      @endif
      </ul>

      <p class="text-secondary">By {{ $post->user->name }}</p>

      <p>{{$post->body}}</p>

      <p class="text-secondary text-right">Created on {{ $post->created_at->toFormattedDateString() }}</p>
      <br>
    </div>

    <div class="container">
      @foreach ($post->comments as $comment)

      <hr>
      <p><strong>{{ $comment->created_at->diffForHumans() }} : </strong>{{ $comment->body }}</p>

      <p class="text-secondary text-right">{{ $post->user->name }}</p>


      @endforeach
    </div>

    @if(Auth::check())

      <div class="container pt-5">
           <form method="POST" action="/posts/{{ $post->id }}/comments">
             {{ csrf_field() }}
             <div class="form-group">
               <textarea name="body" rows="6" cols="60" placeholder="Leave a Comment?" required></textarea>
             </div>
             <div class="form-group">
               <button type="submit" class="btn btn-primary">Add Comment</button>
            </div>
            </form>
          </div>

      @include('layouts.errors')

    @endif


  </div>

@endsection
