<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostTagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //YOU CAN'T USE FACTORY FOR MANY TO MANY RELATIONAL DATABASE TABLE
        // ( For ex : post & tag Table have post_tag table)
        // Use SEEDERS Insead of FACTORY

        // $posts = Post::all();
        // $tags  = Tag::all();
        
        // Post::all()->each(function (Post $post) use ($tags) {
        //     return [
        //         'post_id' => $post->id,
        //         'tag_id' => $tags->random()->id,
        //     ];
        // });
    }
}
