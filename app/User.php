<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Comment;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts() {

      return $this->hasMany(Post::Class);
    }

    public function publish(Post $post) {

      // Post::create([
      //    'title' => request('title'),
      //    'body' => request('body'),
      //    'user_id' => auth()->id()
      //  ]);

      $this->posts()->save($post);
    }

}
