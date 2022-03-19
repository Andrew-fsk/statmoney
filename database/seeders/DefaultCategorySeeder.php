<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DefaultCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $default_categories = [
            'Products',
            'Travel',
            'Gifts',
            'Medicine'
        ];
        foreach ($default_categories as $category_name) {
            DB::table('categories')->insert([
                'name' => $category_name,
            ]);
        }
    }
}
