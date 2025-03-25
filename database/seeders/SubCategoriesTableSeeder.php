<?php

namespace Database\Seeders;

use App\Models\SubCategories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $subCategories = [
            ['id' => 1, 'category_id' => 2, 'name' => 'Minced meat',      'name_pl' => 'Mięso mielone'],
            ['id' => 2, 'category_id' => 5, 'name' => 'Bread',            'name_pl' => 'Pieczywo'],
            ['id' => 3, 'category_id' => 5, 'name' => 'Flour',            'name_pl' => 'Mąka'],
            ['id' => 4, 'category_id' => 5, 'name' => 'Rice',             'name_pl' => 'Ryż'],
            ['id' => 5, 'category_id' => 5, 'name' => 'Cereals',          'name_pl' => 'Płatki'],
            ['id' => 6, 'category_id' => 5, 'name' => 'Pasta',            'name_pl' => 'Makarony'],
            ['id' => 7, 'category_id' => 7, 'name' => 'Creams',           'name_pl' => 'Kremy'],
            ['id' => 8, 'category_id' => 7, 'name' => 'Hair cosmetics',   'name_pl' => 'Kosmetyki do włosów'],
            ['id' => 9, 'category_id' => 6, 'name' => 'Plant-based drinks', 'name_pl' => 'Napoje roślinne'],
        ];

        SubCategories::insert($subCategories);
    }
}
