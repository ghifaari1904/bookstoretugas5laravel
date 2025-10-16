<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public static function getAllAuthors()
    {
        return [
            ['id' => 1, 'name' => 'J.K. Rowling', 'country' => 'UK'],
            ['id' => 2, 'name' => 'Isaac Asimov', 'country' => 'Russia'],
            ['id' => 3, 'name' => 'Nicholas Sparks', 'country' => 'USA'],
            ['id' => 4, 'name' => 'Agatha Christie', 'country' => 'UK'],
            ['id' => 5, 'name' => 'Stephen King', 'country' => 'USA'],
        ];
    }
}
