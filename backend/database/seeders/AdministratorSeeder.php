<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('administrators')->insert([
            'id' => 1,
            'nombre_completo' => 'Juan Peres',
            'user_id' => 1,
        ]);
    }
}
