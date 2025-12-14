<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $this->call([
            UserSeeder::class,
            AdministratorSeeder::class,
            // EmpresaSeeder::class,
            // ConfiguracionSeeder::class,
            // RiderSeeder::class,
            // DriverSeeder::class,
            // BrandSeeder::class,
            // CarModelSeeder::class
        ]);
    }
}
