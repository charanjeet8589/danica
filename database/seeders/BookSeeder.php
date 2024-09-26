<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run()
    {
        Book::create([
            'name' => 'Bitslap Inc. ',
            'description' => 'A venture to boost the productivity.',
        ]);

        Book::create([
            'name' => 'Danica',
            'description' => 'A secret to story.',
        ]);

        // Add more books as needed
    }
}
