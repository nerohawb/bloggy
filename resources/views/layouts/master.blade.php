<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bloggy | Share it with Everyone</title>

    <link rel="stylesheet" href="/css/app.css">

    <style>body {overflow-x : hidden;}</style>

  </head>
  <body>

    @include('layouts.nav')

    @if ($flash = session('message'))

    <div class="alert alert-success" role="alert">

      {{ $flash }}

    </div>

    @endif

    <section id="header">
      <div class="jumbotron jumbotron-fluid" style="background: none  ;">
        <div class="container">
          <h1 class="text-uppercase font-weight-bold"><img src="/images/bloggy-logo-header.svg" height="140" width="140">loggy</h1>
          <h3 class="text-secondary">Share your Thoughts with Everyone</h3>
        </div>
      </div>
    </section>


    <div class="container">
      <div class="row">
        @yield('content')

        @include('layouts.sidebar')
      </div>
    </div>


    <script type="text/javascript" src="/js/app.js"></script>
    @include('layouts.footer')
  </body>
</html>
