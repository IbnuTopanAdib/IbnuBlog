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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'Ibnu Topan',
            'email' => 'ibnu@gmail.com',
            'password' => bcrypt('ibnu@gmail.com')

        ]);

        Category::create([
            'nama' => 'Laravel',
            'slug' => 'laravel'
        ]);

        Category::create([
            'nama' => 'Python',
            'slug' => 'python'
        ]);

        Post::create([
            'judul' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'exceprt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam, blanditiis voluptatem. Dignissimos, at eveniet. Reprehenderit quia, tempora cumque facilis quis, ullam ratione atque cupiditate incidunt esse aut eveniet numquam earum corporis consectetur fugit quibusdam dolor quos nesciunt accusantium hic aliquam doloremque aspernatur illo? Temporibus sit obcaecati aliquam a nemo dolorem. Harum facilis natus optio error, ratione vitae dignissimos libero impedit. Repudiandae sequi repellendus totam quidem, eum beatae quisquam iusto. Minus ducimus exercitationem nemo deserunt iusto porro harum tempore sunt doloribus consequatur sapiente ea eligendi quasi animi laboriosam numquam officia debitis quidem fugiat assumenda reiciendis, quibusdam omnis. Fugiat doloribus saepe quae.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'judul' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'exceprt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam, blanditiis voluptatem. Dignissimos, at eveniet. Reprehenderit quia, tempora cumque facilis quis, ullam ratione atque cupiditate incidunt esse aut eveniet numquam earum corporis consectetur fugit quibusdam dolor quos nesciunt accusantium hic aliquam doloremque aspernatur illo? Temporibus sit obcaecati aliquam a nemo dolorem. Harum facilis natus optio error, ratione vitae dignissimos libero impedit. Repudiandae sequi repellendus totam quidem, eum beatae quisquam iusto. Minus ducimus exercitationem nemo deserunt iusto porro harum tempore sunt doloribus consequatur sapiente ea eligendi quasi animi laboriosam numquam officia debitis quidem fugiat assumenda reiciendis, quibusdam omnis. Fugiat doloribus saepe quae.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'judul' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'exceprt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam, blanditiis voluptatem. Dignissimos, at eveniet. Reprehenderit quia, tempora cumque facilis quis, ullam ratione atque cupiditate incidunt esse aut eveniet numquam earum corporis consectetur fugit quibusdam dolor quos nesciunt accusantium hic aliquam doloremque aspernatur illo? Temporibus sit obcaecati aliquam a nemo dolorem. Harum facilis natus optio error, ratione vitae dignissimos libero impedit. Repudiandae sequi repellendus totam quidem, eum beatae quisquam iusto. Minus ducimus exercitationem nemo deserunt iusto porro harum tempore sunt doloribus consequatur sapiente ea eligendi quasi animi laboriosam numquam officia debitis quidem fugiat assumenda reiciendis, quibusdam omnis. Fugiat doloribus saepe quae.',
            'category_id' => 2,
            'user_id' => 1
        ]);



        
        
    }
}
