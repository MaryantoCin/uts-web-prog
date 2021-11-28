<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['category_id' => 1, 'title' => 'The Last Olympian'],
            ['category_id' => 2, 'title' => 'Adventure Time'],
            ['category_id' => 3, 'title' => 'Medieval Era'],
            ['category_id' => 4, 'title' => 'Final Fantasy'],
            ['category_id' => 5, 'title' => 'Harry Potter'],
            ['category_id' => 6, 'title' => 'World War II'],
            ['category_id' => 7, 'title' => 'Gonjiam'],
            ['category_id' => 8, 'title' => 'Sherlock Homes'],
            ['category_id' => 9, 'title' => 'Your Lie in April'],
            ['category_id' => 9, 'title' => 'Weathering with You'],
        ];

        DB::table('books')->insert($data);
    }
}
