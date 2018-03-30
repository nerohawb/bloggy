@extends('layouts.master')

@section('content')

  <div class="col-md-8">
    <h1>Sign In</h1>

    <form action="/login" method="POST">

      {{ csrf_field() }}

      <div class="form-group">
        <label for="email">Email:</label>
        <input class="form-control" type="email" name="email" id="email">
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input class="form-control" type="password" name="password" id="password">
      </div>

      <div class="form-group">
        <button class="btn btn-primary">Submit</button>
      </div>

    </form>

    @include('layouts.errors')

  </div>

@endsection
