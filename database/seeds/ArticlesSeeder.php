<?php

use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
          ['title' => 'Robin Lieson',
          'content' => 'My name is robin lieson',
          'writer' => 'Robin',
          'created_at' => '2016-12-11 04:34:27',
          'updated_at' => '2016-12-11 04:34:27'],
          ['title' => 'Robin Lieson',
          'content' => 'My name is robin lieson',
          'writer' => 'Robin',
          'created_at' => '2016-12-11 04:34:27',
          'updated_at' => '2016-12-11 04:34:27'],
          ['title' => 'Robin Lieson',
          'content' => 'My name is robin lieson',
          'writer' => 'Robin',
          'created_at' => '2016-12-11 04:34:27',
          'updated_at' => '2016-12-11 04:34:27'],
          ['title' => 'Robin Lieson',
          'content' => 'My name is robin lieson',
          'writer' => 'Robin',
          'created_at' => '2016-12-11 04:34:27',
          'updated_at' => '2016-12-11 04:34:27'],
          ['title' => 'Robin Lieson',
          'content' => 'My name is robin lieson',
          'writer' => 'Robin',
          'created_at' => '2016-12-11 04:34:27',
          'updated_at' => '2016-12-11 04:34:27'],
          ['title' => 'Robin Lieson',
          'content' => 'My name is robin lieson',
          'writer' => 'Robin',
          'created_at' => '2016-12-11 04:34:27',
          'updated_at' => '2016-12-11 04:34:27'],
          ['title' => 'Robin Lieson',
          'content' => 'My name is robin lieson',
          'writer' => 'Robin',
          'created_at' => '2016-12-11 04:34:27',
          'updated_at' => '2016-12-11 04:34:27'],
          ['title' => 'Robin Lieson',
          'content' => 'My name is robin lieson',
          'writer' => 'Robin',
          'created_at' => '2016-12-11 04:34:27',
          'updated_at' => '2016-12-11 04:34:27'],
          ['title' => 'Robin Lieson',
          'content' => 'My name is robin lieson',
          'writer' => 'Robin',
          'created_at' => '2016-12-11 04:34:27',
          'updated_at' => '2016-12-11 04:34:27'],
          ['title' => 'Robin Lieson',
          'content' => 'My name is robin lieson',
          'writer' => 'Robin',
          'created_at' => '2016-12-11 04:34:27',
          'updated_at' => '2016-12-11 04:34:27']
        ]);
    }
}
