<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Felipe Silva',
            'email' => 'felipe@alternativesistemas.com.br',
            'password' => bcrypt('password')
        ]);
    }
}
