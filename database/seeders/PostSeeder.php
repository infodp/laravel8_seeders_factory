<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\Post::factory(50)->create();
       /*  $data = [
            [
            'title' => 'Título 1',
            'content' => 'Texto de mi primer post',
            'color' => 'rojo',
            'phone' => '35555635',
            'author' => 'jperez',
            'author_age' => 31
            ],
            [
                'title' => 'Título 2',
                'content' => 'Texto de mi segundo post',
                'color' => 'rojo',
                'phone' => '35555635',
                'author' => 'jlopez',
                'author_age' => 31
            ],
            [
                'title' => 'Título 3',
                'content' => 'Texto de mi tercer post',
                'color' => 'rojo',
                'phone' => '35555635',
                'author' => 'mpagano',
                'author_age' => 31
            ],
        ];
        DB::table('posts')->insert($data); */
    }
}
