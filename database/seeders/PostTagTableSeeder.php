<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class PostTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tagCount = Tag::all()->count();

        if (0 === $tagCount) {
            $this->command->info('No tags found, skipping assigning tags to blog posts');
            return;
        }

        $howManyMin = (int)$this->command->ask('Minimum tags on blog post?', 0);
        $howManyMax = min((int)$this->command->ask('Maximum tags on blog post?', $tagCount), $tagCount);

        Post::all()->each( function($post) use ($howManyMin, $howManyMax){
            $take = random_int($howManyMin, $howManyMax);
            $tags = Tag::inRandomOrder()->take($take)->get()->pluck('id');
            $post->tag()->sync($tags);
        });
    }
}
