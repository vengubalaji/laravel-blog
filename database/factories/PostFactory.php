<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $users = User::all();
        $categories = Category::all();
        $title =$this->faker->unique()->text($maxNbChars = 20);
        $slug = Str::slug($title);

        return [
            'title' => $title,
            'slug' => $slug,
            'short_desc' =>  $this->faker->sentence($nbWords = 8, $variableNbWords = true),
            'description' => $this->faker->text($maxNbChars = 150),
            'category_id' => $categories->random()->id,
            'user_id' => $users->random()->id,
        ];
    }

}
