<?php

namespace Database\Seeders;
use App\Models\Post;
use Illuminate\Database\Seeder;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post();
        $post->title = "Przykładowy post 1";
        $post->content = "przykładowa treść posta 1";
        $post->save();
        $post->categories()->attach(1);

        $post = new Post();
        $post->title = "Przykładowy post 2";
        $post->content = "przykładowa treść posta 2";
        $post->save();
        $post->categories()->attach(2);

        $post = new Post();
        $post->title = "Przykładowy post 3";
        $post->content = "przykładowa treść posta 3";
        $post->save();
        $post->categories()->attach(3);

        $post = new Post();
        $post->title = "Przykładowy post 4";
        $post->content = "przykładowa treść posta 4";
        $post->save();
        $post->categories()->attach(4);

        $post = new Post();
        $post->title = "Przykładowy post 5";
        $post->content = "przykładowa treść posta 5";
        $post->save();
        $post->categories()->attach(5);
        $post = new Post();
        $post->title = "Przykładowy post 6";
        $post->content = "przykładowa treść posta 6";
        $post->save();
        $post->categories()->attach(5);
        $post->categories()->attach(4);
    }
}
