<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "name" => "coffee capuccino",
                "slug" => "coffee-capuccino",
                "description" => "A small river named Duden flows by their place and supplies",
                "price" => 5.9,
                "stock" => 10,
                "image" => "images/menu-1.jpg",
                "featured" => true,
                "category_id" => "1"
            ],
            [
                "name" => "coffee latte",
                "slug" => "coffee-latte",
                "description" => "A small river named Duden flows by their place and supplies",
                "price" => 4.9,
                "stock" => 10,
                "image" => "images/menu-2.jpg",
                "featured" => true,
                "category_id" => "1"
            ],
            [
                "name" => "coffee mocha",
                "slug" => "coffee-mocha",
                "description" => "A small river named Duden flows by their place and supplies",
                "price" => 3.9,
                "stock" => 10,
                "image" => "images/menu-3.jpg",
                "featured" => true,
                "category_id" => "1"
            ],
            [
                "name" => "coffee expresso",
                "slug" => "coffee-expresso",
                "description" => "A small river named Duden flows by their place and supplies",
                "price" => 2.9,
                "stock" => 10,
                "image" => "images/menu-4.jpg",
                "featured" => true,
                "category_id" => "1"
            ]
        ];
        DB::table('products')->insert($data);
    }
}
