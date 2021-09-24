<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PrecioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        \App\Models\precio::factory(10)->create();
    }
}
