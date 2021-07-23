<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;

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

        $user =  User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my_work_post',
            'excerpt' => 'Lorem ipsum dolor sit amet',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel vero ex nam voluptatem aspernatur aliquam iusto, maxime laborum quos sit molestiae sapiente deleniti dolor? A incidunt veniam ut suscipit? Ipsum?'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My Work Post',
            'slug' => 'my_personal_post',
            'excerpt' => 'Lorem ipsum dolor sit amet',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel vero ex nam voluptatem aspernatur aliquam iusto, maxime laborum quos sit molestiae sapiente deleniti dolor? A incidunt veniam ut suscipit? Ipsum?'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Personal Post',
            'slug' => 'my_family_post',
            'excerpt' => 'Lorem ipsum dolor sit amet',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel vero ex nam voluptatem aspernatur aliquam iusto, maxime laborum quos sit molestiae sapiente deleniti dolor? A incidunt veniam ut suscipit? Ipsum?'
        ]);
    }
}
