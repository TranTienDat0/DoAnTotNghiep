<?php

namespace Database\Seeders;

use App\Models\Order_Detail;
use Illuminate\Database\Seeder;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order_Detail::factory()->count(50)->create();
    }
}
