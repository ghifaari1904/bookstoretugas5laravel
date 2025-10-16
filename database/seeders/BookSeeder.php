<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::insert([
            ['title' => 'Harry Potter', 'author_id' => 1, 'published_year' => 1997, 'genre' => 'Fantasy'],
            ['title' => 'The Shining', 'author_id' => 2, 'published_year' => 1977, 'genre' => 'Horror'],
            ['title' => 'Murder on the Orient Express', 'author_id' => 3, 'published_year' => 1934, 'genre' => 'Mystery'],
            ['title' => 'A Game of Thrones', 'author_id' => 4, 'published_year' => 1996, 'genre' => 'Fantasy'],
            ['title' => 'Kafka on the Shore', 'author_id' => 5, 'published_year' => 2002, 'genre' => 'Drama'],
        ]);
    }
}
