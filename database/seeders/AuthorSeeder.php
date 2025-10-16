<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        Author::insert([
            ['name' => 'J.K. Rowling', 'country' => 'UK'],
            ['name' => 'Stephen King', 'country' => 'USA'],
            ['name' => 'Agatha Christie', 'country' => 'UK'],
            ['name' => 'George R.R. Martin', 'country' => 'USA'],
            ['name' => 'Haruki Murakami', 'country' => 'Japan'],
        ]);
    }
}
