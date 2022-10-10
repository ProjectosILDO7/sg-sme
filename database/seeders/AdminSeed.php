<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Seeder;

class AdminSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::Create([
            'name'=>'Ildo Cuema',
            'email'=>'ildocuema@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('Ildo7..'), // password
            'admin'=> '0',
            // 'remember_token' => Str::random(10),
        ]);

    }
}
