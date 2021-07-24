<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Post::truncate();
        
        $user = User::factory()->create();
        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);
        Post::create([
            'user_id'=>$user->id,
            'category_id'=>$work->id,
            'title' => 'work post',
            'slug' => 'work-post',
            'body' => 'lorem ipsum dolar .',
            'excerpt' => 'lorem.'
        ]);
        Post::create([
            'user_id'=>$user->id,
            'category_id'=>$personal->id,
            'title' => 'personal post',
            'slug' => 'personal-post',
            'body' => 'lorem ipsum dolar .',
            'excerpt' => 'lorem.'
        ]);

    }
}
