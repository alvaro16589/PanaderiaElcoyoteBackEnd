<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        \App\Models\tipo::factory(4)->create();
    }
}
