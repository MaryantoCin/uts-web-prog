<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['category' => 'Action'],
            ['category' => 'Adventure'],
            ['category' => 'Classic'],
            ['category' => 'Fantasy'],
            ['category' => 'Fiction'],
            ['category' => 'History'],
            ['category' => 'Horror'],
            ['category' => 'Mystery'],
            ['category' => 'Romance'],
            ['category' => 'Science'],
        ];

        DB::table('categories')->insert($data);
    }
}
