<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Post;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();

      foreach(range(1,20) as $index){

        $title = $faker->text(80);
        $content = $faker->paragraph(30);
        $slug = Str::slug($title,'-');
        $status = 1;
        $user_id = $faker->numberBetween($min = 1, $max = 5);

        Post::create([
          'title' => $title,
          'content' => $content,
          'slug' => $slug,
          'status' => $status,
          'user_id' => $user_id
        ]);

      }

      }

    }
