<?php

use Illuminate\Database\Seeder;

class GalleriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('galleries')->insert([
        ['title' => 'Robin Lieson',
        'description' => 'My name is robin lieson',
        'url' => 'Robin.jpg',
        'thumbnail' => 'Robin.jpg',
        'showimage' => 'Robin.jpg',
        'created_at' => '2016-12-11 04:34:27',
        'updated_at' => '2016-12-11 04:34:27'],
        ['title' => 'Robin Lieson',
        'description' => 'My name is robin lieson',
        'url' => 'Robin.jpg',
        'thumbnail' => 'Robin.jpg',
        'showimage' => 'Robin.jpg',
        'created_at' => '2016-12-11 04:34:27',
        'updated_at' => '2016-12-11 04:34:27'],
        ['title' => 'Robin Lieson',
        'description' => 'My name is robin lieson',
        'url' => 'Robin.jpg',
        'thumbnail' => 'Robin.jpg',
        'showimage' => 'Robin.jpg',
        'created_at' => '2016-12-11 04:34:27',
        'updated_at' => '2016-12-11 04:34:27'],
        ['title' => 'Robin Lieson',
        'description' => 'My name is robin lieson',
        'url' => 'Robin.jpg',
        'thumbnail' => 'Robin.jpg',
        'showimage' => 'Robin.jpg',
        'created_at' => '2016-12-11 04:34:27',
        'updated_at' => '2016-12-11 04:34:27'],
        ['title' => 'Robin Lieson',
        'description' => 'My name is robin lieson',
        'url' => 'Robin.jpg',
        'thumbnail' => 'Robin.jpg',
        'showimage' => 'Robin.jpg',
        'created_at' => '2016-12-11 04:34:27',
        'updated_at' => '2016-12-11 04:34:27']
      ]);
    }
}
