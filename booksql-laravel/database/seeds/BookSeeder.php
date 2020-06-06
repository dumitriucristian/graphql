<?php

use Illuminate\Database\Seeder;
use App\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'title' => 'Crushing It',
            'author' => 'Bob Marley',
            'image' => 'crushing-it.jpb',
            'description' => 'Lorem ipsum dolor sit amet',
            'link' => 'https://google.com',
            'category_id' => 1
        ]);
    }
}
