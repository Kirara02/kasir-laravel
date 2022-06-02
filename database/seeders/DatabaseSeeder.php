<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
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
        // User::create([
        //     "name"=>"Kirara Bernstein",
        //     "email"=>"kirara@gmail.com",
        //     "password"=>bcrypt('12345')
        // ]);
        // User::create([
        //     "name"=>"Fathul Hidayat",
        //     "email"=>"fathul@gmail.com",
        //     "password"=>bcrypt('54321')
        // ]);

        User::factory(3)->create();

        Post::factory(25)->create();
        Category::create([
            "name"=>"Web Programming",
            "slug"=>"web-programming"
        ]);
        Category::create([
            "name"=>"Web Design",
            "slug"=>"web-design"
        ]);
        Category::create([
            "name"=>"Personal",
            "slug"=>"personal"
        ]);

        // Post::create([
        //     "user_id"=>1,
        //     "category_id"=>2,
        //     "title"=>"Judul Pertama",
        //     "slug"=>"judul-pertama",
        //     "excerpt"=>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum accusantium odit, animi perspiciatis saepe",
        //     "body"=>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum accusantium odit, animi perspiciatis saepe veniam nostrum nihil excepturi tempora, cumque eos libero dolor dignissimos itaque ut vero voluptatibus. Veritatis est laboriosam enim molestiae modi, officiis doloribus exercitationem error? Est eveniet eum ut sapiente, nobis, inventore tenetur saepe, vitae quod cupiditate facere voluptatem recusandae. Placeat eius in vero error dolore quia rerum expedita perspiciatis aliquam accusamus voluptatum quae nesciunt doloremque, explicabo ad voluptatem quaerat. Asperiores enim autem tempore, odit cum ab, quod nobis possimus blanditiis quae dolorum repellendus obcaecati, aliquam consectetur? Nostrum ipsum dicta repellendus! Vel deserunt necessitatibus impedit porro ipsam."
        // ]);
        // Post::create([
        //     "user_id"=>1,
        //     "category_id"=>2,
        //     "title"=>"Judul Kedua",
        //     "slug"=>"judul-kedua",
        //     "excerpt"=>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum accusantium odit, animi perspiciatis saepe",
        //     "body"=>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum accusantium odit, animi perspiciatis saepe veniam nostrum nihil excepturi tempora, cumque eos libero dolor dignissimos itaque ut vero voluptatibus. Veritatis est laboriosam enim molestiae modi, officiis doloribus exercitationem error? Est eveniet eum ut sapiente, nobis, inventore tenetur saepe, vitae quod cupiditate facere voluptatem recusandae. Placeat eius in vero error dolore quia rerum expedita perspiciatis aliquam accusamus voluptatum quae nesciunt doloremque, explicabo ad voluptatem quaerat. Asperiores enim autem tempore, odit cum ab, quod nobis possimus blanditiis quae dolorum repellendus obcaecati, aliquam consectetur? Nostrum ipsum dicta repellendus! Vel deserunt necessitatibus impedit porro ipsam."
        // ]);
        // Post::create([
        //     "user_id"=>2,
        //     "category_id"=>1,
        //     "title"=>"Judul ketiga",
        //     "slug"=>"judul-ketiga",
        //     "excerpt"=>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum accusantium odit, animi perspiciatis saepe",
        //     "body"=>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum accusantium odit, animi perspiciatis saepe veniam nostrum nihil excepturi tempora, cumque eos libero dolor dignissimos itaque ut vero voluptatibus. Veritatis est laboriosam enim molestiae modi, officiis doloribus exercitationem error? Est eveniet eum ut sapiente, nobis, inventore tenetur saepe, vitae quod cupiditate facere voluptatem recusandae. Placeat eius in vero error dolore quia rerum expedita perspiciatis aliquam accusamus voluptatum quae nesciunt doloremque, explicabo ad voluptatem quaerat. Asperiores enim autem tempore, odit cum ab, quod nobis possimus blanditiis quae dolorum repellendus obcaecati, aliquam consectetur? Nostrum ipsum dicta repellendus! Vel deserunt necessitatibus impedit porro ipsam."
        // ]);
    }
}
