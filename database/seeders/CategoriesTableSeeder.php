<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['id' => 1,  'name' => 'Dairy',          'name_pl' => 'Nabiał'],
            ['id' => 2,  'name' => 'Meat',           'name_pl' => 'Mięso'],
            ['id' => 3,  'name' => 'Vegetables',     'name_pl' => 'Warzywa'],
            ['id' => 4,  'name' => 'Fruits',         'name_pl' => 'Owoce'],
            ['id' => 5,  'name' => 'Cereal products','name_pl' => 'Produkty zbożowe'],
            ['id' => 6,  'name' => 'Drinks',         'name_pl' => 'Napoje'],
            ['id' => 7,  'name' => 'Cosmetics',      'name_pl' => 'Kosmetyki'],
            ['id' => 8,  'name' => 'Chemicals',      'name_pl' => 'Chemia'],
            ['id' => 9,  'name' => 'Spices',         'name_pl' => 'Przyprawy'],
            ['id' => 10, 'name' => 'Ready meals',    'name_pl' => 'Dania gotowe'],
            ['id' => 11, 'name' => 'Oils',           'name_pl' => 'Oleje'],
            ['id' => 12, 'name' => 'Other',          'name_pl' => 'Inne'],
            ['id' => 13, 'name' => 'Snacks',         'name_pl' => 'Przekąski'],
            ['id' => 14, 'name' => 'Spreads',        'name_pl' => 'Smarowidła'],
            ['id' => 15, 'name' => 'Frozen food',    'name_pl' => 'Mrożonki'],
        ];

        Categories::insert($categories);
    }
}
