<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['book_id' => 1, 'author' => 'Author A', 'publisher' => 'Publisher A', 'year' => 2021, 'description' => 'Lorem Ipsum'],
            ['book_id' => 2, 'author' => 'Author B', 'publisher' => 'Publisher B', 'year' => 2021, 'description' => 'Lorem Ipsum'],
            ['book_id' => 3, 'author' => 'Author C', 'publisher' => 'Publisher C', 'year' => 2021, 'description' => 'Lorem Ipsum'],
            ['book_id' => 4, 'author' => 'Author D', 'publisher' => 'Publisher D', 'year' => 2021, 'description' => 'Lorem Ipsum'],
            ['book_id' => 5, 'author' => 'Author E', 'publisher' => 'Publisher E', 'year' => 2021, 'description' => 'Lorem Ipsum'],
            ['book_id' => 6, 'author' => 'Author F', 'publisher' => 'Publisher F', 'year' => 2021, 'description' => 'Lorem Ipsum'],
            ['book_id' => 7, 'author' => 'Author G', 'publisher' => 'Publisher G', 'year' => 2021, 'description' => 'Lorem Ipsum'],
            ['book_id' => 8, 'author' => 'Author H', 'publisher' => 'Publisher H', 'year' => 2021, 'description' => 'Lorem Ipsum'],
            ['book_id' => 9, 'author' => 'Author I', 'publisher' => 'Publisher I', 'year' => 2021, 'description' => 'Lorem Ipsum'],
            ['book_id' => 10, 'author' => 'Author J', 'publisher' => 'Publisher J', 'year' => 2021, 'description' => 'Lorem Ipsum'],
        ];

        DB::table('details')->insert($data);
    }
}
