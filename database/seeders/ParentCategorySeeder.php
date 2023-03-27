<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parent_categories;

class ParentCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Parent_categories::factory()->count(10)->create();
    }
}
