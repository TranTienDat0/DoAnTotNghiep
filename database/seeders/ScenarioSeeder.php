<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScenarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // call seeder class
        $this->call([
            UserSeeder::class,
            ShippingSeeder::class,
            OrderSeeder::class,
            ParentCategorySeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            PaymentSeeder::class,
            OrderDetailSeeder::class,
        ]);
    }
}