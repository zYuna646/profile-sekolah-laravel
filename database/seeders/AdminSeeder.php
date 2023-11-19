<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'Admin',
                'email' => 'adminsekolah123@gmail.com',
                'password' => Hash::make('admin12345'),
                'role' => 'admin'
            ], [
                'name' => 'Guru',
                'email' => 'gurusekolah123@gmail.com',
                'password' => Hash::make('guru12345'),
                'role' => 'guru'
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
