<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->insert([
            "id" => "1",
            "name" => "Mico Wijaya",
            "email" => "micowijaya@temp.com",
            "password" => bcrypt("12345678"),
            "occupation" => "Student",
        ]);
    }
}
