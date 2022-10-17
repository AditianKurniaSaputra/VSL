<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
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
        




    //User diganti dengan admin
        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin')
        ]);

        // User::create([
        //     'name' => 'Mail Sumail',
        //     'email' => 'Mailsumail@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);




        User::factory(0)->create();


        //Category

        Category::create([
            'name' => 'Reading',
            'slug' => 'reading'
        ]);

        Category::create([
            'name' => 'History',
            'slug' => 'history'
        ]);

        Category::create([
            'name' => 'Motivation',
            'slug' => 'motivation'
        ]);




        //post Factory
        
        Post::factory(0)->create();




    
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur delectus ea velit tempore minus omnis itaque quam earum enim',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur delectus ea velit tempore minus omnis itaque quam earum enim, dolor praesentium ad sint cum illum minima eum nemo voluptas, soluta pariatur sit at accusantium alias? Voluptates ut eius quidem impedit modi? Pariatur eum harum laboriosam modi minima reprehenderit quis voluptas inventore doloremque iure, tempora quae suscipit sunt doloribus similique blanditiis sint laborum. Velit eos explicabo laboriosam neque tempore sequi. Molestias optio commodi vel atque animi totam corporis, obcaecati reprehenderit, maiores, rerum minus officia iusto beatae incidunt ab adipisci minima explicabo quam neque! Non voluptatem expedita ab impedit totam dicta veritatis! Ut repellendus reprehenderit maxime expedita, minima dolores est eius voluptates consequuntur similique minus excepturi, beatae error in enim? Temporibus, porro.',
        //     'category_id' => 1,
        //     'user_id' => 1 
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur delectus ea velit tempore minus omnis itaque quam earum enim',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur delectus ea velit tempore minus omnis itaque quam earum enim, dolor praesentium ad sint cum illum minima eum nemo voluptas, soluta pariatur sit at accusantium alias? Voluptates ut eius quidem impedit modi? Pariatur eum harum laboriosam modi minima reprehenderit quis voluptas inventore doloremque iure, tempora quae suscipit sunt doloribus similique blanditiis sint laborum. Velit eos explicabo laboriosam neque tempore sequi. Molestias optio commodi vel atque animi totam corporis, obcaecati reprehenderit, maiores, rerum minus officia iusto beatae incidunt ab adipisci minima explicabo quam neque! Non voluptatem expedita ab impedit totam dicta veritatis! Ut repellendus reprehenderit maxime expedita, minima dolores est eius voluptates consequuntur similique minus excepturi, beatae error in enim? Temporibus, porro.',
        //     'category_id' => 2,
        //     'user_id' => 2 
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur delectus ea velit tempore minus omnis itaque quam earum enim',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur delectus ea velit tempore minus omnis itaque quam earum enim, dolor praesentium ad sint cum illum minima eum nemo voluptas, soluta pariatur sit at accusantium alias? Voluptates ut eius quidem impedit modi? Pariatur eum harum laboriosam modi minima reprehenderit quis voluptas inventore doloremque iure, tempora quae suscipit sunt doloribus similique blanditiis sint laborum. Velit eos explicabo laboriosam neque tempore sequi. Molestias optio commodi vel atque animi totam corporis, obcaecati reprehenderit, maiores, rerum minus officia iusto beatae incidunt ab adipisci minima explicabo quam neque! Non voluptatem expedita ab impedit totam dicta veritatis! Ut repellendus reprehenderit maxime expedita, minima dolores est eius voluptates consequuntur similique minus excepturi, beatae error in enim? Temporibus, porro.',
        //     'category_id' => 3,
        //     'user_id' => 1 
        // ]);
    }
}
