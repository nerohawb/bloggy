<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Post;
use Carbon\Carbon;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    use DatabasetTransaction;

    public function testBasicTest()
    {
        // $response = $this->get('/');
        //
        // $response->assertStatus(200);



        $first = factory(Post::class)->create();

        $second = factory(Post::class)->create([
          'created_at' => \Carbon\Carbon::now()->subMonth()
        ]);

        $posts = Post::archives();

        $this->asserEquals([
          [
            "year" => $first->created_at->format('Y'),
            "month" => $first->created_at->format('F'),
            "published" => 1
          ],

          [
            "year" => $first->created_at->format('Y'),
            "month" => $first->created_at->format('F'),
            "published" => 1
          ]
        ]);


    }
}
