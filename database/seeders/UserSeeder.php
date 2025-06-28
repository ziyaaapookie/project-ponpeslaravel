<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $user = [
            'name' => 'admin-ponpes',
            'email' => 'adminponpesdigital@gmail.com',
            'password' => bcrypt('123123123'),
        ];

        User::create($user);
    }
}
