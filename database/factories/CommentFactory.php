<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $users = User::all();
        $posts = Post::all();
        
        return [
            'content' => $this->faker->text($maxNbChars = 150),
            'post_id' => $posts->random()->id,
            'user_id' => $users->random()->id,
        ];
    }
}
