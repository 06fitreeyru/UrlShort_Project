<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = [
            [
                'name' => 'Admin.test',
                'email' => 'admin@example.com',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Admin1.test',
                'email' => 'admin1@example.com',
                'password' => bcrypt('123456'),
            ]
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
