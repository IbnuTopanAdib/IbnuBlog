<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // User::create([
        //     'name' => 'Ibnu Topan',
        //     'email' => 'ibnu@gmail.com',
        //     'password' => bcrypt('ibnu@gmail.com')

        // ]);

        // Category::create([
        //     'nama' => 'Laravel',
        //     'slug' => 'laravel'
        // ]);

        // Category::create([
        //     'nama' => 'Python',
        //     'slug' => 'python'
        // ]);
        Category::factory(3)->create();

        Post::factory(50)->create();


        
        
    }
}
