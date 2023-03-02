<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\NewsPost;
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
//        User::truncate();
//        NewsPost::truncate();
//        Category::truncate();

        $user = User::factory()->create([
            'name' => 'Jack Smith',
        ]);

        NewsPost::factory(5)->create([
            'user_id' => $user->id,
        ]);
        $user = User::factory()->create([
            'name' => 'John Doe',
        ]);

        NewsPost::factory(5)->create([
            'user_id' => $user->id,
        ]);
        $user = User::factory()->create([
            'name' => 'Alessandro Del Piero',
        ]);

        NewsPost::factory(5)->create([
            'user_id' => $user->id,
        ]);





//        $category = Category::factory()->create([
//            'name' => 'Laravel',
//        ]);
        NewsPost::factory(5)->create([
            'category_id' => 11,
        ]);




        //        User::factory(10)->create()->each(function (User $user) {
//            $user->news_posts()->saveMany(NewsPost::factory(5)->make());
//        });
    }
}
