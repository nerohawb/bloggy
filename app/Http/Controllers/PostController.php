<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Repositories\Posts;
use Carbon\Carbon;

class PostController extends Controller
{

    public function __construct() {
      $this->middleware('auth')->except(['index', 'show']);
    }

    public function index() {

      // $posts = Post::latest();
      //
      // if ($month = request('month')) {
      //   $posts->whereMonth('created_at', Carbon::parse($month)->month);
      // }
      //
      // if ($year = request('year')) {
      //   $posts->whereYear('created_at', Carbon::parse($year)->year);
      // }
      //
      // $posts =  $posts->get();

      $posts = Post::latest()
      ->filter(request(['month','year']))
      ->get();

      // $posts = Post::orderBy('created_at', 'desc')->get();

      // $posts = $posts->all();

      return view('posts.index', compact('posts'));
    }

    public function show(Post $post) {

      // $post = Post::find($id);

      return view('posts.show', compact('post'));
    }

    public function create() {
      return view('posts.create');
    }

    public function store() {
      //Creating a new post and save in the database
      // dd(request()->all());
      // $post  = new Post;
      // $post->name = request('name');
      // $post->title = request('title');
      // $post->body = request('body');
      //
      // $post->save();

      // Post::create([
      //   'name' => request('name');
      //   'title' => request('title');
      //   'body' => request('body');
      // ]);

      $this->validate(request(), [
        'title' => 'required',
        'body' => 'required'
        ]);

      // Post::create([
      //   'title' => request('title'),
      //   'body' => request('body'),
      //   'user_id' => auth()->id()
      // ]);

      auth()->user()->publish(
        new Post(request(['title', 'body']))
      );

      session()->flash('message', 'Your post has now been published.');


      return redirect('/');
    }
}
