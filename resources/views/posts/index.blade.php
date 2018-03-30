@extends('layouts.master')

@section('content')

    <div class="col-md-8">
      <div class="container">
          <div class="py-3">
            @foreach ($posts as $post)
              @include('posts.post')
            @endforeach
          </div>
      </div>
    </div>


@endsection
