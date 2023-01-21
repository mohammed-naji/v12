<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Insurance;
use App\Models\Post;
use App\Models\Tag;
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
        // User::truncate();
        // Insurance::truncate();

        User::factory(100)->create();
        // Insurance::factory(5)->create();
        // Post::factory(1000)->create();

        // User::create([
        //     'name' => 'Mohammed',
        //     'email' => 'moh@gmail.com',
        //     'password' => bcrypt(123)
        // ]);

        // Tag::factory(100)->create();
    }
}
