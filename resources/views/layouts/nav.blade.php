<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
  <div class="container">
  <a class="navbar-brand" href="/">Bloggy</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      @if(Auth::check())
      <li class="nav-item">
        <a class="nav-link" href="/create">Create Post</a>
      </li>
      @endif
      <li class="nav-item">
        <a class="nav-link" href="/about">About</a>
      </li>
    </ul>

    <ul class="navbar-nav navbar-right ml-auto">
      @if(Auth::check())
      <li class="nav-item">
        <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/logout">Logout</a>
      </li>
      @endif

      @if(!Auth::check())
      <li class="nav-item">
        <a class="nav-link" href="/login">Login</a>
      </li>
      @endif

    </ul>


    </div>
  </div>
</nav>
