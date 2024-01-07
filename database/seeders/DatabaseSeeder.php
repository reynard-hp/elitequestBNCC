<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Recipe;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {   
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // User::create([
        //     'name' => 'Reynard Hans',
        //     'email' => 'reynard@gmail.com',
        //     'password' => bcrypt('1234'),
        // ]);

        User::create([
            'name' => 'Reynard H',
            'username' => 'reynardh',
            'email' => 'reynard@gmail.com',
            'password' => bcrypt('password')
        ]);

        User::factory(3)->create();

        Category::create([ 
            'name'=> 'Breakfast',
            'slug' => 'breakfast'
        ]);

        Category::create([
            'name'=> 'Main Courses',
            'slug' => 'main-courses'
        ]); 

        Category::create([
            'name' => 'Hot Drinks',
            'slug' => 'hot-drinks',
        ]);

        Category::create([
            'name' => 'Pastry',
            'slug' => 'pastry',
        ]);

        Category::create([
            'name' => 'Appetizer',
            'slug' => 'appetizer',
        ]);

        Category::create([
            'name' => 'Cold Drinks',
            'slug' => 'cold-drinks',
        ]);
        
        Recipe::factory(35)->create();

        // Recipe::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'description'=> 'Deskripsi Judul Pertama Menu. Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, voluptatibus!',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, ex? <p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p><p>Lorem ipsum dolor sit amet.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ipsam cumque fuga.</p><p>Now the menu is ready to serve!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Recipe::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'description'=> 'Deskripsi Judul Pertama Menu. Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, voluptatibus!',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, ex? <p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p><p>Lorem ipsum dolor sit amet.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ipsam cumque fuga.</p><p>Now the menu is ready to serve!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Recipe::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'description'=> 'Deskripsi Judul Pertama Menu. Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, voluptatibus!',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, ex? <p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p><p>Lorem ipsum dolor sit amet.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ipsam cumque fuga.</p><p>Now the menu is ready to serve!</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Recipe::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'description'=> 'Deskripsi Judul Pertama Menu. Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, voluptatibus!',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, ex? <p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p><p>Lorem ipsum dolor sit amet.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ipsam cumque fuga.</p><p>Now the menu is ready to serve!</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }
}
