<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "name" => "drinks",
                "slug" => "drinks",
            ],
            [
                "name" => "desserts",
                "slug" => "desserts",
            ]
        ];

        DB::table('categories')->insert($data);
    }
}
