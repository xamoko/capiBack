<?php

namespace Database\Seeders;
use App\Models\user_domicilio;
use Illuminate\Database\Seeder;

class user_domicilio_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user_domicilio::factory(100)->create();
    }
}
