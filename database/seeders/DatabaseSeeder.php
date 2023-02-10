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
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(AdminSeed::class);
        // \App\Models\Trabalhador::factory(35)->create();
        // \App\Models\CidadaoEstrangeiro::factory(55)->create();
    }
}
