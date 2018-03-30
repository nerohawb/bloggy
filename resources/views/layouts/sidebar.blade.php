<div class="col-md-4 py-3">
  <div class="container py-3">
      <h4>About</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, tempora!</p>
  </div>
  <div class="container py-3">
      <h4>Archive</h4>
      <ul class="list-unstyled">

        @foreach($archives as $stats)
        <li><a href="/?month={{ $stats['month'] }}&year={{ $stats['year'] }}">{{ $stats['month'] . ' ' . $stats['year'] }}</a></il>
        @endforeach
      <ul>
  </div>

  <div class="container py-3">
      <h4>Archive</h4>
      <ul class="list-unstyled">

        @foreach($tags as $tag)
        <li><a href="/posts/tags/{{ $tag }}">{{ $tag }}</a></il>
        @endforeach
      <ul>
  </div>

  <div class="container py-3">
    <h4>Follow Us</h4>
    <ul class="list-unstyled">
      <li><a href="">Github</a></li>
      <li><a href="">Facebook</a></li>
      <li><a href="">Twitter</a></li>
    </ul>
  </div>
</div>
