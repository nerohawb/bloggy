

<h1><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h1>
<p class="text-secondary">{{ $post->created_at->toFormattedDateString() }}</p>
<p>{{ \Illuminate\Support\Str::limit($post->body, 500) }}...</p>
<p><a href="/posts/{{ $post->id }}">Read More</a></p>
<p class="text-right text-secondary">By {{ $post->user->name }}</p>
