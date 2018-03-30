@extends('layouts.master')

@section('content')

  <div class="col-md-8">
    <div class="container">
      <h1>Create a Post</h1>
      <form method="POST" action="/posts">

        {{ csrf_field() }}

        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="Title Blog" required>
        </div>
        <div class="form-group">
          <label for="body">Post a Blog</label>
          <textarea class="form-control" id="body" name="body" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Publish</button>
        </div>
        <div class="form-group">
          @include('layouts.errors')
        </div>
      </form>
    </div>
  </div>



@endsection
